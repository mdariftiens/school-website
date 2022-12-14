<?php

namespace Database\Seeders;

use App\Models\Contactus\Contactus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        Contactus::factory(100)->create();

    }
}
