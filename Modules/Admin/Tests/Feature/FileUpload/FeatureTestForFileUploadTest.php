<?php

namespace Modules\Admin\Tests\Feature\FileUpload;

use App\Models\FileUpload\FileUpload;
use App\Models\FileUpload\FileUploadCategory;
use Tests\BaseTestCase;

class FeatureTestForFileUploadTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('file-upload.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('file-upload.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('file-upload.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfullyWithMedia()
    {

        $item = FileUpload::factory()->create()->toArray();
        $item['mediaids'] = [1];
        $item['category_id'] = FileUploadCategory::first()->id;

        $this->post(route('file-upload.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('upload_files',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>1,
            'mediaable_type' => FileUpload::class,
        ]);
    }

    public function testCreateSuccessfullyWithoutMedia()
    {

        $item = FileUpload::factory()->create()->toArray();
        $item['category_id'] = FileUploadCategory::first()->id;

        $this->post(route('file-upload.store'),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('upload_files',$item);
    }



    public function testCanVisitEditPage()
    {
        $item = FileUpload::factory()->create();
        $this->get(route('file-upload.edit', $item->id))
            ->assertSee($item->bangla_title);
    }

    public function testUpdatedSuccessfullyWithMedia()
    {
        $mediaId = 2;
        $item = FileUpload::factory()->create()->toArray();
        $item['mediaids'] = [$mediaId];
        $item['category_id'] = FileUploadCategory::first()->id;

        $this->put(route('file-upload.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);
        unset($item['mediaids']);

        $this->assertDatabaseHas('upload_files',$item);
        $this->assertDatabaseHas('mediaables',[
            'media_id' =>$mediaId,
            'mediaable_type' => FileUpload::class,
        ]);
    }

    public function testUpdatedSuccessfullyWithoutMedia()
    {
        $item = FileUpload::factory()->create()->toArray();
        $item['category_id'] = FileUploadCategory::first()->id;

        $this->put(route('file-upload.update',$item['id']),$item)
            ->assertSessionHas('message');

        unset($item['id']);
        unset($item['created_at']);
        unset($item['updated_at']);

        $this->assertDatabaseHas('upload_files',$item);
    }

    public function testUpdatedFailShowValidationError()
    {
        $notice = FileUpload::factory()->create();
        $noticeWillUpdateArray = $notice->toArray();
        $noticeWillUpdateArray['category_id'] = null;

        $this->put(route('file-upload.update', $notice->id),
            $noticeWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('file-upload.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $item = FileUpload::factory()->create();
        $this->delete(route('file-upload.destroy', $item->id))
            ->assertSessionHas('message');
        $this->assertNotNull(FileUpload::withTrashed()->find($item->id)->deleted_at);
    }


}
