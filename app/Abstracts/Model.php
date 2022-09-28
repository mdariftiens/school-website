<?php

namespace App\Abstracts;
use App\Services\CacheService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Model extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();


        static::created( function ($model){
                cacheViewClear();
            }
        );

        static::updated( function ($model) {
                cacheViewClear();
            }
        );


        static::deleted(function ($model) {
                cacheViewClear();
            }
        );

        /**
         * Retrieved method call on Select , so we do not need Select statement log.
         */
        /*static::retrieved(function ($model) {

            static::createLog($model, 'retrieve');

        });*/

        /**
         * Restored will call when Model use SoftDeletes trait
         */
        if (method_exists(get_called_class(), 'restored')) {
            static::restored(function ($model) {
                    cacheViewClear();
                }
            );
        }
    }
}
