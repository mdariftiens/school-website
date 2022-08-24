<?php

namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Backend\Entities\Widgets\WidgetBar;
use Modules\Backend\Entities\Widgets\WidgetFields;
use Modules\Backend\Entities\Widgets\Widgets;

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
            'title' => 'notice 1',
            //'name' => 'notice-1',
            'header_template' =>'',
            'header_background_color' => null,
            'header_text_color' => null,
            'header_hover_color' => null,
            'content_background_color' => null,
            'content_text_color' => null,
            'content_hover_color' => null,
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'limit_notice_number',
            'field_value' => 3,
        ]);

        WidgetBar::create([
            'widget_id' => $widget->id,
            'sidebar_name' => 'home-right-sidebar',
            'display_serial_number' => 2,
        ]);

        $widget = Widgets::create([
            'type' => 'message',
            //'name' => 'message-2',
            'title' => 'message-2',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'number_of_notice_show',
            'field_value' => '1',
        ]);

        WidgetBar::create([
            'widget_id' => $widget->id,
            'sidebar_name' => 'home-right-sidebar',
            'display_serial_number' => 1,
        ]);


        $widget = Widgets::create([
            'type' => 'event',
            //'name' => 'event-1',
            'title' => 'event-1',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'number_of_event_show',
            'field_value' => '3',
        ]);

        WidgetBar::create([
            'widget_id' => $widget->id,
            'sidebar_name' => 'home-footer-sidebar',
            'display_serial_number' => 1,
        ]);

        $widget = Widgets::create([
            'type' => 'custom-widget',
            //'name' => 'custom-widget-1',
            'title' => 'custom-widget-1',
        ]);

        WidgetFields::create([
            'widget_id' => $widget->id,
            'field_name' => 'display-text-html',
            'field_value' => 'Lorem ipsum dolor sit amet, suas tation eu has, te elit legere vidisse eos, nisl adipisci vel in. Eu ius alia antiopam periculis. Id his populo urbanitas, eam ullum patrioque torquatos at. Pro singulis consulatu ea, in ius falli paulo consequat. Et ius ocurreret evertitur scribentur. Mea cu alii oratio legimus, ut vitae causae discere mel. Mei ne nonumy referrentur conclusionemque.',
        ]);



    }
}
