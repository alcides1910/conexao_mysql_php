
<?php

$host = "sql311.infinityfree.com";
$banco = "if0_43433083_atividade";
$usuario = "if0_43433083";
$senha = "2010alcides";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

?>
