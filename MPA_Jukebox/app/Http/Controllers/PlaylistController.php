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
        
        return back();

        //return redirect()->route('songs');
    }
    public function deletePlaylistItems(Request $request){
        $id = $_POST['id'];
        $index = $_POST['index'];
        $deletePlaylistObject = new Playlist($request);
        $deletePlaylistObject->deletePlaylistItems($request, $id, $index);
        return redirect()->route('playlist');
    }

    public function addPlaylist(Request $request, $id){
    // safe een playlist als je op playlist safe voegen drukt
    // nadat je een naam hebt ingevuld komt er een playlist
    // haal alle items uit sessie op
    // stop alle items in de nieuw gemaakt playlist
    }

    public function editPlaylist(){
        
    }

    public function savePlaylist(){

    }

}
