<?php

namespace App;

use Illuminate\Http\Request;
use App\Models\Song;

class Playlist
{
    private $playlist;

    public function __construct(){
        $this->playlist = NULL;
    }

    public function Playlist(){
        return view('playlist');
    }

    // Add playlistItems fuction
    public function AddPlaylistitems($request, $id){
        $song = Song::findOrFail($id);

        //dd($song);

        $playlist = $request->session()->get('playlist');
  
        $request->session()->push('playlist', $song);

        dd($request->session());
        
        if(isset($playlist[$id])) {
            $playlist[$id]['quantity']++;
        } else {    
            $playlist[$id] = [
                "name" => $song->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
        session()->put('playlist', $playlist);

    }

    // Remove playlistItems fuction

    // Skipp playlistItems fuction

    // Delete playlists fuction

    // Add playlists function

    // Show Playlists function

    // Show Playlistitems




    //public function __construct($playlistItems){
        //$this->playlistItems = $playlistItems;
    
    //}

}

