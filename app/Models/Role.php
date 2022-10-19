<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // menjelaskan nama table yang dimiliki
    protected $table = 'roles';

    // menjelaskan nama coloum yang dimiliki
    protected $fillable =[
        'name'
    ];
}
