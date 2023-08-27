<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $fillable=[
        'name',
        'lastname',
        'email',
        'password',
        'date_of_birth',
        'address',
        'city',
        'phone',
    ];
}
