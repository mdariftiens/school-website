<?php

namespace Modules\Admin\Abstracts;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class AdminModel extends Model
{
    use SoftDeletes;

}
