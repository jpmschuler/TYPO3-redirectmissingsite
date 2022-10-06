<?php
if (PHP_SAPI !== 'cli') {
    die('This script supports command line usage only. Please check your command.');
}

$rules = [
    '@PSR2' => true,
    '@PHP56Migration' => true,
    '@PHP56Migration:risky' => true,
    '@PHP70Migration' => true,
    '@PHP71Migration' => true,
    '@PHPUnit57Migration:risky' => true,
    '@PHPUnit60Migration:risky' => true,
    '@PHPUnit75Migration:risky' => true,

    'align_multiline_comment' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => true,
    'blank_line_before_statement' => true,
    'braces' => [
        'allow_single_line_closure' => true,
    ],
    'class_attributes_separation' => ['elements' => ['method']],
    'class_definition' => ['single_line' => true],
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'comment_to_phpdoc' => true,
    'compact_nullable_typehint' => true,
    'concat_space' => ['spacing' => 'one'],
    'declare_equal_normalize' => true,
    'dir_constant' => true,
    'ereg_to_preg' => true,
    'error_suppression' => true,
    'escape_implicit_backslashes' => true,
    'explicit_indirect_variable' => true,
    'explicit_string_variable' => true,
    'final_internal_class' => true,
    'fopen_flag_order' => true,
    'fopen_flags' => ['b_mode' => false],
    'fully_qualified_strict_types' => true,
    'function_to_constant' => true,
    'function_typehint_space' => true,
    'hash_to_slash_comment' => true,
    'heredoc_to_nowdoc' => true,
    'implode_call' => true,
    'include' => true,
    'is_null' => true,
    'linebreak_after_opening_tag' => true,
    'list_syntax' => ['syntax' => 'short'],
    'logical_operators' => true,
    'lowercase_cast' => true,
    'lowercase_static_reference' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
    'method_chaining_indentation' => true,
    'method_separation' => true,
    'modernize_types_casting' => true,
    'multiline_comment_opening_closing' => true,
    'native_function_casing' => true,
    'new_with_braces' => true,
    'no_alias_functions' => true,
    'no_alternative_syntax' => true,
    'no_binary_string' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'break',
            'continue',
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'return',
            'square_brace_block',
            'throw',
            'use',
        ],
    ],
    'no_extra_consecutive_blank_lines' => true,
    'no_homoglyph_names' => true,
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => ['use' => 'echo'],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_multiline_whitespace_before_semicolons' => true,
    'no_php4_constructor' => true,
    'no_short_bool_cast' => true,
    'no_short_echo_tag' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_after_function_name' => true,
    'no_spaces_around_offset' => true,
    'no_spaces_inside_parenthesis' => true,
    'no_superfluous_elseif' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_unneeded_final_method' => true,
    'no_unreachable_default_argument_value' => true,
    'no_unset_cast' => true,
    'no_unset_on_property' => true,
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'non_printable_character' => [
        'use_escape_sequences_in_strings' => false,
    ],
    'normalize_index_brace' => true,
    'object_operator_without_whitespace' => true,
    'ordered_imports' => true,
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_no_package' => true,
    'phpdoc_indent' => true,
    'phpdoc_inline_tag' => true,
    'phpdoc_no_access' => true,
    'phpdoc_no_alias_tag' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_return_self_reference' => true,
    'phpdoc_scalar' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_types' => true,
    'phpdoc_types_order' => [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ],
    'phpdoc_var_annotation_correct_order' => true,
    'phpdoc_var_without_name' => true,
    'php_unit_construct' => true,
    'php_unit_dedicate_assert' => true,
    'php_unit_expectation' => true,
    'php_unit_fqcn_annotation' => true,
    'php_unit_method_casing' => true,
    'php_unit_mock' => true,
    'php_unit_no_expectation_annotation' => true,
    'php_unit_ordered_covers' => true,
    'php_unit_set_up_tear_down_visibility' => true,
    'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
    'protected_to_private' => true,
    'psr4' => true,
    'return_type_declaration' => true,
    'self_accessor' => true,
    'semicolon_after_instruction' => true,
    'set_type_to_cast' => true,
    'short_scalar_cast' => true,
    'single_blank_line_before_namespace' => true,
    'single_class_element_per_statement' => true,
    'single_line_comment_style' => true,
    'single_quote' => true,
    'space_after_semicolon' => [
        'remove_in_empty_for_expressions' => true,
    ],
    'standardize_not_equals' => true,
    'strict_comparison' => true,
    'strict_param' => true,
    'string_line_ending' => true,
    'standardize_increment' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline_array' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'void_return' => true,
    'whitespace_after_comma_in_array' => true,
];

$config = \PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules($rules);

$finder = \PhpCsFixer\Finder::create()
    ->in('Classes')
    ->in('Configuration');

return $config->setFinder($finder);
