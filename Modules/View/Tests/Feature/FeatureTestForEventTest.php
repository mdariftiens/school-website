<?php

namespace Modules\View\Tests\Feature;

use App\Models\Event\Event;
use Tests\TestCase;

class FeatureTestForEventTest extends TestCase
{


    public function testList()
    {
        $this->get(route('events.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = Event::first();
        $this->get(route('events.show', $event->id))
            ->assertOk();
    }

}
