<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function media(){

        return $this->hasMany(media::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
