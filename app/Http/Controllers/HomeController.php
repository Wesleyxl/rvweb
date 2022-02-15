<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $info = static::getDatas();

        return view("pages.home", array(
            "info" => $info
        ));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:250|min:3",
            "phone" => "required|string|min:10",
            "cpf" => "required|string|min:11",
            "email" => "required|string|email",
            'messages' => "required|string|max:500|min:5"
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }



    }
}
