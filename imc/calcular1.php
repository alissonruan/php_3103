<?php
require "Pessoa1.php";

$jow = new Pessoa();
$jow->nome1 = $_POST['nome1'];
$jow->peso1 = $_POST['peso1'];
$jow->altura1 = $_POST['altura1'];

$jow->calcularImc();


include "cabecalho1.php";
?>
<button type="button" class="btn"> <?php echo $jow->avaliarImc();?></button><br>

<?php
include "rodape1.php";
?>