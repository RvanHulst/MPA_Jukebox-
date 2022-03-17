<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index(){
        $allSongs = Song::all();

        //dd($songlist);

        return view('song', compact('allSongs'));
    }
}
