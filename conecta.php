<?php

$servidor   =   "localhost";
$bd         =   "testeEstagio";
$usuario    =   "root";
$senha      =   "";

$conexao    =   mysqli_connect($servidor, $usuario, $senha)
    or die("Erro ao conectar no banco de dados");

$db = mysqli_select_db($conexao, $bd)
    or die("Não foi possivel selecionar o banco de dados");

?>