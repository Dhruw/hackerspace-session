<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HackerSpaceController extends Controller
{
    //
    public function home(){
        // return "Hello Hackerspace (from controller)";
        $data = [
            'hacker1',
            'hacker2',
            'hacker3',
            'hacker4'
        ];
        return view('home', compact('data'));
        // return view('welcome');
    }
}
