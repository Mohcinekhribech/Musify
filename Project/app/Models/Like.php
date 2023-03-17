<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable=['musicId','clientId'];
    public function MusicPieace()
    {
        return $this->belongsTo(MusicalPiece::class,'musicId','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'clientId','id');
    }
}
