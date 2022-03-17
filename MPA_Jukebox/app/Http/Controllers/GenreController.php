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

    function getAllSongFromGenre($genre_id){
        $genreSongs = Genre::getSongs($genre_id);

        return view('genreSong', compact('genreSongs'));
    }

}