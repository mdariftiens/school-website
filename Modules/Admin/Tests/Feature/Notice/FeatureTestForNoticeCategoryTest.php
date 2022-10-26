<?php

namespace Modules\Admin\Tests\Feature\Notice;

use App\Models\Notice\NoticeCategory;
use Tests\BaseTestCase;

class FeatureTestForNoticeCategoryTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('notice-category.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('notice-category.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('notice-category.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfully()
    {
        $data = [
            'english_name' => 'english_name' . time(),
            'bangla_name' => 'bangla_name' . time(),
        ];

        $this->post(route('notice-category.store'),$data)
            ->assertSessionHas('message');

        $this->assertDatabaseHas('notice_categories',$data);
    }


    public function testDuplicateNoticeCategoryCannotInsert()
    {
        $data = NoticeCategory::factory()->create()->toArray();

        $this->post(route('notice-category.store'),$data)
            ->assertSessionHasErrors();
    }

    public function testCanVisitEditPage()
    {
        $item = NoticeCategory::factory()->create();
        $this->get(route('notice-category.edit', $item->id))
            ->assertSee($item->bangla_name);
    }

    public function testUpdatedFailShowValidationError()
    {
        $notice = NoticeCategory::factory()->create();
        $noticeWillUpdateArray = $notice->toArray();
        $noticeWillUpdateArray['bangla_name'] = null;

        $this->put(route('notice-category.update', $notice->id),
            $noticeWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('notice-category.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $notice = NoticeCategory::factory()->create();
        $this->delete(route('notice-category.destroy', $notice->id))
            ->assertSessionHas('message');

        $this->assertNotNull(NoticeCategory::withTrashed()->find($notice->id)->deleted_at);
    }


}
