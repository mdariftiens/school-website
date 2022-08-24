<?php

namespace Modules\Backend\Entities\Caches;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Backend\Abstracts\BackendModel;
use Modules\Backend\Entities\Widgets\WidgetFields;

class Cache extends BackendModel
{
    use HasFactory;

    protected $table = 'cache';

    protected $fillable = [
        'lang',
        'url',
        'cached_data',
    ];

}
