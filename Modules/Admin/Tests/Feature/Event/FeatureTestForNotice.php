<?php

namespace Modules\Admin\Tests\Feature\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use App\Models\Notice\Notice;
use App\Models\Notice\NoticeCategory;
use Tests\TestCase;

class FeatureTestForNotice extends TestCase
{


    public function testList()
    {
        $this->get(route('notice.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('notice.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('notice.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfullyWithMedia()
    {

        $item = Notice::factory()->create()->toArray();
        $item['mediaids'] = [1];
        $item['category_id'] = NoticeCategory::first()->id;

        $this->post(route('notice.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('notice',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>1,
            'mediaable_type' => Notice::class,
        ]);
    }

    public function testCreateSuccessfullyWithoutMedia()
    {

        $item = Notice::factory()->create()->toArray();
        $item['category_id'] = NoticeCategory::first()->id;

        $this->post(route('notice.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('notice',$item);
    }



    public function testCanVisitEditPage()
    {
        $item = Event::factory()->create();
        $this->get(route('notice.edit', $item->id))
            ->assertSee($item->bangla_title);
    }

    public function testUpdatedSuccessfullyWithMedia()
    {
        $mediaId = 2;
        $item = Notice::factory()->create()->toArray();
        $item['mediaids'] = [$mediaId];
        $item['category_id'] = NoticeCategory::first()->id;

        $this->put(route('notice.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('notice',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>$mediaId,
            'mediaable_type' => Notice::class,
        ]);
    }

    public function testUpdatedSuccessfullyWithoutMedia()
    {
        $item = Notice::factory()->create()->toArray();
        $item['category_id'] = NoticeCategory::first()->id;

        $this->put(route('notice.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('notice',$item);
    }

    public function testUpdatedFailShowValidationError()
    {
        $notice = Notice::factory()->create();
        $noticeWillUpdateArray = $notice->toArray();
        $noticeWillUpdateArray['category_id'] = null;

        $this->put(route('notice.update', $notice->id),
            $noticeWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('notice.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $notice = Notice::factory()->create();
        $this->delete(route('notice.destroy', $notice->id))
            ->assertSessionHas('message');
        $this->assertDatabaseMissing('notice', $notice->toArray());
    }


}
