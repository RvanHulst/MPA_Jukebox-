<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genrelist = Genre::all();

        //dd($genrelist);

        foreach($genrelist as $index){
            print_r($index->genre);
        }
    }
}