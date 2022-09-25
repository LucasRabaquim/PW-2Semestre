<?php
    include 'conexao.php';
    session_start();
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];

    $consulta = $cn->query("select * from tbUsuario where emailUsuario = '$email' and senhaUsuario = '$senha'");
    if($consulta->rowCount()==1){
        $dadosUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        $_SESSION['ID'] = $dadosUsuario['idUsuario'];
        header('location:produtos.php');
    }
    else
        header('location:erro.php?erro=naoexiste');
?>