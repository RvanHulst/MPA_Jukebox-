<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Playlist;



class PlaylistController extends Controller
{
    public function index(Request $request){
        //addPlaylistitems();
        //$playlist = new Playlist($request);
        //dd($request->session()->all());

        $playlistObject = new Playlist($request);
        
        //$playlistObject->addPlaylistitems($request, '4');
        $playlist = $playlistObject->getPlaylistItems();

        return view('playlist', ['playlist' => $playlist]);


    }
    public function addPlaylistitems(Request $request, $id){
        $playlist = new Playlist($request);
        $playlist->addPlaylistitems($request, $id);

        //return back();

        return redirect()->route('songs');
    }
}
