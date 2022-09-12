<?php

namespace Modules\Admin\Tests\Feature\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\EventRequest;
use Tests\TestCase;

class FeatureTestForEventCategory extends TestCase
{

    public function testShowValidationError()
    {
        $this->post(route('event-category.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfully()
    {
        $dataArray = [
            'english_name' => 'english_title' . time(),
            'bangla_name' => 'bangla_title' . time(),
        ];

        $this->post(route('event-category.store'),$dataArray)
            ->assertSessionHas('message');
    }


    public function testUpdatedSuccessfully()
    {
        $event = EventCategory::factory()->create();
        $eventWillUpdateArray = $event->toArray();
        $eventWillUpdateArray['bangla_name'] = 'bangla_name';

        $this->put(route('event-category.update', $event->id),
            $eventWillUpdateArray
        )
            ->assertSessionHas('message');

    }

    public function testUpdatedFailShowValidationError()
    {
        $event = EventCategory::factory()->create();
        $eventWillUpdateArray = $event->toArray();
        $eventWillUpdateArray['bangla_name'] = '';

        $this->put(route('event-category.update', $event->id),
            $eventWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('event-category.destroy', 0))
            ->assertNotFound();
    }

    public function testEventDeletedSuccessfully()
    {
        $event = EventCategory::factory()->create();
        $this->delete(route('event-category.destroy', $event->id))
            ->assertSessionHas('message');
    }



    public function testEventList()
    {
        $this->get(route('event-categoryindex'))
            ->assertOk();
    }
}
