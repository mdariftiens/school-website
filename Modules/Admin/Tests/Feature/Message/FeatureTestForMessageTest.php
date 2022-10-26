<?php

namespace Modules\Admin\Tests\Feature\Message;

use App\Models\Message\Message;
use Tests\BaseTestCase;

class FeatureTestForMessageTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('message.index'))
            ->assertOk();
    }

    public function testCanVisitCreatePage()
    {
        $this->get(route('message.create'))
            ->assertOk();
    }

    public function testShowValidationError()
    {
        $this->post(route('message.store'),[])
            ->assertSessionHasErrors();
    }

    public function testCreateSuccessfully()
    {
        $data = [
            'bangla_title' => 'bangla_title',
            'english_title' => 'english_title',
            'english_designation' => 'english_designation',
            'bangla_designation' => 'bangla_designation',
            'english_name' => 'english_name',
            'bangla_name' => 'bangla_name',
            'english_message' => 'english_message',
            'bangla_message' => 'bangla_message',
            'image'=> 'image',
        ];

        $this->post(route('message.store'),$data)
            ->assertSessionHas('message');

        $this->assertDatabaseHas('messages',$data);
    }

    public function testCanVisitEditPage()
    {
        $item = Message::factory()->create();
        $this->get(route('message.edit', $item->id))
            ->assertSee($item->english_title);
    }

    public function testUpdatedFailShowValidationError()
    {
        $item = Message::factory()->create();
        $noticeWillUpdateArray = $item->toArray();
        $noticeWillUpdateArray['english_title'] = null;

        $this->put(route('message.update', $item->id),
            $noticeWillUpdateArray
        )
            ->assertSessionHasErrors();

    }


    public function testDeleteShowErrorOnEventNotFound()
    {
        $this->delete(route('message.destroy', 0))
            ->assertNotFound();
    }

    public function testDeletedSuccessfully()
    {
        $item = Message::factory()->create();
        $this->delete(route('message.destroy', $item->id))
            ->assertSessionHas('message');
        $this->assertNotNull(Message::withTrashed()->find($item->id)->deleted_at);
    }


}
