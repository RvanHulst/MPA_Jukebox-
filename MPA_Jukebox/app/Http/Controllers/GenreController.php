<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;


class GenreController extends Controller
{
    /**
     *  A function that shows all the genres
     */
    function index(){
        $allGenres = Genre::all();
        return view('genre', compact('allGenres'));
    }
    // paramenter binding
    /**
     *  A function that shows all songs from a certain genre
     */
    function getAllSongFromGenre(Genre $genre){
        return view('genreSong',['genre' => $genre]);
    }

}