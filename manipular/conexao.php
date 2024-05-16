<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "dicionario"; 

$conexao = mysqli_connect($host, $usuario, $senha, $banco);
mysqli_set_charset($conexao, "utf8");
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}else
echo("");
?>
