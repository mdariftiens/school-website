<?php

namespace Database\Seeders;

use App\Models\Event\Event;
use App\Models\FileUpload\FileUpload;
use App\Models\Gallery\Gallery;
use App\Models\Media\Mediaables;
use App\Models\Message\Message;
use App\Models\Notice\Notice;
use App\Models\Slider\Slider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MediaableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $classes = [Event::class, Notice::class, Slider::class, Gallery::class, FileUpload::class, Message::class];

        for ($i=1; $i< config('seeder.mediaable');$i++){
            Mediaables::create([
                'media_id' => random_int(1, config('seeder.media')),
                'mediaable_id' => random_int(1,50),
                'mediaable_type' => $classes[random_int(0,count($classes)-1)]
            ]);
        }

    }
}
