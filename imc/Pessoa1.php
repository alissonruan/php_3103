<?php
class Pessoa{
    public $nome1;
    public $peso1;
    public $altura1;
    public $imc1;


    public function exibirInfo(){
        echo $this->nome1."<br>";
    }
    public function calcularImc(){

        $this->imc = $this->peso1 / ($this->altura1 * $this->altura1);

    }

    public function exibirImc(){
        return $this->imc;
    }

    public function avaliarImc(){
        if($this->imc <18.5){
            return "Baixo Peso (engorda)";
        }else if($this->imc >= 25 && $this->imc <= 29.9){
            return "Peso Normal";
        }else if($this->imc >= 30 && $this->imc <= 34.9){
            return "Obesidade Grau I";
        }else if($this->imc >= 40 && $this->imc <= 44.9){
            return "Obesidade Grau II";
        }else if ($this->imc >= 50 && $this->imc <= 64.9){
            return "Obesidade Grau III";
        }else if (this->imc >= 60){
            return "mórbida";
        }
    }
}
?>