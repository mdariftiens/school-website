<?php

namespace Modules\View\Tests\Feature;

use App\Models\Achievements\Achievements;
use Tests\TestCase;

class FeatureTestForAchievementsTest extends TestCase
{


    public function testList()
    {
        $this->get(route('achievements.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = Achievements::first();
        $this->get(route('achievements.show', $event->id))
            ->assertOk();
    }

}
