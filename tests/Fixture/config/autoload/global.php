<?php

return [
    'view_manager' => [
        'doctype'                 => \Laminas\View\Helper\Doctype::HTML5,
        'template_map'            => [
            'layout' => __DIR__ . '/../../view/Map/layout.twig',
        ],
        'template_path_stack'     => [
            'ZendTwig' => __DIR__ . '/../../view/ZendTwig',
        ],
        'default_template_suffix' => \ZendTwig\Service\TwigLoaderFactory::DEFAULT_SUFFIX,
    ],
];
