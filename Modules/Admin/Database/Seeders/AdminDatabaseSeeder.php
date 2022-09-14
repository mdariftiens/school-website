<?php

namespace Modules\Admin\Database\Seeders;

use Database\Seeders\EventSeeder;
use Database\Seeders\MediaTableSeeder;
use Database\Seeders\OptionTableSeeder;
use Database\Seeders\WidgetsTableSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

    }
}
