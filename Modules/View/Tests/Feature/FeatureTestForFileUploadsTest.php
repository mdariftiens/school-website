<?php

namespace Modules\View\Tests\Feature;

use App\Models\FileUpload\FileUpload;
use Tests\TestCase;

class FeatureTestForFileUploadsTest extends TestCase
{

    public function testList()
    {
        $this->get(route('file-uploads.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $event = FileUpload::where('is_publish',FileUpload::PUBLISHED)->first();
        $this->get(route('file-uploads.show', $event->id))
            ->assertOk();
    }

}
