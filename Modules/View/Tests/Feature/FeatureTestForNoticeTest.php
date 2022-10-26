<?php

namespace Modules\View\Tests\Feature;

use App\Models\Notice\Notice;
use Tests\BaseTestCase;

class FeatureTestForNoticeTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('notices.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = Notice::where('is_published', Notice::IS_PUBLISHED)->first();
        $this->get(route('notices.show', $event->id))
            ->assertOk();
    }

}
