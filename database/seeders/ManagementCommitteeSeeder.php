<?php

namespace Database\Seeders;

use App\Models\ManagementCommittee\ManagementCommittee;
use App\Models\Message\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ManagementCommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i=1; $i<config('seeder.management_committee'); $i++){
            ManagementCommittee::factory()->create([
                'priority' => $i
            ]);
        }

    }
}
