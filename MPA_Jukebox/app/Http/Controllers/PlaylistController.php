<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Queue;
use App\Models\Playlist;



class PlaylistController extends Controller
{
    public function index(Request $request){
        //addPlaylistitems();
        //$playlist = new Playlist($request);
        //dd($request->session()->all());

        $playlistObject = new Queue($request);
        
        //$playlistObject->addPlaylistitems($request, '4');
        $queue = $playlistObject->getPlaylistItems();
        $time = $playlistObject->totalTime();
        return view('playlist', ['playlist' => $queue, 'time' => $time]);


    }
    public function addPlaylistitems(Request $request, $id){
        $queue = new queue($request);
        $queue->addPlaylistitems($request, $id);
        
        return back();

        //return redirect()->route('songs');
    }
    public function deletePlaylistItems(Request $request){
        $id = $_POST['id'];
        $index = $_POST['index'];
        $deletePlaylistObject = new Queue($request);
        $deletePlaylistObject->deletePlaylistItems($request, $id, $index);
        return redirect()->route('playlist');
    }

    public function savePlaylist(Request $request){
        $playlistName = $_GET['playlistName'];
        $savePlaylist = new Playlist();
        $savePlaylist->savePlaylist($request, $playlistName);
        return redirect()->route('playlist');

    }
}
