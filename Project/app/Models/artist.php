<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;
    protected $fillable=['image','name','country','date_of_birth'];
    public function MusicPieace()
    {
        return $this->hasMany(MusicalPiece::class,'artiste','id');
    }
}
