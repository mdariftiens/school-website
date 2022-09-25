<?php

namespace Modules\View\Tests\Feature;

use App\Models\ManagementCommittee\ManagementCommittee;
use Tests\TestCase;

class FeatureTestForManagementCommitteesTest extends TestCase
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
