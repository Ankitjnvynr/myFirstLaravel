<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index()
    {
        // echo "welocome to index of my controller";
        return view('about');
    }
    public function room()
    {
        echo "welocome to room of my controller";
        // return view('about');
    }
}

