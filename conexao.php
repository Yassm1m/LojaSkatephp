<?php
$servidor = "localhost";  // Corrigido para letras minúsculas
$usuario = "root";
$senha = "12345678";
$banco = "dbstory";

$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>