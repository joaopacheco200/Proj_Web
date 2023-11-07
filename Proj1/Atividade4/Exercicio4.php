<?php

$nome = $_POST['NomePrato'];
$peso =  $_POST['Peso'];


if (!empty($_POST["NomePrato"]) && !isset($_POST["NomePrato"])
&& (!empty($_POST["Peso"]) && !isset($_POST["Peso"]))) {

$valor = ($peso / 1000) * 21.50;
echo " $nome - Peso: $peso Valor a pagar R$ $valor ";

} else {
    echo "Dados insuficiente!";
    header("refresh: 3, Form1.php");
}

?>