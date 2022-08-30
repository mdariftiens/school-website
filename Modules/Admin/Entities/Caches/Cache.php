<?php

namespace Modules\Admin\Entities\Caches;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Abstracts\AdminModel;
use Modules\Admin\Entities\Widgets\WidgetFields;

class Cache extends AdminModel
{
    use HasFactory;

    protected $table = 'cache';

    protected $fillable = [
        'lang',
        'url',
        'cached_data',
    ];

}
