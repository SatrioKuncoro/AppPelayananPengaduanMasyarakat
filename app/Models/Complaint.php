<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaints';

    protected $fillable=[
        'nik', 'text_complaint', 'location', 'image', 'status', 'user_id', 'role_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id');
    }
}
