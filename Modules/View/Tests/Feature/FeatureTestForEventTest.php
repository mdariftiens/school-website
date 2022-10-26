<?php

namespace Modules\View\Tests\Feature;

use App\Models\Event\Event;
use Tests\BaseTestCase;

class FeatureTestForEventTest extends BaseTestCase
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
