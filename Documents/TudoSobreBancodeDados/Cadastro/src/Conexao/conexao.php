<?php 

$mysql = new mysqli("localhost", "root", "Donmisterjan10", "cadastros");

if ($mysql == true) {
    return $mysql;
}else {
    echo "Não foi possivel conectar, Tente novamente.";
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = "UPDATE UsuarioCliente FROM id = ?;";
$usuario_log = mysqli_query($mysql, $usuario);