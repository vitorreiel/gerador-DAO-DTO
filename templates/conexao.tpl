<?php
$servidor = "${servidor}";
$usuario = "${usuario}";
$senha = "${senha}";
$nomeDoBanco = "${nomeDoBanco}";
try {
	$conexao = new PDO("mysql:dbname=$nomeDoBanco; host=$servidor", $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>	
