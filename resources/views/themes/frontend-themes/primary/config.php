<?php
function getThemeConfig():array{

    $config = [
        'name'=>'Primary Theme',
        'id'=>'primary-theme',

        'sidebars' =>[
            'home-right-sidebar',
            'home-left-sidebar',
            'home-header-top-right-sidebar',
            'home-footer-sidebar',

            'detail-page-right-sidebar',
            'detail-page-left-sidebar',
            'detail-page-header-top-right-sidebar',
            'detail-page-footer-sidebar',
        ],


    ];

    return $config;
}
