<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class PlaylistController extends Controller
{
    public function index(){
        Session::flash('message','This is a message!');  
        return view('playlist');
    }
}
 