<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '12345678';
    $banco = 'db_05_06';
    $cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>