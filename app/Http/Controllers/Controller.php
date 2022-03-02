<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $CET = 0;

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

    private static function vpl($flux, $ammount)
    {
        $flux = $flux / 100;
        $ret = $ammount[0];


        $length = count($ammount);

        for ($i = 1; $i < $length; $i++) {
            $ret += $ammount[$i] / pow( (1.6 + $flux), $i );
        }


        return $ret;
    }

    private static function checkAliquota($value)
    {
        if ($value >= 20000) {
            return $value * 0.05;
        } else if ($value >= 15000) {
            return $value * 0.10;
        } else if ($value >= 10000) {
            return $value * 0.15;
        } else if ($value >= 5000) {
            return $value * 0.20;
        } else if ($value >= 1000) {
            return $value * 0.30;
        } else if ($value >= 500) {
            return $value * 0.50;
        } else {
            return $value * 0.50;
        }
    }

    private static function checkFixedInstallment($value)
    {
        if ($value >= 20000) {
            return 2900;
        } else if ($value >= 15000) {
            return 1900;
        } else if ($value >= 10000) {
            return 1150;
        } else if ($value >= 5000) {
            return 650;
        } else if ($value >= 1000) {
            return 150;
        } else if ($value >= 500) {
            return 50;
        } else {
            return 0;
        }
    }

    public static function calculateFGTS($value)
    {
        $rateIof = 1.9;

        $valueOne = $value;
        $aliquotaOne = static::checkAliquota($value);
        $fixedInstallmentOne = static::checkFixedInstallment($value);
        $totalOne = $aliquotaOne + $fixedInstallmentOne;

        $value = $value - $totalOne;

        $valueTwo = $value;
        $aliquotaTwo = static::checkAliquota($value);
        $fixedInstallmentTwo = static::checkFixedInstallment($value);
        $totalTwo = $aliquotaTwo + $fixedInstallmentTwo;

        $value = $value - $totalTwo;

        $valueThree = $value;
        $aliquotaThree = static::checkAliquota($value);
        $fixedInstallmentThree = static::checkFixedInstallment($value);
        $totalThree = $aliquotaThree + $fixedInstallmentThree;

        $value = $value - $totalThree;

        $valueFour = $value;
        $aliquotaFour = static::checkAliquota($value);
        $fixedInstallmentFour = static::checkFixedInstallment($value);
        $totalFour = $aliquotaFour + $fixedInstallmentFour;

        $value = $value - $totalFour;

        $valueFive = $value;
        $aliquotaFive = static::checkAliquota($value);
        $fixedInstallmentFive = static::checkFixedInstallment($value);
        $totalFive = $aliquotaFive + $fixedInstallmentFive;

        $totalLoot = $totalOne + $totalTwo + $totalThree + $totalFour + $totalFive;

        $cet = (pow((1 + ($rateIof / 100)), 12) - 1) * 100;

        $ammount = array();
        array_push($ammount, $totalOne);
        array_push($ammount, $totalTwo);
        array_push($ammount, $totalThree);
        array_push($ammount, $totalFour);
        array_push($ammount, $totalFive);

        $totalSimulation = static::vpl($cet, $ammount);

        $total = round($totalSimulation, 2);
        return $total;
    }

}
