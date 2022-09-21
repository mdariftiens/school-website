<?php

namespace Database\Seeders;

use App\Models\Media\Media;
use App\Models\Option\Option;
use App\Models\Slider\Slider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Admin\Classes\Themes;

class ThemeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $sectionWithFields = (new Themes())->settingPageTypeWithFields();

        $sections = array_keys($sectionWithFields);

        $fields = [];

        foreach ($sections as $section)
        {
            $fields = array_merge($fields,  $sectionWithFields[$section]);
        }

        foreach ($fields as $name => $value){
            Option::create([
                'name' => $name,
                'value' => $value
            ]);
        }
    }
}
