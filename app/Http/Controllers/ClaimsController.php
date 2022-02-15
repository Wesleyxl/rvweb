<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaimsController extends Controller
{
    public function index()
    {
        $info = static::getDatas();

        return view("pages.claims", array(
            "info" => $info
        ));
    }
}
