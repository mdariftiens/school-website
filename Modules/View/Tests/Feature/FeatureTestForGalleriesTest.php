<?php

namespace Modules\View\Tests\Feature;

use App\Models\Gallery\Gallery;
use Tests\BaseTestCase;

class FeatureTestForGalleriesTest extends BaseTestCase
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
