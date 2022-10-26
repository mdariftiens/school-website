<?php

namespace Modules\Admin\Tests\Feature\Slider;

use Modules\Admin\Entities\Widgets\Widgets;
use Modules\Admin\Repository\Widgets\WidgetsRepository;
use Tests\BaseTestCase;

class FeatureTestForWidgetTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('widgets.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePageForEveryWidgetType()
    {
        $widgetRepo = new WidgetsRepository();

        foreach ($widgetRepo->getWidgetType() as $type=>$title){
            $this->get(route('widgets.create') . '?widgetType=' . $type)
                ->assertOk();
        }

    }

    public function testShowValidationError()
    {
        $this->post(route('widgets.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateCustomWidget(){
        $data = [
            'type' => 'custom',
            'bangla_title' => 'custom-1',
            'english_title' => 'custom 1',
            'header_show_hide' => 1,
            'header_template' =>'default',
            'custom' => [
                'bangla_text_or_html' =>'Bangla Lorem ipsum dolor sit amet',
                'english_text_or_html' =>'English Lorem ipsum dolor sit amet',
            ]
        ];

        $this->post(route('widgets.store'), $data)
            ->assertSessionHas('message');

    }

    public function testUpdateCustomWidget(){
        $data = [
            'type' => 'custom',
            'bangla_title' => 'custom-1',
            'english_title' => 'custom 1',
            'header_show_hide' => 1,
            'header_template' =>'default',
            'custom' => [
                'bangla_text_or_html' =>'Bn a 1',
                'english_text_or_html' =>'English a 1',
            ]
        ];

        $widgetId = Widgets::with('widgetFields')
            ->where('type',  'custom')
            ->first()->id;

        $data['id'] = $widgetId;
        if ($widgetId){
            $this->put(route('widgets.update', $widgetId ), $data)
                ->assertSessionHas('message');
        }

    }



    public function testDelete()
    {
        $widget = Widgets::first();

        if ($widget){
            $id = $widget->id;

            $this->delete(route('widgets.destroy', $id))
                ->assertJsonStructure(['message']);
        }

    }

}
