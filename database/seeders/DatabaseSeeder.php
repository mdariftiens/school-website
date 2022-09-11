<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            OptionTableSeeder::class,
            MediaTableSeeder::class,
            WidgetsTableSeeder::class,
            EventSeeder::class,
            NoticeSeeder::class,
            MediaableTableSeeder::class,
            SliderSeeder::class,
            GallerySeeder::class,
            FileUploadSeeder::class,
            MessageSeeder::class,
            ManagementCommitteeSeeder::class,
        ]);
    }
}
