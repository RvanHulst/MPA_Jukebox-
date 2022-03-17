<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private function songs(){
        return $this->hasMany(Song::class);
    }

    protected function getSongs($genre_id){
        return $this->find($genre_id)->songs()->get();
    }
}
