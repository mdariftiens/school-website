<?php

namespace Modules\Admin\Tests\Feature\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Tests\TestCase;

class FeatureTestForEventTest extends TestCase
{


    public function testList()
    {
        $this->get(route('event.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('event.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('event.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfully()
    {

        $eventCategory = EventCategory::factory()->create();
        $item = Event::factory()->create([
            'category_id' => $eventCategory->id
        ])->toArray();
        unset($item['created_at']);
        unset($item['updated_at']);
        $this->post(route('event.store'),$item)
            ->assertSessionHas('message');

        $this->assertDatabaseHas('events',$item);
    }



    public function testCanVisitEditPage()
    {
        $item = Event::factory()->create();
        $this->get(route('event.edit', $item->id))
            ->assertSee($item->bangla_title);
    }

    public function testUpdatedSuccessfully()
    {
        $eventWillUpdateArray = Event::factory()->create()->toArray();
        $eventWillUpdateArray['bangla_title'] = 'bangla_title' . time();
        $this->put(route('event.update', $eventWillUpdateArray['id']),
            $eventWillUpdateArray
        )
            ->assertSessionHas('message');
        unset($eventWillUpdateArray['updated_at']);
        $this->assertDatabaseHas('events', $eventWillUpdateArray);

    }

    public function testUpdatedFailShowValidationError()
    {
        $event = Event::factory()->create();
        $eventWillUpdateArray = $event->toArray();
        $eventWillUpdateArray['category_id'] = null;

        $this->put(route('event.update', $event->id),
            $eventWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('event.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $event = Event::factory()->create();
        $this->delete(route('event.destroy', $event->id))
            ->assertSessionHas('message');
        $this->assertNotNull(Event::withTrashed()->find($event->id)->deleted_at);
    }


}
