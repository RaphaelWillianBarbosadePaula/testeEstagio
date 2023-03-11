<?php

include("./conecta.php");

header('Content-Type: application/json');

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

$sql = "insert into usuarios"
    . " (nome, email, senha)"
    . " VALUES ('{$decoded["nome"]}', '{$decoded["email"]}', '{$decoded["senha"]}')";

$row = mysqli_query($conexao, $sql);

if ($row) {
    echo "ok";
} else {
    $erro = mysqli_error($conexao);
    echo $erro;
}