<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAdditionalInfo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'goals',
        'intrests',
        'extraIntinfo',
        'extraCreinfo',
        'extraSocinfo',
        'extraPreinfo',
        'extraMucinfo',
        'extraMocinfo',
        'extraSpinfo',
        'additional',
        'behaviour',
        'traits',

    ];
}
