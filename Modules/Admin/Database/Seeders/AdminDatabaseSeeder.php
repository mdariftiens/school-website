<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

        $this->call(WidgetsTableSeeder::class);
        $this->call(CacheTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(EventMediaSeeder::class);
    }
}
