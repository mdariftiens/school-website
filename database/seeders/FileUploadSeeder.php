<?php

namespace Database\Seeders;

use App\Models\FileUpload\FileUpload;
use App\Models\FileUpload\FileUploadCategory;
use App\Models\Gallery\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FileUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        FileUploadCategory::factory(config('seeder.file_upload_category'))->create();
        FileUpload::factory(config('seeder.file_upload'))->create();

    }
}
