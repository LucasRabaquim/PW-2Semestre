<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '12345678';
    $banco = 'dbEstudo';
    $cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>