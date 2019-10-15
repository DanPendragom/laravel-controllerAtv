<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function calculaimc(){
        $nome = $_GET['username'];
        $altura = $_GET['userheight'];
        $peso = $_GET['userwidth'];
        $sexo = $_GET['usersex'];
        
        $imc = $peso/($altura * $altura);
        $imc = round($imc,2);
        
        return "<h1>Olá $nome, seu imc é $imc</h1>";
    }
    
    public function calculanumbers(){
        $val1 = $_GET['valor1'];
        $val2 = $_GET['valor2'];
        
        $calc = $val1 + $val2;
        
        return "A soma dos valores é $calc";
        
    }
    
    public function calculaquad(){
        $val = $_GET['value'];
        $valquad = $val * $val;
        
        return "<h1>$val ao quadrado é $valquad </h1>";
    }
}

