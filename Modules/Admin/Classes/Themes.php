<?php

namespace Modules\Admin\Classes;

use App\Exceptions\ThemeConfigSidebarInfoNotFoundException;
use App\Exceptions\ThemeNotFoundException;
use function Composer\Autoload\includeFile;

class Themes
{
    private $frontendThemeDir ;

    public function __construct()
    {
        $this->frontendThemeDir = resource_path('views/themes/frontend-themes');
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
}
