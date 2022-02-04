<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $info = static::getDatas();

        return view("pages.contact", array(
            "info" => $info
        ));
    }
}
