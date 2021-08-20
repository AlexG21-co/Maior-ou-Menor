<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resultado</title>
</head>

<body>
    <div class="container border p-4">
    <h1> Resultado: </h1>
    <?php
    $valor1 = $_POST["vl1"];
    $valor2 = $_POST["vl2"];

    if($valor1 > $valor2){
       echo("O $valor1 é maior que $valor2");
    }
    elseif($valor2 > $valor1){
        echo("O $valor2 é maior que $valor1");
    }
    else{
        echo("O $valor1 e $valor2 são iguais.");
    }
    ?>
    </div>
</body>

</html>