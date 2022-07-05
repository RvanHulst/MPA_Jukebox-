<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;

class Song extends Model
{
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    
    public function playlist(){
        return $this->belongsToMany(Playlist::class);
    }
 
}
