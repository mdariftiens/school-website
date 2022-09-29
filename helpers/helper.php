<?php

use Modules\Admin\Classes\Themes;

function getWidgetCustomFieldValue($widgetFieldsCollection, $fieldName){
    return optional($widgetFieldsCollection->where('field_name',$fieldName)->first())->field_value;
}



function getOptions(){
    static $options = null;
    if(!$options){
        $options = App\Models\Option\Option::where('is_autoload', App\Models\Option\Option::AUTOLOAD)
            ->select(['name','value'])
            ->get()
            ->toArray();
    }
    return $options;
}

/**
 * @param $sidebarName
 * @return string as HTML
 */
function getSidebarWithWidgets($sidebarName){
    $widgetIdArray = \Modules\Admin\Entities\Widgets\WidgetBar::select('widget_id')
        ->where('sidebar_name',$sidebarName)
        ->orderBy('display_serial_number')
        ->get()
        ->pluck('widget_id')
        ->toArray();

    if (!$widgetIdArray){
        return '';
    }


    $widgetsWithWidgetDetail = Modules\Admin\Entities\Widgets\Widgets::with('widgetFields')
        ->whereIn('id', $widgetIdArray)
        ->get();

    $widgetsHtml = '';

    foreach ($widgetIdArray as $widgetId) {
        $widgetWithWidgetDetail = $widgetsWithWidgetDetail->where('id', $widgetId)->first();
        $widget = \Modules\View\Classes\WidgetFactory::getWidget($widgetWithWidgetDetail->type);
        $widgetsHtml .=  $widget->show($widgetWithWidgetDetail);
    }

    return $widgetsHtml;

}

function snakeCaseToCamelCase($string){
    // suppose string like : visitor_counter || visitor-counter
    $str = str_replace(['_','-'],' ', $string); // visitor counter
    $str = ucfirst($str); // Visitor Counter
    $str = str_replace(" ",'', $str); // VisitorCounter
    return $str;
}


function isImage($fileName){
    $extension = last(explode('.', $fileName));
    $imgExtArr = ['jpg', 'jpeg', 'png'];
    return in_array($extension, $imgExtArr);
}

function getCurrentThemeId(){
    return getThemeSettingValue('current_theme_id');
}

function getThemeOptions():array{
    static $items = null;
    if ($items){
        return $items;
    }
    return $items = App\Models\Option\Option::select('name','value')->get()->pluck('value','name')->toArray();
}

function getThemeSettingValue($settingKeyName){
    return getThemeOptions()[$settingKeyName] ?? '';
}
function isSidebarActive($sidebarName):bool{
    $themeOptions = getThemeOptions();
    $sidebarId = 'is_'.$sidebarName.'_sidebar_active';
    if (key_exists($sidebarId, $themeOptions)){
        return $themeOptions[$sidebarId];
    }
    return false;
}

function getThemeSectionsWithFields(){
    return (new Themes())->settingPageTypeWithFields();
}

function getThemeSections(): array
{

    $sectionWithFields = getThemeSectionsWithFields();

    $sections = array_keys($sectionWithFields);

    return $sections;
}

function getThemeSectionFields($sectionName): array
{
    return getThemeSectionsWithFields()[$sectionName];
}


function getCurrentRouteName() : string{
    return \Illuminate\Support\Facades\Route::getCurrentRoute()->getName();
}

function isHomepageRightSidebarVisible(){

    if( getThemeSettingValue('_theme_setting_homepage_layout')=='full-width')
    {
        return false;
    }

    if(getThemeSettingValue('_theme_setting_homepage_right_sidebar_visibility')=='yes')
    {
        return true;
    }
    return  false;
}

function isHomepageLeftSidebarVisible(){

    if( getThemeSettingValue('_theme_setting_homepage_layout')=='full-width')
    {
        return false;
    }

    if(getThemeSettingValue('_theme_setting_homepage_left_sidebar_visibility')=='yes')
    {
        return true;
    }
    return  false;
}

function getHomepageContainerCssClasses(){
    $fullWidthCssClass = "sm:w-full md:w-4/4 lg:w-1/1 xl:w-4/4 2xl:w-4/4 ";

    if( getThemeSettingValue('_theme_setting_homepage_layout')=='full-width')
    {
        return $fullWidthCssClass;
    }

    $showLeftSidebar = getThemeSettingValue('_theme_setting_homepage_left_sidebar_visibility')=='yes';


    $showRightSidebar = getThemeSettingValue('_theme_setting_homepage_right_sidebar_visibility')=='yes';

    if ($showLeftSidebar && $showRightSidebar){
        return "sm:w-full md:w-2/4 lg:w-2/4 xl:w-2/4 2xl:w-2/4 ";
    }
    if (!$showLeftSidebar && !$showRightSidebar){
        return $fullWidthCssClass;
    }

    return "sm:w-full md:w-3/4 lg:w-3/4 xl:w-3/4 2xl:w-3/4 ";

}



function isGeneralPageRightSidebarVisible(){

    if( getThemeSettingValue('_theme_setting_generalpage_layout')=='full-width')
    {
        return false;
    }

    if(getThemeSettingValue('_theme_setting_generalpage_right_sidebar_visibility')=='yes')
    {
        return true;
    }
    return  false;
}

function isGeneralPageLeftSidebarVisible(){

    if( getThemeSettingValue('_theme_setting_generalpage_layout')=='full-width')
    {
        return false;
    }

    if(getThemeSettingValue('_theme_setting_generalpage_left_sidebar_visibility')=='yes')
    {
        return true;
    }
    return  false;
}

function getGeneralPageContainerCssClasses(){
    $fullWidthCssClass = "sm:w-full md:w-4/4 lg:w-1/1 xl:w-4/4 2xl:w-4/4 ";

    if( getThemeSettingValue('_theme_setting_generalpage_layout')=='full-width')
    {
        return $fullWidthCssClass;
    }

    $showLeftSidebar = getThemeSettingValue('_theme_setting_generalpage_left_sidebar_visibility')=='yes';


    $showRightSidebar = getThemeSettingValue('_theme_setting_generalpage_right_sidebar_visibility')=='yes';

    if ($showLeftSidebar && $showRightSidebar){
        return "sm:w-full md:w-2/4 lg:w-2/4 xl:w-2/4 2xl:w-2/4 ";
    }
    if (!$showLeftSidebar && !$showRightSidebar){
        return $fullWidthCssClass;
    }

    return "sm:w-full md:w-3/4 lg:w-3/4 xl:w-3/4 2xl:w-3/4 ";

}


function viewWithCache($viewPath,$data=[]){
    $cacheService = new \App\Services\CacheService();
    $generatedView = view($viewPath, $data)->render();
    $cacheService->set(generateCacheKey(), $generatedView);
    return $generatedView;
}

function generateCacheKey(){
    $local = \Illuminate\Support\Facades\App::getLocale();
    $url = request()->fullUrl();
    $key = $local.'_'.$url;
    return $key;
}

function cacheViewClear(){
    if(!app()->runningInConsole())
    {
        $cacheService = new \App\Services\CacheService();
        $cacheService->clear();
    }
}


function getLanguage(){
    $language = [
        'en' => 'english',
        'bn' => 'bangla',
    ];
    return $language[app()->getLocale()];
}

function changeLocalSession(){

}
