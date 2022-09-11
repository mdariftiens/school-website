<?php

namespace Database\Seeders;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use App\Models\Notice\Notice;
use App\Models\Notice\NoticeCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        NoticeCategory::factory(config('seeder.notice_category'))->create();

        Notice::factory(config('seeder.notice'))->create();

    }
}
