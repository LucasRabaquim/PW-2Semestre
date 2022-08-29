<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '12345678';
    $banco = 'db_26_08';
    $cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>