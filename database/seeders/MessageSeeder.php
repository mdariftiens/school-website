<?php

namespace Database\Seeders;

use App\Models\Message\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i=1; $i<config('seeder.message'); $i++){
            Message::factory()->create([
                'priority' => $i
            ]);
        }

    }
}
