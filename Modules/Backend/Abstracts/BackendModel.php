<?php

namespace Modules\Backend\Abstracts;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BackendModel extends Model
{
    use SoftDeletes;

}
