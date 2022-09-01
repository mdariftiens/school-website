<?php

namespace Modules\Admin\Database\Seeders;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use App\Models\Media\Mediaables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EventMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        EventCategory::create([
            'english_name'=>'sport',
            'bangla_name'=>'khela'
        ]);

        EventCategory::create([
            'english_name'=>'ghum',
            'bangla_name'=>'ghum'
        ]);

        Event::create([
            'category_id' => 1,
            'bangla_title' => 'cricket khela suru hobe',
            'english_title' => 'cricket sport will start',
            'bangla_description' => 'cricket khela suru hobe',
            'english_description' => 'cricket sport will start',
            'is_published' => 1,
            'bangla_venue' => 'bv',
            'english_venue' => 'ev',
            'from_datetime' => now(),
            'to_datetime' => now()->addDay(),
        ]);

        Event::create([
            'category_id' => 1,
            'bangla_title' => 'football khela suru hobe',
            'english_title' => 'football sport will start',
            'bangla_description' => 'football khela suru hobe',
            'english_description' => 'football sport will start',
            'is_published' => 1,
            'bangla_venue' => 'bv',
            'english_venue' => 'ev',
            'from_datetime' => now(),
            'to_datetime' => now()->addDay(),
        ]);

        Mediaables::create([
            'media_id' => 1,
            'mediaable_id' => 1,
            'mediaable_type' => Event::class,
        ]);

        Mediaables::create([
            'media_id' => 2,
            'mediaable_id' => 1,
            'mediaable_type' => Event::class,
        ]);

        Mediaables::create([
            'media_id' => 1,
            'mediaable_id' => 2,
            'mediaable_type' => Event::class,
        ]);
    }
}
