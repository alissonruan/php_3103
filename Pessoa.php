<?php

class Pessoa{
    public $altura;
    public $peso;
    public $imc;

    function calculo(){
        $imc = $peso / (altura * altura);
        return $imc;
    }
}
?>