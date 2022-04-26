<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Playlist;



class PlaylistController extends Controller
{
    public function index(Request $request){
        //AddPlaylistitems();
        $request->session()->all();
        
        $playlist = new Playlist();
        $playlist->AddPlaylistitems($request, '1');
        //dd($request->session()->all());

        return view('playlist');

      
    }
}
 