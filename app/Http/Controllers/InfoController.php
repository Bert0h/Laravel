<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        return view("info");
    }

    public function aboutus()
    {
        return view("aboutus");
    }

    public function where()
    {
        return view("where");
    }

    
    public function contact()
    {
        return view("contact");
    }
}
