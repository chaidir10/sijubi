<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return view('about', [
            "title" => "About",
            "name"  => "Chaidirrahman",
            "email" => "chaidirrahman72@gmail.com",
            "image" => "gambar.jpg"
        ]);
    }
}
