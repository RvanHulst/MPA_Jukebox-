<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\PlaylistSong;
use App\Queue;




class Playlist extends Model
{
    public function songs(){
        return $this->belongsToMany(Song::class);
    }

    public function savePlaylist($request, $playlistName){
        $this->insert([
            'user_id' => auth()->user()->id,
            'name' => $playlistName
        ]);
        $playlist = $this->where('user_id', auth()->user()->id)->get()->last();
        $queue = new Queue($request);
        $queue = $queue->getPlaylistItems();
        $playlistSong = new PlaylistSong();

        foreach  ($queue as $song){
            $playlistSong->insert([
                "playlist_id" => $playlist->id,
                "song_id" => $song->id
            ]);
        }
    }
}
