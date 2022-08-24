<?php

namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Backend\Entities\Caches\Cache;
use Modules\Backend\Entities\Widgets\WidgetBar;
use Modules\Backend\Entities\Widgets\WidgetFields;
use Modules\Backend\Entities\Widgets\Widgets;

class CacheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $data = (file_get_contents('https://www.dailynayadiganta.com/election/686271/%E0%A6%87%E0%A6%AD%E0%A6%BF%E0%A6%8F%E0%A6%AE%E0%A7%87%E0%A6%B0-%E0%A6%AC%E0%A6%BF%E0%A6%B7%E0%A7%9F%E0%A7%87-%E0%A6%B8%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%A7%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4-%E0%A6%87%E0%A6%B8%E0%A6%BF%E0%A6%B0-%E0%A6%A8%E0%A6%BF%E0%A6%9C%E0%A6%B8%E0%A7%8D%E0%A6%AC-%E0%A6%B8%E0%A6%BF%E0%A6%87%E0%A6%B8%E0%A6%BF'));
        Cache::create([
            'lang' =>'bn',
            'url' =>'1',
            'cached_data' => $data,
        ]);


    }
}
