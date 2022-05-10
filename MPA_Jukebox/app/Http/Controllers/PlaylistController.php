<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Playlist;



class PlaylistController extends Controller
{
    public function index(Request $request){
        //addPlaylistitems();
        $request->session()->all();
        
        $playlist = new Playlist();
        $playlist->addPlaylistitems($request, '4');
        //dd($request->session()->all());

        return view('playlist');

      
    }
}
 