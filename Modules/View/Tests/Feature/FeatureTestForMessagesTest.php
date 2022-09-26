<?php

namespace Modules\View\Tests\Feature;

use App\Models\Event\Event;
use App\Models\Message\Message;
use App\Models\Notice\Notice;
use Tests\TestCase;

class FeatureTestForMessagesTest extends TestCase
{


    public function testList()
    {
        $this->get(route('messages.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = Message::first();
        $this->get(route('messages.show', $event->id))
            ->assertOk();
    }

}
