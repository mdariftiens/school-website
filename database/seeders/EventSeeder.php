<?php

namespace Database\Seeders;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        EventCategory::factory(2)->create();

        Event::factory(config('seeder.event'))->create();

    }
}
