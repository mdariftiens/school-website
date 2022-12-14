<?php

namespace Modules\Admin\Tests\Feature\Media;

use App\Models\Media\Media;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Tests\BaseTestCase;

class FeatureTestForMediaTest extends BaseTestCase
{

    /**
     * @var \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public $media;

    private $headers = [
        'CONTENT_TYPE' => "application/json"
    ];

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->media = Media::factory()->create();
    }

    public function test_media_upload_works()
    {
        $file = UploadedFile::fake()->image('file.png', 600, 600);
        $response = $this->post(route('media.store'),[
            'file' => $file
        ]);
        $response->assertStatus(200);

        unlink($response->json()['disk_location']);
    }

    public function testMediaList()
    {
        $this->get(route('media.index'))
            ->assertSee($this->media->english_title);
    }

    public function testMediaListIsResponseAsJson()
    {
        $this->json('get',route('media.index'))
            ->assertOk();
    }


    public function testMediaDeleteWhenFileExists()
    {
        $this->delete(route('media.destroy', $this->media->id))
            ->assertStatus(Response::HTTP_OK);
    }

    public function testMediaShowErrorOnMediaNotFound()
    {
        $this->delete(route('media.destroy', 0))->assertStatus(Response::HTTP_NOT_FOUND);
    }
}
