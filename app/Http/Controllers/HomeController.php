<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

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
            'message' => "required|string|max:500|min:5"
        ]);

        if ($validator->fails())
        {
            dd($validator->errors());
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $value['name'] = $request->input('name');
        $value['phone'] = $request->input('phone');
        $value['cpf'] = $request->input('cpf');
        $value['email'] = $request->input('email');
        $value['reason'] = $request->input('reason');
        $value['message'] = $request->input('message');

        try {
            Mail::to("wesley.alvesxl@gmail.com")->send(new ContactMail($value));
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

        // return redirect()->back()->with("success", "Seus dados foram enviados com sucesso!");
    }

    public function fgtsSimulation(Request $request)
    {
        $data = $request->data;
        $data = substr($data, 0, -2);
        $vowels = array(",", ".", "$", "R", " ");
        $data = str_replace($vowels, "", $data);


        $vauleTotal = static::calculateFGTS($data);

        return view('pages.fgts', array(
            "data" => $vauleTotal
        ));
    }
}
