<?php

include "funcao.php";

$numero1 = $_POST['numero1'];

$numero2 = $_POST['numero2'];

$operacao = $_POST['op'];


switch ($operacao) {
    case "+":
        $resultado = soma($numero1, $numero2);

    break;

    case"-":
        $resultado = divisao($numero1, $numero2);
    break;

    case"/":
        $resultado = divisao($numero1, $numero2);
    break;

    case"*":
        $resultado = multiplicacao($numero1, $numero2);
    break;
}

include "cabecalho.php";

echo "O Resultado é: ".$resultado;

?>