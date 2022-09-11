<?php

namespace Database\Factories\Gallery;


use App\Models\Gallery\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $galleryType = ['video','image'];

        return [
            'bangla_title' => $this->faker->text,
            'english_title' => $this->faker->text,
            'english_description' => $this->faker->text,
            'bangla_description' =>  $this->faker->text,
            'is_publish' => random_int(0,1),
            'gallery_type' => $galleryType[random_int(0, count($galleryType) - 1)],
        ];
    }
}
