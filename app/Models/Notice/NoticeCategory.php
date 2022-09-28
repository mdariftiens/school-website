<?php

namespace App\Models\Notice;

use App\Abstracts\Model;

class NoticeCategory extends Model
{

    protected $table = 'notice_categories';

    protected $fillable = [
        'english_name',
        'bangla_name'
    ];

    function notices()
    {
        return $this->hasMany(Notice::class,'category_id');
    }
}
