<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastro</title>
    <?php include 'conexao.php'; ?>
</head>
<style>
form{
  width:60%;
  border:1px solid #131313;
  box-shadow: #131313 5px 5px;
  padding:5%;
  margin-top:5%;
}
.container-fluid{
  display: flex;
  justify-content: center;
}

</style>
<?php
    $erro = $_GET['erro'];
    if($erro == 'naoexiste'){
        $mensagem = 'Usuário não encontrado.';
        $opcao = '<a href="cadastrar.php">Não sou cadastrado.</a>';
    }
    else if($erro == 'existe'){
        $mensagem = 'Usuário já existe.';
        $opcao = '<a href="login.php">Fazer login.</a>';
    }
    else{
        $mensagem = 'Erro desconhecido';
        $opcao = '<a href="login.php">Tente realizar o login.</a>';
    }
?>
<body>
<div class="container-fluid">
<form method="post" action="validarUsuario.php">
  <h1 class="h1"><?php echo $mensagem; ?></h1>
  <div class="mb-3">
    <div class="form-text"><?php echo $opcao; ?></div>
  </div>
</form>
</div>
</body>
</html>