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
            SliderSeeder::class,
            GallerySeeder::class,
            FileUploadSeeder::class,
            MessageSeeder::class,
            ManagementCommitteeSeeder::class,
            EmployeeSeeder::class,
            NewsSeeder::class,
            AchievementSeeder::class,
            ThemeSettingSeeder::class,
            MediaableTableSeeder::class,
        ]);
    }
}
