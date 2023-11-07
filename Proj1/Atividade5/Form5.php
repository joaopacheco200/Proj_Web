<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aposta Flix</title>
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
        <h1>Aposta Flix</h1>

        <form action="./Exer5.php" method="post">
            <input type="text" name="TimeA" id="TimeA" placeholder="Time A:">

            <input type="text" name="TimeB" id="TimeB" placeholder="Time B:">

            <input type="number" name="GolsA" id="GolsA"  placeholder="Gols do time A:">
            <input type="number" name="GolsB" id="GolsB"  placeholder="Gols do time B:">

            <input type="submit" value="Ver Resultados">
            <input type="reset" value="Limpar">

        </form>
    </div>
</body>

</html>