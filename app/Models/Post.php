<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'likes'];
    protected $hidden = ['updated_at', 'created_at', 'user_id'];

    public function getCommentRelation(){
        return $this->hasMany(related:'App\Models\Comment', foreignKey:'post_id', localKey:'id');
    }
}