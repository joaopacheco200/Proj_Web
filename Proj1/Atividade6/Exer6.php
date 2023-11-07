<?php
    $idade = (int)$_POST["idade"];
    $categoria = "";

    switch ($idade) {
        case ($idade >= 5 && $idade <= 7):
            $categoria = "Infantil A";
            break;
        case ($idade >= 8 && $idade <= 10):
            $categoria = "Infantil B";
            break;
        case ($idade >= 11 && $idade <= 13):
            $categoria = "Juvenil A";
            break;
        case ($idade >= 14 && $idade <= 17):
            $categoria = "Juvenil B";
            break;
        case ($idade >=18):
                $categoria = "Adulto";
                break;
        default:
            $categoria = "NÃO CLASSIFICADO";
    }
    echo "O nadador de $idade anos pertence à categoria: $categoria.";
?>