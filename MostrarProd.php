<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Produtos</title>
    <?php
        include 'conexao.php'; 
        $consulta = $cn->query('select * from vw_ExibeProd');
    ?>
</head>
<body>
    <?php
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        echo $exibe['cd_produto'].'<br>';
        echo $exibe['nm_produto'].'<br>';
        echo $exibe['vl_produto'].'<br>';
        echo $exibe['nm_categoria'].'<br>';
    ?>
</body>
</html>