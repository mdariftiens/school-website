<?php

namespace Database\Seeders;

use App\Models\Achievements\Achievements;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\PostCategory;
use App\Models\Menu\MenuItems;
use App\Models\Menu\Menus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $menu = new Menus();
        $menu->name = 'Main Menu';
        $menu->save();

        $menuItems = [
            [
                'english_label' => 'Home',
                'bangla_label' => 'হোম',
                'link' => '/',
            ],
            [
                'english_label' => 'Notices',
                'bangla_label' => 'নোটিশ',
                'link' => '/notices',
            ],
            [
                'english_label' => 'Messages',
                'bangla_label' => 'বার্তা',
                'link' => '/messages',
            ],
            [
                'english_label' => 'News',
                'bangla_label' => 'খবর',
                'link' => '/news',
            ],
            [
                'english_label' => 'Achievements',
                'bangla_label' => 'আমাদের অর্জন',
                'link' => '/achievements',
            ],
            [
                'english_label' => 'Management Committees',
                'bangla_label' => 'পরিচালনা পর্ষদ',
                'link' => '/management-committees',
            ],
            [
                'english_label' => 'Events',
                'bangla_label' => 'ইভেন্টস',
                'link' => '/events',
            ],
            [
                'english_label' => 'File Uploads',
                'bangla_label' => 'ফাইল আপলোড',
                'link' => '/file-uploads',
            ],
            [
                'english_label' => 'Galleries',
                'bangla_label' => 'গ্যালারী',
                'link' => '/galleries',
            ],
            [
                'english_label' => 'Contact Us',
                'bangla_label' => 'যোগাযোগ',
                'link' => '/contact-us',
            ],
        ];


        $generatedMenuItems = [];

        foreach ($menuItems as $item){
            $generatedMenuItems[] = array_merge($item, [
                'menu_id' => $menu->id,
                'parent' => 0,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }

        MenuItems::insert($generatedMenuItems);

        updateThemeOptions('_theme_setting_web_menu', $menu->id);
        updateThemeOptions('_theme_setting_mobile_menu', $menu->id);
    }
}
