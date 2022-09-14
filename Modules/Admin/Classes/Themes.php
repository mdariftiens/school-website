<?php

namespace Modules\Admin\Classes;


class Themes
{
    private $frontendThemeDir ;

    public function __construct()
    {
        $this->frontendThemeDir = resource_path('views');
    }

    public function getThemeName():array
    {
        $path = $this->frontendThemeDir;
        $fileFolders = scandir($path);
        $themes = [];
        foreach ($fileFolders as $fileFolder) {
            if ( in_array($fileFolder, ['.','..'])) continue;
            if (is_dir($path.'/'.$fileFolder)){
                $themes [] = $fileFolder;
            }
        }
        return $themes;
    }

    public function getConfig(string $themeName)
    {
        $path = $this->frontendThemeDir.'/'.$themeName.'/config.php';
        if(!file_exists($path)){
            throw new \Exception('Config file not found in path '. $path);
        }
        include_once($path);
        return getThemeConfig();
    }

    public function getSidebarList(string $themeName=null)
    {
        if (!$themeName){
            $themeName = request()->themename;
        }
        if (!$themeName){
            throw new \Exception('Theme name not found.');
        }
        if (!key_exists('sidebars',$this->getConfig($themeName))){
            throw new \Exception("Theme Config Sidebar Info Not Found");
        }
        return $this->getConfig($themeName)['sidebars'];
    }

    public function settingPageTypeWithFields(){
        $prefix = '_theme_setting_';

        return [

            'global' => [
                $prefix . 'school_name' => "SHAHEED BIR UTTAM LT ANWAR GIRLS' COLLEGE",
                $prefix . 'school_code_eiin' => "School Code : 1262 | College Code : 1000 | EIIN : 132143",
                $prefix . 'google_map' => "",
            ],

            'homepage' => [
                $prefix . 'homepage_layout' => 'full-width',
                $prefix . 'homepage_slider_visibility' => '0',
                $prefix . 'homepage_right_sidebar_visibility' => '0',
                $prefix . 'homepage_left_sidebar_visibility' => '0',
                $prefix . 'homepage_about_school_visibility' => '1',
            ],

            'singlepage' => [
                $prefix . 'singlepage_layout' => 'full-width',
                $prefix . 'singlepage_right_sidebar_visibility' => '0',
                $prefix . 'singlepage_left_sidebar_visibility' => '0',
            ],

            'topbar' => [
                $prefix . 'top_bar_visibility' => '0',
                $prefix . 'top_bar_template' => 'default',
                $prefix . 'top_bar_phone_number' => 'default',
                $prefix . 'top_bar_email' => 'default',
                $prefix . 'top_bar_rightside_content' => 'default',
                $prefix . 'top_bar_fb_link' => '#',
                $prefix . 'top_bar_ln_link' => '#',
                $prefix . 'top_bar_tw_link' => '#',
                $prefix . 'top_bar_yt_link' => '#',
            ],

            'header' => [
                $prefix . 'header_template' => 'default',
            ],

            'menu' => [
                $prefix . 'top_menu_visibility' => '0',
                $prefix . 'top_menu_template' => 'default',
                $prefix . 'main_menu_visibility' => '1',
                $prefix . 'main_menu_template' => 'default',
            ],

            'ticker' => [
                $prefix . 'ticker_visibility_only_homepage' => '0',
                $prefix . 'ticker_template' => 'default',
            ],

            'footer' => [
                $prefix . 'footer_template' => 'default',
                $prefix . 'footer_copyright_text' => 'default',
            ]
        ];
    }
}
