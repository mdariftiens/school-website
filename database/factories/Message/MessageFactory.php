<?php

namespace Database\Factories\Message;


use App\Models\Message\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

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
            'english_designation' => $this->faker->text,
            'bangla_designation' =>  $this->faker->text,
            'english_name' =>  $this->faker->text,
            'bangla_name' => $this->faker->text,
            'english_message' => $this->faker->paragraph,
            'bangla_message' => $this->faker->paragraph,
            'image'=> $this->faker->imageUrl(),
        ];
    }
}
