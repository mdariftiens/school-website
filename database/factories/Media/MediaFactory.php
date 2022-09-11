<?php

namespace Database\Factories\Media;


use App\Models\Media\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bangla_title' => $this->faker->text,
            'english_title' => $this->faker->text,
            'bangla_alt_text' => $this->faker->text,
            'english_alt_text' =>  $this->faker->text,
            'filename' => $this->faker->name,
            'mimetypes' => $this->faker->fileExtension,
            'extension' => $this->faker->fileExtension,
            'size' => random_int(1000,2000),
            'disk_location' => '',
            'url' => $this->faker->imageUrl(),
        ];
    }
}
