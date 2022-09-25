<?php
    include 'conexao.php';
    session_start();
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];
    $cargo = $_POST['cargo'];


    $consulta = $cn->query("select * from tbUsuario where emailUsuario = '$email' and senhaUsuario = '$senha'");
    if($consulta->rowCount()==0){
        $inserir = $cn->query("insert into tbUsuario(nomeUsuario,emailUsuario,senhaUsuario,cargoUsuario) values ('$nome','$email','$senha','$cargo')");
        $consulta = $cn->query("select max(idUsuario) from tbUsuario");
        $id = $consulta->fetch(PDO::FETCH_ASSOC);
        $_SESSION['ID'] = $id;
        header('location:produtos.php');
    }
    else
        header('location:erro.php?erro=existe');
?>