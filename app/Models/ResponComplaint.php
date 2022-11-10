<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponComplaint extends Model
{
    use HasFactory;

    protected $table = 'response_complaints';

    protected $fillable =[
        'response', 'complaint_id', 'user_id'
    ];
}
