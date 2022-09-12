<?php

namespace Modules\Admin\Tests\Feature\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\EventRequest;
use Tests\TestCase;

class FeatureTestForEventTest extends TestCase
{

    public function testEventShowValidationError()
    {
        $this->post(route('event.store'),[])->assertSessionHasErrors();
    }

    public function testEventCreateSuccessfully()
    {
        $dataArray = [
            'category_id' => EventCategory::first()->id,
            'english_title' => 'english_title',
            'bangla_title' => 'bangla_title',
            'bangla_description' => null,
            'english_description' => null,
            'bangla_venue' => 'nullable',
            'english_venue' => 'nullable',
            'from_datetime' => now(),
            'to_datetime' => now(),
            'is_published' => 0
        ];

        $this->post(route('event.store'),$dataArray )
            ->assertSessionHas('message');
    }


    public function testEventUpdatedSuccessfully()
    {
        $event = Event::factory()->create();
        $eventWillUpdateArray = $event->toArray();
        $eventWillUpdateArray['english_title'] = 'english_title';

        $this->put(route('event.update', $event->id),
            $eventWillUpdateArray
        )
            ->assertSessionHas('message');

    }

    public function testEventUpdatedFailShowValidationError()
    {
        $event = Event::factory()->create();
        $eventWillUpdateArray = $event->toArray();
        $eventWillUpdateArray['english_title'] = '';

        $this->put(route('event.update', $event->id),
            $eventWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testEventDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('event.destroy', 0))
            ->assertNotFound();
    }

    public function testEventDeletedSuccessfully()
    {
        $event = Event::factory()->create();
        $this->delete(route('event.destroy', $event->id))
            ->assertSessionHas('message');
    }



    public function testEventList()
    {
        $this->get(route('event.index'))
            ->assertOk();
    }
}
