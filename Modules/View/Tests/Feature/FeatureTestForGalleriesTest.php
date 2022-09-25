<?php

namespace Modules\View\Tests\Feature;

use App\Models\Gallery\Gallery;
use Tests\TestCase;

class FeatureTestForGalleriesTest extends TestCase
{

    public function testList()
    {
        $this->get(route('galleries.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = Gallery::first();
        $this->get(route('galleries.show', $event->id))
            ->assertOk();
    }

}
