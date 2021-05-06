<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function reserva()
    {
        return view("reservas");
    }

    public function show()
    {
        return view("show");
    }

    public function create()
    {
        return view("create");
    }

}
