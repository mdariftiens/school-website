<?php

namespace Modules\Admin\Tests\Feature\Slider;

use App\Models\Slider\Slider;
use Tests\BaseTestCase;

class FeatureTestForSliderTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('slider.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('slider.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('slider.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfullyWithMedia()
    {

        $item = Slider::factory()->create()->toArray();
        $item['mediaids'] = [1];

        $this->post(route('slider.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('slider',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>1,
            'mediaable_type' => Slider::class,
        ]);
    }

    public function testCreateSuccessfullyWithoutMedia()
    {
        $item = Slider::factory()->create()->toArray();

        $this->post(route('slider.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('slider',$item);
    }



    public function testCanVisitEditPage()
    {
        $item = Slider::factory()->create();
        $this->get(route('slider.edit', $item->id))
            ->assertSee($item->bangla_title);
    }

    public function testUpdatedSuccessfullyWithMedia()
    {
        $mediaId = 2;
        $item = Slider::factory()->create()->toArray();
        $item['mediaids'] = [$mediaId];

        $this->put(route('slider.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('slider',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>$mediaId,
            'mediaable_type' => Slider::class,
        ]);
    }

    public function testUpdatedSuccessfullyWithoutMedia()
    {
        $item = Slider::factory()->create()->toArray();

        $this->put(route('slider.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('slider',$item);
    }

    public function testUpdatedFailShowValidationError()
    {
        $gallery = Slider::factory()->create();
        $galleryWillUpdateArray = $gallery->toArray();
        $galleryWillUpdateArray['english_title'] = null;

        $this->put(route('slider.update', $gallery->id),
            $galleryWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('slider.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $slider = Slider::factory()->create();
        $this->delete(route('slider.destroy', $slider->id))
            ->assertSessionHas('message');

        $this->assertNotNull(Slider::withTrashed()->find($slider->id)->deleted_at);
    }

}
