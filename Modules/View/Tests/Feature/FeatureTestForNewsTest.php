<?php

namespace Modules\View\Tests\Feature;

use App\Models\News\News;
use Tests\BaseTestCase;

class FeatureTestForNewsTest extends BaseTestCase
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
