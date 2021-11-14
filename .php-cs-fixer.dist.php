<?php

$finder = PhpCsFixer\Finder::create()
	->in([
		__DIR__.'/src',
		__DIR__.'/tests',
	]);

$config = new PhpCsFixer\Config;

return $config->setRules([
        '@Symfony:risky' => true,
        'ternary_to_null_coalescing' => true,
        'phpdoc_align' => false,
        'braces' => false,
        'new_with_braces' => false,
    ])
    ->setIndent("\t")
    ->setLineEnding("\n")
    ->setRiskyAllowed(true)
    ->setFinder($finder);