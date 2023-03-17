<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlistSongs extends Model
{
    use HasFactory;
    protected $fillable=['playlisName','playlisPic','clientId'];
    public function User(){
        return $this->belongsTo(User::class,'clientId','id');
    }
    public function playlist(){
        return $this->hasMany(playlist::class,'playlistId','id');
    }
}
