<?php

namespace Modules\Admin\Tests\Feature\Settings;

use Modules\Admin\Classes\Themes;
use Tests\TestCase;

class FeatureTestForSettingsTest extends TestCase
{
    public function testHasListingPage()
    {
        $this->get(route('settings.create'))
            ->assertOk();
    }

    public function testCreatePageWithMultipleSectionPage()
    {
        $sections = getThemeSections();
        foreach ($sections as $section){
            $this->get(route('settings.create').'?section='.$section)
                ->assertOk();
        }
    }

    public function testCanSaveSettings()
    {

        $sectionWithFields = (new Themes())->settingPageTypeWithFields();

        $sections = array_keys($sectionWithFields);

        $fields = [];

        foreach ($sections as $section)
        {
            $fields = array_merge($fields,  $sectionWithFields[$section]);
        }

        $this->post(route('settings.store'),$fields)
            ->assertSessionHas('message');
    }


}
