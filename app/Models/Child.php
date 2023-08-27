<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'name',
        'lastname',
        'birth_date',
        'gender',
        'guardian',
    ];
}
