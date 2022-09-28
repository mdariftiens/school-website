<?php

namespace Modules\Admin\Tests\Feature\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\EventRequest;
use Tests\TestCase;

class FeatureTestForEventCategoryTest extends TestCase
{

    public function testCanVisitCreatePage()
    {
        $this->get(route('event-category.create'))
            ->assertOk();
    }

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

        $this->assertDatabaseHas('event_categories',$dataArray);
    }



    public function testCanVisitEditPage()
    {
        $event = EventCategory::factory()->create();
        $this->get(route('event-category.edit', $event->id))
            ->assertSee($event->bangla_name);
    }

    public function testUpdatedSuccessfully()
    {
        $event = EventCategory::factory()->create();
        $eventWillUpdateArray = $event->toArray();
        $eventWillUpdateArray['bangla_name'] = 'bangla_name' . time();

        $this->put(route('event-category.update', $event->id),
            $eventWillUpdateArray
        )
            ->assertSessionHas('message');
        unset($eventWillUpdateArray['updated_at']);
        $this->assertDatabaseHas('event_categories', $eventWillUpdateArray);

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

    public function testDeletedSuccessfully()
    {
        $event = EventCategory::factory()->create();
        $this->delete(route('event-category.destroy', $event->id))
            ->assertSessionHas('message');
        $this->assertNotNull(EventCategory::withTrashed()->find($event->id)->deleted_at);
    }



    public function testList()
    {
        $eventCategory = EventCategory::factory()->create();
        $this->get(route('event-category.index'))
            ->assertSee($eventCategory->english_name);
    }
}
