<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index(){
        $songlist = Song::all();

        //dd($songlist);

        return view('song', ["songs"=> $songlist]);
    }
}
