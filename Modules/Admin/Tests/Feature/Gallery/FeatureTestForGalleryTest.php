<?php

namespace Modules\Admin\Tests\Feature\Gallery;

use App\Models\Gallery\Gallery;
use Tests\TestCase;

class FeatureTestForGalleryTest extends TestCase
{


    public function testList()
    {
        $this->get(route('gallery.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('gallery.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('gallery.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfullyWithMedia()
    {

        $item = Gallery::factory()->create()->toArray();
        $item['mediaids'] = [1];

        $this->post(route('gallery.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('gallery',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>1,
            'mediaable_type' => Gallery::class,
        ]);
    }

    public function testCreateSuccessfullyWithoutMedia()
    {
        $item = Gallery::factory()->create()->toArray();

        $this->post(route('gallery.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('gallery',$item);
    }



    public function testCanVisitEditPage()
    {
        $item = Gallery::factory()->create();
        $this->get(route('gallery.edit', $item->id))
            ->assertSee($item->bangla_title);
    }

    public function testUpdatedSuccessfullyWithMedia()
    {
        $mediaId = 2;
        $item = Gallery::factory()->create()->toArray();
        $item['mediaids'] = [$mediaId];

        $this->put(route('gallery.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('gallery',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>$mediaId,
            'mediaable_type' => Gallery::class,
        ]);
    }

    public function testUpdatedSuccessfullyWithoutMedia()
    {
        $item = Gallery::factory()->create()->toArray();

        $this->put(route('gallery.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('gallery',$item);
    }

    public function testUpdatedFailShowValidationError()
    {
        $gallery = Gallery::factory()->create();
        $galleryWillUpdateArray = $gallery->toArray();
        $galleryWillUpdateArray['english_title'] = null;

        $this->put(route('gallery.update', $gallery->id),
            $galleryWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('gallery.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $gallery = Gallery::factory()->create();
        $this->delete(route('gallery.destroy', $gallery->id))
            ->assertSessionHas('message');
        $this->assertDatabaseMissing('gallery', $gallery->toArray());
    }

}
