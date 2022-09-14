<?php

namespace Modules\Admin\Tests\Feature\FileUpload;

use App\Models\FileUpload\FileUploadCategory;
use Tests\TestCase;

class FeatureTestForFileUploadCategoryTest extends TestCase
{


    public function testList()
    {
        $this->get(route('file-upload-category.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('file-upload-category.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('file-upload-category.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfully()
    {
        $data = [
            'english_name' => 'english_name' . time(),
            'bangla_name' => 'bangla_name' . time(),
        ];

        $this->post(route('file-upload-category.store'),$data)
            ->assertSessionHas('message');

        $this->assertDatabaseHas('upload_file_category',$data);
    }


    public function testDuplicateFileUploadCategoryCannotInsert()
    {
        $data = FileUploadCategory::factory()->create()->toArray();

        $this->post(route('file-upload-category.store'),$data)
            ->assertSessionHasErrors();
    }

    public function testCanVisitEditPage()
    {
        $item = FileUploadCategory::factory()->create();
        $this->get(route('file-upload-category.edit', $item->id))
            ->assertSee($item->bangla_name);
    }

    public function testUpdatedFailShowValidationError()
    {
        $notice = FileUploadCategory::factory()->create();
        $noticeWillUpdateArray = $notice->toArray();
        $noticeWillUpdateArray['bangla_name'] = null;

        $this->put(route('file-upload-category.update', $notice->id),
            $noticeWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('file-upload-category.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $notice = FileUploadCategory::factory()->create();
        $this->delete(route('file-upload-category.destroy', $notice->id))
            ->assertSessionHas('message');
        $this->assertDatabaseMissing('upload_file_category', $notice->toArray());
    }


}
