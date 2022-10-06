<?php

declare(strict_types=1);

namespace Jpmschuler\RedirectMissingSite\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Http\Response;
use TYPO3\CMS\Core\Http\Stream;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Controller\ErrorController;
use TYPO3\CMS\Frontend\Page\PageAccessFailureReasons;

class MissingSiteRedirect implements MiddlewareInterface
{
    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $site = $request->getAttribute('site', null);

        if (!$site instanceof Site) {
            $siteNotFoundErrorPage = GeneralUtility::makeInstance(ExtensionConfiguration::class)
                ->get('redirectmissingsite', 'siteNotFoundErrorPage');
            $url = $siteNotFoundErrorPage;
            if (is_numeric($siteNotFoundErrorPage)) {
                $siteNotFoundErrorPage = (int)$siteNotFoundErrorPage;
                if ($siteNotFoundErrorPage > 0) {
                    /** @var SiteFinder $siteFinder */
                    $siteFinder = GeneralUtility::makeInstance(SiteFinder::class);
                    $newSite = $siteFinder->getSiteByPageId($siteNotFoundErrorPage);
                    $request = $request->withAttribute('site', $newSite);
                    $url = $newSite->getBase() . 'index.php?id=' . $siteNotFoundErrorPage;
                }
            }
            if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
                $options = [
                    'http' => [
                        'ignore_errors' => true,
                        'header' => "Content-Type: text/html\r\n",
                    ],
                ];
                $context = stream_context_create($options);
                $content = file_get_contents($url, false, $context);

                return self::return404Response($content);
            }

            return GeneralUtility::makeInstance(ErrorController::class)->pageNotFoundAction(
                $request,
                'No site configuration found for this domain name. ' . $url,
                ['code' => PageAccessFailureReasons::PAGE_NOT_FOUND]
            );
        }

        return $handler->handle($request);
    }

    public static function return404Response($htmlContent)
    {
        $body = new Stream('php://temp', 'rw');
        $body->write($htmlContent);

        return (new Response())
            ->withHeader('Content-Type', 'text/html')
            ->withHeader('X-Robots-Tag', 'noindex')
            ->withBody($body)
            ->withStatus(404);
    }
}
