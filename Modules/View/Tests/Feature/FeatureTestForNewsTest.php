<?php

namespace Modules\View\Tests\Feature;

use App\Models\Event\Event;
use App\Models\Message\Message;
use App\Models\News\News;
use App\Models\Notice\Notice;
use Tests\TestCase;

class FeatureTestForNewsTest extends TestCase
{


    public function testList()
    {
        $this->get(route('news.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = News::first();
        $this->get(route('news.show', $event->id))
            ->assertOk();
    }

}
