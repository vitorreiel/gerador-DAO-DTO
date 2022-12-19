<?php

$servidor = !empty($_POST['host'])? $_POST['host']:"localhost";
$usuario = !empty($_POST['usuario'])? $_POST['usuario']:"root";
$senha = !empty($_POST['senha'])? $_POST['senha']:"";
$nomeDoBanco = !empty($_POST['nomebd'])? $_POST['nomebd']:"";

try {
	$conexao = new PDO("mysql:dbname=$nomeDoBanco; host=$servidor", $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}

require_once("funcoes.php");

inicializar($servidor,$usuario,$senha,$nomeDoBanco,$conexao);

header("location:gerados/gerarZip.php?nome=$nomeDoBanco");
?>