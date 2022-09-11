<?php

namespace Database\Seeders;

use App\Models\Option\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Option::create([
            'name' => 'site_name',
            'value' => 'School website',
        ]);

        Option::create([
            'name' => 'site_tagline',
            'value' => 'Best School website',
        ]);

        Option::create([
            'name' => 'current_theme_id',
            'value' => 'primary-theme',
        ]);


    }
}
