<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\PlaylistSong;

class Playlist extends Model
{
    public function songs(){
        return $this->belongsToMany(Song::class);
    }

    public function savePlaylist(Request $request, $playlistName){
        $this->insert([
            'user_id' => Auth::id(),
            'name' => $playlistName
        ]);

        $playlist = $this->where('user_id', Auth::id())->last();
        $queue = new Queue($request);
        $playlistSong = new PlaylistSong();

        foreach  ($queue as $song){
            $playlistSong->insert([
                "playlistId" => $playlist->id,
                "songId" => $song->id
            ]);
        }
    }
}
