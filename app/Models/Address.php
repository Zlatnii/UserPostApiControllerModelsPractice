<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'number'];
    protected $hidden = ['created_at', 'updated_at', 'user_id'];   
}
