<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Queue;
use App\Models\Playlist;
use App\Models\PlaylistSong;
use Illuminate\Support\Facades\Auth;


class PlaylistController extends Controller
{
    /**
     *  A function thats starts the quee function
     */
    public function index(Request $request){

        $playlistObject = new Queue($request);
        
        $queue = $playlistObject->getPlaylistItems();
        $time = $playlistObject->totalTime();
        return view('playlist', ['playlist' => $queue, 'time' => $time]);
    }
    /**
     *  A function that allowes adding of songs to playlist.
     */
    public function addPlaylistitems(Request $request, $id){
        $queue = new queue($request);
        $queue->addPlaylistitems($request, $id);
        
        return back();
    }
    /**
     *  A function that allowes removing of songs that are in the playlist.
     */
    public function deletePlaylistItems(Request $request){
        $id = $_POST['id'];
        $index = $_POST['index'];
        $deletePlaylistObject = new Queue($request);
        $deletePlaylistObject->deletePlaylistItems($request, $id, $index);
        return redirect()->route('playlist');
    }
    /**
     *  A function that allowes saving of th playlist and checks if they dont save witht the same name.
     */
    public function savePlaylist(Request $request){
        $playlistName = $_GET['playlistName'];
        $savePlaylist = new Playlist();

        $playlists = $savePlaylist->where('user_id', auth()->user()->id)->get(); 
        foreach($playlists as $playlist){
            if($playlist->name == $playlistName){
                return redirect()->route('playlist');
            } 
        }
        $savePlaylist->savePlaylist($request, $playlistName);
        return redirect()->route('playlist');
    }
    /**
     *  A function that shows all the playlists from a certain user
     */
    public function getAllPlaylists(){
        $playlist = new Playlist();
        $playlist = $playlist->where('user_id', auth()->user()->id)->get(); 
        return view('allPlaylists', ['playlists' => $playlist]);
    }
    /**
     *  A function that allowes songs te be added to a excisting playlist.
     */
    public function saveToPlaylist(Request $request, $id){
        $playlistName = $_GET['playlistName'];
        $playlist = new Playlist();
        $playlists = $playlist->where('user_id',  Auth::id())->where('name', $playlistName)->get();
        
         foreach($playlists as $playlist){
            PlaylistSong::create([
                'playlist_id' => $playlist->id,
                'song_id' => $id,
            ]);
         }
         return back();
    }
    /**
     *  A function that allows to delelte songs from excisitng playlists.
     */
    public function deleteSongFromPlaylist(){
        $playlist_id = $_POST["playlist_id"];
        $song_id = $_POST["song_id"];
        $playlist = PlaylistSong::where('playlist_id', $playlist_id)->where('song_id', $song_id)->take(1)->delete();

        return back();
    }
    /**
     *  A function that allowes that the name can be changed of a excisitng playlist.
     */
    public function changeNameForPlaylist(){
        $oldPlaylistName = $_GET['oldPlaylistName'];
        $playlistName = $_GET['playlistName'];
        Playlist::where('name', $oldPlaylistName)->where('user_id', Auth::id())->update(['name' => $playlistName]);
        return back();
    }
}
