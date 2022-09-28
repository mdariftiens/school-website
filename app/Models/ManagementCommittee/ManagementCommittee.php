<?php

namespace App\Models\ManagementCommittee;

use App\Abstracts\Model;

class ManagementCommittee extends Model
{

    protected $table = 'management_committee';

    protected $fillable = [
        'english_name',
        'english_designation',
        'bangla_name',
        'bangla_designation',
        'contact_number',
        'email',
        'priority',
        'image',
    ];


}
