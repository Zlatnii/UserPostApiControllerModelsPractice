<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['nickname', 'email', 'password',];
    protected $hidden = ['created_at', 'updated_at',];

    public function getPostRelation(){
        return $this->hasMany(related:'App\Models\Post', foreignKey:'user_id', localKey:'id');
    }

    public function getAddressRelation(){
        return $this->hasOne(related:'App\Models\Address', foreignKey:'user_id', localKey:'id');
    }

    public function getRolesRelation(){
        return $this->hasMany(related:'App\Models\Role', foreignKey:'user_id', localKey:'id');
    }
}

