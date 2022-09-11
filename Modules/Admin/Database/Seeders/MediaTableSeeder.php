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

        Media::factory(50)->create();

    }
}
