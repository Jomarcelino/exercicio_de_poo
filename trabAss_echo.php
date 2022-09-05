<?php
include("trab_assalariado.php");

$honestoPhp = new empregado();
$honestoPhp->nome = "jaolindao";
$honestoPhp->sobrenome = "perfeito";
$honestoPhp->salario = "1.200";

echo "<p>nome:".$honestoPhp->nome."</p>";
echo "<p>sobenome:".$honestoPhp->sobrenome."</p>";
echo "<p>salario:".$honestoPhp->salario."</p>";
echo "<p>salario ao ano ;-;:".."</p>";
?>