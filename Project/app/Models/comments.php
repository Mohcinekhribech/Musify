<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable=['comment','musicId','clientId'];
    public function MusicPieace(){
        return $this->belongsTo(MusicalPiece::class,'musicId','id');
    }
    public function User(){
        return $this->belongsTo(User::class,'clientId','id');
    }   
}
