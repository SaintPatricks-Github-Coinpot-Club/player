<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/Player')
;

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'fopen_flags' => false,
        'strict_param' => true,
    ))
;