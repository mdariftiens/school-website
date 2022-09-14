<?php

namespace Database\Factories\FileUpload;

use App\Models\FileUpload\FileUploadCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileUploadCategoryFactory extends Factory
{
    protected $model = FileUploadCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'english_name'=>$this->faker->text,
            'bangla_name'=>$this->faker->text,
        ];
    }
}
