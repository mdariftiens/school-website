<?php

namespace Modules\Admin\Database\Seeders;

use App\Models\Media\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Media::create([
            'bangla_title'=> 'WhatsApp-Image',
            'english_title'=> 'WhatsApp-Image',
            'bangla_alt_text'=> 'WhatsApp-Image',
            'english_alt_text'=> 'WhatsApp-Image',
            'filename'=> 'WhatsApp-Image.jpeg',
            'mimetypes'=> 'jpeg',
            'extension'=> 'jpeg',
            'size'=> '0',
            'disk_location'=> '',
            'url'=> 'https://sagc.edu.bd/wp-content/uploads/2022/04/WhatsApp-Image-2022-02-15-at-10.26.30-PM-603x420.jpeg',
        ]);

        Media::create([
            'bangla_title'=> 'WhatsApp-Image1-630x420',
            'english_title'=> 'WhatsApp-Image1-630x420',
            'bangla_alt_text'=> 'WhatsApp-Image1-630x420',
            'english_alt_text'=> 'WhatsApp-Image1-630x420',
            'filename'=> '1-630x420.jpg',
            'mimetypes'=> 'jpeg',
            'extension'=> 'jpeg',
            'size'=> '0',
            'disk_location'=> '',
            'url'=> 'https://sagc.edu.bd/wp-content/uploads/2020/11/1-630x420.jpg',
        ]);



    }
}
