<?php
function getThemeConfig():array{

    $config = [
        'name'=>'Primary Theme',
        'id'=>'primary-theme',

        'sidebars' =>[
            'header-top-right-sidebar',

            'home-right-sidebar',
            'home-left-sidebar',
            'home-footer-top-sidebar',
            'home-footer-middle-sidebar',
            'home-footer-bottom-sidebar',

            'general-right-sidebar',
            'general-left-sidebar',
            'general-footer-sidebar',

            'footer-left-sidebar',
            'footer-left-2nd-sidebar',

        ],

        'widget_templates' =>
        [

            'message' => [
                'default' => 'Default',
                'style1' => 'Style 1',
                'style2' => 'Style 2',
                'style3' => 'Style 3',
            ],

            'notice' => [
                'default' => 'Default'
            ],

            'event' => [
                'default' => 'Default',
                'style1' => 'Style 1',
            ],

            'achievement' => [
                'default' => 'Default',
                'style1' => 'Style 1',
            ],

            'news' => [
                'default' => 'Default',
                'style1' => 'Style 1',
                'style2' => 'Style 2',
                'style3' => 'Style 3',
            ],

            'custom' => [
                'default' => 'Default',
            ],

            'social' => [
                'default' => 'Default',
            ],
        ],

    ];

    return $config;
}
