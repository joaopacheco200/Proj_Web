<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Formulario</title>
    <style>
        .container {
            width: 400px;
            padding: 20px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            margin: 10px auto;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form Input {
            width: 300px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Restaurante do Xiru</h1>

        <form action="./aula0611/Exercicio4.php" method="post">
            <input type="text" name="NomePrato" id="NomePrato" placeholder="Insira o nome do prato:">

            <input type="number" name="Peso" id="Peso" min="10" max="2000" step="0.01" placeholder="Peso:">

            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">

        </form>
    </div>
</body>

</html>