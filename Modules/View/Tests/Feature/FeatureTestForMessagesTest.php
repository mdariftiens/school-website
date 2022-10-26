<?php

namespace Modules\View\Tests\Feature;

use App\Models\Message\Message;
use Tests\BaseTestCase;

class FeatureTestForMessagesTest extends BaseTestCase
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
