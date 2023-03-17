<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicalPiece extends Model
{
    use HasFactory;
    protected $fillable=['title','writer','artiste','langue','lyrics','coverImage','music'];
    public function artist(){
        return $this->belongsTo(artist::class,'artiste','id');
    }
    public function comments(){
        return $this->hasMany(comments::class,'musicId','id');
    }
    public function playlist(){
        return $this->belongsTo(playlist::class,'musicId','id');
    }
    public function like()
    {
        return $this->hasMany(Like::class,'musicId','id');
    }
}