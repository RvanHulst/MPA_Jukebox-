<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Playlist;



class PlaylistController extends Controller
{
    public function index(Request $request){
        //addPlaylistitems();
        
        $playlist = new Playlist($request);
        $playlist->addPlaylistitems($request, '4');
        //dd($request->session()->all());
        return view('playlist', compact('playlist'));


    }
    public function getItems(Request $request){
        $playlist = new Playlist($request);
        $playlist->getPlaylistItems();

        return view('playlist', ['playlist' => $playlist]);
    }
}
