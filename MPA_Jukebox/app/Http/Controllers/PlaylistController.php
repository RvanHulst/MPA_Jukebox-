<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class PlaylistController extends Controller
{
    public function index(Request $request){
        
        $request->session()->all();
        dd($request->session()->all());
        return view('playlist');

      
    }
}
 