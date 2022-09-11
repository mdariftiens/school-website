<?php

namespace Database\Factories\FileUpload;

use App\Models\FileUpload\FileUpload;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileUploadFactory extends Factory
{
    protected $model = FileUpload::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => random_int(1, config('seeder.file_upload_category')),
            'bangla_title'=>$this->faker->text,
            'english_title'=>$this->faker->text,
            'is_publish' => random_int(0,1)
        ];
    }
}
