<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // getting datas
    protected static function getDatas():object
    {
        $data = array(
            "empresa" => "RvCred - Empréstimo para aposentados e pensionistas do INSS",
            "empresaName" => "RvCred",
            "cnpj" => "CNPJ: 123456789",

            "address" => "Rua Siqueira Campos, 292 - Centro - Guarulhos - SP",
            "phone" => "INSS: (11) 2442-7497 - FGTS: (11 )91124-1607",
            "email" => "contato@rvcred.com.br",

            "links" => [
                "phone" => "",
                "address" => "teste",
                "whatsapp" => "",
                "fgts" => "",
                "inss" => "",
                "email" => "",
                "facebook" => "",
                "instagram" => "",
                "linkedin" => ""
            ],

            "socialMedia" => [
                "facebook" => "https://www.facebook.com/rvcred.if",
                "linkedin" => "https://www.linkedin.com/company/rvcred",
                "instagram" => "https://www.instagram.com/rvcred.com.br",
                "google" => "https://g.page/r/CTHwHt7ay_r2EAg/review",
                "email" => "mailto:contato@rvcred.com.br",
                "googleLocation" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.778627529787!2d-46.52918818554554!3d-23.468448364051657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef559f3704b59%3A0x98b4b9fcfec2f36f!2sR.%20Diogo%20Farias%2C%2020%20-%20Centro%2C%20Guarulhos%20-%20SP%2C%2007110-090!5e0!3m2!1spt-BR!2sbr!4v1579279730033!5m2!1spt-BR!2sbr"
            ]
        );

        return (object) $data;
    }


}
