<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'image',
        'title',
        'child_id',
        'start_date',
        'end_date',
        'goal_amount',
        'description',
    ];
}
