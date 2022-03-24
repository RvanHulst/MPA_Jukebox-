<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;


class GenreController extends Controller
{
    function index(){
        $allGenres = Genre::all();

        //dd($genrelist);

        return view('genre', compact('allGenres'));
    }
// paramenter binding
    function getAllSongFromGenre(Genre $genre){
        //$genreSongs = Genre::getSongs($genre_id);
        //$genreSongs = Genre::where('id', $genre_id)->get();
        //$genre = Genre::find($genre_id);

        return view('genreSong',['genre' => $genre]);
    }

}