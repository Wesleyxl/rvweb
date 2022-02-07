<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulationController extends Controller
{
    public function index()
    {
        $info = static::getDatas();

        return view('pages.fgts', array(
            "info" => $info
        ));
    }

    public function simulation(Request $request)
    {
        dd("here");
    }
}
