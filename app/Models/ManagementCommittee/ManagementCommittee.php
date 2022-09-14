<?php

namespace App\Models\ManagementCommittee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementCommittee extends Model
{
    use HasFactory;

    protected $table = 'management_committee';

    protected $fillable = [
        'english_name',
        'english_designation',
        'bangla_name',
        'bangla_designation',
        'contact_number',
        'email',
        'priority',
    ];


}
