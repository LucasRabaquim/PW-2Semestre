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
  margin-top:5%;
  border:1px solid #131313;
  box-shadow: #131313 5px 5px;
  padding:5%;
}
.container-fluid{
  display: flex;
  justify-content: center;
}
</style>
<body>
<div class="container-fluid">
<form method="post" action="inserirUsuario.php">
  <div class="mb-3">
    <label class="form-label">Nome:</label>
    <input name="txtNome" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email:</label>
    <input name="txtEmail" type="email" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Senha:</label>
    <input name="txtSenha" type="password" class="form-control">
  </div>
  <div class="mb-3">
  <label class="form-label">Cargo: </label>
  <select name="cargo" class="form-select">
    <option selected value="1">TI</option>
    <option value="2">ADM</option>
    <option value="3">MKT</option>
  </select>
</div>
<div class="mb-3">
    <div class="form-text"><a href="login.php">Já tenho conta.</a></div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</body>
</html>