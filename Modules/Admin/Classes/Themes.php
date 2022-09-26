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

            'global' => [
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
                $prefix . 'homepage_about_school_title' => 'Welcome to SHAHEED BIR UTTAM LT ANWAR GIRLS\' COLLEGE (SAGC)',
                $prefix . 'homepage_about_school_detail' => 'Shaheed Bir Uttam Lt Anwar Girls’ College is one of the renowned institutions located inside the Dhaka Cantonment on an area of 5.24 acres. The institution started its journey in January 1957 under Cantonment Board as a primary school. In 1963 it had emerged as a full-fledged high school named as Cantonment Modern School.

Since its inception, the institution has been striving to impart quality education to the students. Being a girls\' college, it has been a bench-mark on the advancement of female education in the country. Besides the glorious achievements in academic results, the students of this institution have been playing a commendable role in various co-curricular activities. This institution is advancing with the motto,(“O Lord, thrive my knowledge.”)

In 1966 first high school building was inaugurated by the then GOC of erstwhile East pakistan Major general Fazle Mukim Khan and at that time medium of instruction of the institution was English. After the liberation war, the institution was named after martyred army officer Lt. Anwar Hossain BU. Since then it was known as shaheed Anwar girls’ school. In 1974 it became completely a Bengali medium school and remained under cantonment Board till 1984, when it was brought under Army Headquarters a special committee was formed to take care of the school. In 1990 when the college section was opened the school came to be known as Shaheed Anwar girls’ college. In July 21, 1990 a principal joined here for the first time as head of the institution. In the beginning college section started its activities with humanities group only. Successively it opened science group in 1992 and commerce group in 1996. In 2001 for the first time an officer from Army Education Corps joined the institution as principal.

        Now this institution is established as a full fledged intermediate college and known as shaheed Bir Uttam Lt. Anwar girls’ college.',
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
            ]
        ];
    }
}
