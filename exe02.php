<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 2;
    $resultado = "";
    if($num  % 2 == 0){
        $resultado = $num." é um número par.";
    }
    else{
        $resultado = $num." é um número ímpar.";
    }
    echo $resultado;
    ?>
</body>
</html>