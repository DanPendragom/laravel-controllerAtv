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
        
        echo "
            <style>
            div{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            h1{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 34px;
                text-align:center;
            }
            span{
                color: #909090;
            }
            </style>
        ";
        
        return "<div> <h1>Olá $nome, seu Indice de Massa Corpórea é <i>$imc</i><br><span>#ParabénsPorSer$sexo</span></h1></div>";
    }
    
    public function calculanumbers(){
        $val1 = $_GET['valor1'];
        $val2 = $_GET['valor2'];
        $calc = $val1 + $val2;
        
        echo "
            <style>
            div{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            h4{
               font-family: Arial, Helvetica, sans-serif;
               font-size: 34px;
            }
            </style>
        ";
        return "<div> <h4>A soma dos valores é <i>$calc</i></h4></div>";
        
    }
    
    public function calculaquad(){
        $val = $_GET['value'];
        $valquad = $val * $val;
        
         echo "
            <style>
            div{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            h1{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 34px;
            }
            </style>
        ";
        
        return "<div> <h1>$val elevado ao quadrado é <i>$valquad</i></h1></div>";
    }
}

