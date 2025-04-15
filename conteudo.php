<?php
/*include "Aluno.php";

$a = new Aluno();
$a->nome = "Tio Patinhas";
$a->mostraDados();
$a->email = $_POST['email'];
*/
include "Pessoa.php";

$al = new Pessoa();
$pe = new Pessoa();
$cal = new Pessoa();

$al->altura = 1.78;
$pe->peso = 76.8;

$cal = peso / (altura * altura);
echo "O resultado é: ".$cal
?>