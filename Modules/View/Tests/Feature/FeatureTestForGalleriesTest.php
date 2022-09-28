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
        $gallery = Gallery::factory()->create(['is_publish' => 1]);
        $this->get(route('galleries.show', $gallery->id))
            ->assertOk();
    }

}
