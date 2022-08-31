<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;

class Song extends Model
{
    /**
     *  A one to one relationship defining genre function
     */
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
     /**
     *  A many to many relationship defining playlist function
     */
    public function playlist(){
        return $this->belongsToMany(Playlist::class);
    }
 
}
