<?php

namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Backend\Entities\WidgetFields;
use Modules\Backend\Entities\Widgets;

class WidgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $widget = Widgets::create([
            'type' => 'notice',
            'name' => 'notice-1',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'number_of_notice_show',
            'field_value' => '3',
        ]);

        $widget = Widgets::create([
            'type' => 'notice',
            'name' => 'notice-2',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'number_of_notice_show',
            'field_value' => '1',
        ]);


        $widget = Widgets::create([
            'type' => 'event',
            'name' => 'event-1',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'number_of_event_show',
            'field_value' => '3',
        ]);

        $widget = Widgets::create([
            'type' => 'custom-widget',
            'name' => 'custom-widget-1',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'display-text-html',
            'field_value' => 'Lorem ipsum dolor sit amet, suas tation eu has, te elit legere vidisse eos, nisl adipisci vel in. Eu ius alia antiopam periculis. Id his populo urbanitas, eam ullum patrioque torquatos at. Pro singulis consulatu ea, in ius falli paulo consequat. Et ius ocurreret evertitur scribentur. Mea cu alii oratio legimus, ut vitae causae discere mel. Mei ne nonumy referrentur conclusionemque.',
        ]);



    }
}
