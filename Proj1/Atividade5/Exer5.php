<!-- Crie um algoritmo em php onde é informado o nome de 2 time(ex: GRÊMIO e inter) e o
número de gols marcados na partida ex:(GRÊMIO - 5 gold e inter - 0 gols)
Mostre na tela o nome do time que ganhou a partida e a quantidade de gols: Ex:(GRÊMIO VENCEU A PARTIDA 5X0inter) -->

<?php

//$nome = $_POST['NomePrato'];
//$peso =  $_POST['Peso'];


//if (!empty($_POST["NomePrato"]) && !isset($_POST["NomePrato"])
///&& (!empty($_POST["Peso"]) && !isset($_POST["Peso"]))) {

//$valor = ($peso / 1000) * 21.50;
//echo " $nome - Peso: $peso Valor a pagar R$ $valor ";

//} else {
    //echo "Dados insuficiente!";
   // header("refresh: 3, Form1.php");
//}

$timeA = $_POST['TimeA'];
$timeB = $_POST['TimeB'];
$golsA = $_POST['GolsA'];
$golsB = $_POST['GolsB'];

if (!empty($_POST["TimeA"]) && isset($_POST["TimeA"])
&& !empty($_POST["TimeB"]) && isset($_POST["TimeB"])) {



if($golsA > $golsB){
    echo"O $timeA ganhou de $golsA a $golsB do $timeB";
}else if($golsB > $golsA){
    echo"O $timeB ganhou de $golsB a $golsA do $timeA";

}else  {
    echo"O jogo terminou com o placar de $golsA a $golsB";

}
}else {
    echo"Arruma esse TRECO!!";
    header("refresh: 3, Form5.php");
}

?>
