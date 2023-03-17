<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;
    protected $fillable=['musicId','playlistId'];
    public function MusicPieace()
    {
        return $this->hasMany(MusicalPiece::class,'musicId','id');
    }
    public function playlistSongs(){
        return $this->belongsTo(playlistSongs::class,'playlistId','id');
    }
}
