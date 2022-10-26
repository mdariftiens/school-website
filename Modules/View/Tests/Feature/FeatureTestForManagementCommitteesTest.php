<?php

namespace Modules\View\Tests\Feature;

use App\Models\ManagementCommittee\ManagementCommittee;
use Tests\BaseTestCase;

class FeatureTestForManagementCommitteesTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('management-committees.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = ManagementCommittee::first();
        $this->get(route('management-committees.show', $event->id))
            ->assertOk();
    }

}
