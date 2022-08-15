<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de formulário</title>
</head>
<body>
    <?php
        $nome = $_POST["txtnome"];
        $telefone = $_POST["txttelefone"];
        $email = $_POST["txtemail"];
        $novidades = $_POST["rdbnovidades"];
        $mensagem = $_POST["txtmensagem"];
        
        echo "<p>Nome do Cliente: ".$nome."</p>";
        echo "<p>Telefone do Cliente: ".$telefone."</p>";
        echo "<p>Email do Cliente: ".$email."</p>";
        if($novidades == "sim")
            echo "<p>SIM, desejo receber as novidades.</p>";
        else
            echo "<p>NÃO, desejo receber as novidades.</p>";
        echo "<p>Mensagem do Cliente: ".$mensagem."</p>";
    ?>
</body>
</html>