<?php

namespace Modules\Admin\Classes;


class Themes
{
    private $frontendThemeDir ;

    public function __construct()
    {
        $this->frontendThemeDir = module_path('view') . '/Resources/views/' ;
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

    function getWidgetTemplateList($widgetType):array{
        return $this->getConfig(getCurrentThemeId())['widget_templates'][$widgetType]??['default'=>'No Widget Template found in Config tile.'];
    }

    public function getSidebarList(string $themeName=null)
    {
        if (!$themeName){
            $themeName = request()->themename;
        }else {
            $themeName = getCurrentThemeId();
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

            'theme'=>[
                $prefix.'english_font' =>'Roboto',
                $prefix.'bangla_font' =>'Cormorant+Garamond',
                $prefix.'color' =>'#da373d',
                $prefix.'bgColor' =>'#5899b7',
                $prefix.'titleColor' =>'#3B5998',
            ],

            'cache'=>[
                $prefix.'is_enable' =>'no',
                $prefix.'ttl' =>'3600', //in second
                $prefix.'clear_cache_action' =>'',
            ],

            'global' => [
                $prefix . 'web_menu' => "1",
                $prefix . 'mobile_menu' => "1",
                $prefix . 'display_menu_logo' => "no",
                $prefix . 'menu_logo_url' => "https://sagc.edu.bd/wp-content/themes/sagc/sagc/logo-icon/sagc.png",
                $prefix . 'school_name' => "SHAHEED BIR UTTAM LT ANWAR GIRLS' COLLEGE",
                $prefix . 'school_code_eiin' => "School Code : 1262 | College Code : 1000 | EIIN : 132143",
                $prefix . 'google_map' => '<iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14603.125165517895!2d90.3921266!3d23.7908013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x136e3a32720e8c75!2sShaheed%20Bir%20Uttam%20Lt%20Anwar%20Girls%E2%80%99%20College!5e0!3m2!1sen!2sbd!4v1661753885481!5m2!1sen!2sbd"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],

            'homepage' => [
                $prefix . 'homepage_layout' => 'default', // full-width
                $prefix . 'homepage_slider_visibility' => 'yes',
                $prefix . 'homepage_right_sidebar_visibility' => 'yes',
                $prefix . 'homepage_left_sidebar_visibility' => '0',
                $prefix . 'homepage_about_school_visibility' => 'yes',
                $prefix . 'homepage_set_page_id' => 1,

            ],

            'generalpage' => [
                $prefix . 'generalpage_layout' => 'full-width',
                $prefix . 'generalpage_right_sidebar_visibility' => 'no',
                $prefix . 'generalpage_left_sidebar_visibility' => 'no',
            ],

            'topbar' => [
                $prefix . 'top_bar_visibility' => 'yes',
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
                $prefix . 'top_menu_visibility' => 'yes',
                $prefix . 'top_menu_template' => 'default',
                $prefix . 'main_menu_visibility' => 'yes',
                $prefix . 'main_menu_template' => 'default',
            ],

            'ticker' => [
                $prefix . 'ticker_visibility' => 'yes',
                $prefix . 'ticker_visibility_only_homepage' => 'yes',
                $prefix . 'ticker_template' => 'default',
            ],

            'slider' => [
                $prefix . 'slider_id' => '1',
                $prefix . 'slider_item_to_show' => '1',
                $prefix . 'slider_autoplay' => 'true',
                $prefix . 'slider_autoplayTimeout' => '3000',
                $prefix . 'slider_loop' => 'true',
                $prefix . 'slider_autoplayHoverPause' => 'true',
                $prefix . 'slider_dots' => 'true',
                $prefix . 'slider_lazyLoad' => 'true',
                $prefix . 'slider_nav_show' => 'true',
                $prefix . 'slider_navText' => "\"<i class='fa fa-chevron-left'></i>\", \"<i class='fa fa-chevron-right'></i>\"",
            ],
            'footer' => [
                $prefix . 'footer_template' => 'default',
                $prefix . 'footer_copyright_text' => 'default',
            ],

            'mail' => [
                'mail_mailer'=> 'smtp', // fixed . Mail is only work for SMTP
                'mail_host'=> 'mailhog',
                'mail_port'=> '1025',
                'mail_username'=> 'anonymous',
                'mail_password'=> '',
                'mail_from_address'=> 'admin@institute.com',
                'mail_from_name'=> 'From School/Collage',
            ],

//            Config::set('mail.driver', config('settings.maildriver'));
//        Config::set('mail.host', config('settings.mailhost'));
//        Config::set('mail.port', config('settings.mailport'));
//        Config::set('mail.encryption', config('settings.mailencryption'));
//        Config::set('mail.username', config('settings.mailusername'));
//        Config::set('mail.password', config('settings.mailpassword'));
        ];
    }
}
