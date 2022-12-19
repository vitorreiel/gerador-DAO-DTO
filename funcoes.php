<?php
require_once("templates/Template.php");
require_once("templates/Inflector.php");

function inicializar($servidor,$usuario,$senha,$nomeDoBanco,$conexao){
	@mkdir("gerados");
	@mkdir("gerados/".$nomeDoBanco."");
	@mkdir("gerados/".$nomeDoBanco."/DAO");
	@mkdir("gerados/".$nomeDoBanco."/DTO");
	$tabelas = pegarTabelas($conexao);
	gerarClasses($tabelas,$nomeDoBanco,$conexao);
	criarArquivoInclude($tabelas,$nomeDoBanco,$conexao);
	gerarDAO($tabelas,$nomeDoBanco,$conexao);
	gerarConexao($servidor,$usuario,$senha,$nomeDoBanco,$conexao);
}

function pegarcampos($tabela,$conexao){
	$sql = 'DESC '.$tabela;
	$query = $conexao->query($sql);
	return($query->fetchAll(PDO::FETCH_COLUMN));
}

function pegarTabelas($conexao){
	$sql = 'SHOW TABLES';
	$query = $conexao->query($sql);
	return ($query->fetchAll(PDO::FETCH_COLUMN));
}

function pegarChavePrimaria($tabela,$nomeDoBanco,$conexao){
	$sql = 'DESC '.$tabela;
	$query = $conexao->query($sql);
	$resultados = $query->fetchAll(PDO::FETCH_ASSOC);
	foreach ($resultados as $resultado) {
		if($resultado["Key"]=="PRI" and $resultado["Key"]!= NULL){
			return $resultado["Field"];
		}
	}
}

function gerarClasses($tabelas,$nomeDoBanco,$conexao){
	foreach ($tabelas as $tabela) {
		$tabelaSingular = Inflector::singularize($tabela);
		$template = new Template('templates/Dominio.tpl');
		$template->set('nome_classe', ucfirst($tabelaSingular));
		$template->set('nome_tabela', $tabelaSingular);	
		$tab = pegarcampos($tabela,$conexao);
		$totalCampos = "";
		$metodosGetters = "";
		$metodosSetters = "";
		foreach ($tab as $campos) {
			$totalCampos .= "private $".$campos.";\n\r \t\t";
			$metodosGetters .="public function get".ucfirst($campos)."(){\n\t\t\treturn $"."this->".$campos.";\n\t\t}\n\r\t\t";
			$metodosSetters .="public function set".ucfirst($campos)."($".$campos."){\n\t\t\t"."$"."this->$campos=$".$campos.";\n\t\t}\n\r\t\t";
		}
		$template->set('campos', $totalCampos);
		$template->set('metodosGetters', $metodosGetters);
		$template->set('metodosSetters', $metodosSetters);
		$template->write("gerados/".$nomeDoBanco.'/DTO/'.ucfirst($tabelaSingular).'.php');
	}	
}
function gerarDAO($tabelas,$nomeDoBanco,$conexao){
	foreach ($tabelas as $tabela) {
		$tabelaSingular = Inflector::singularize($tabela);
		$tabelaSingularMinusculo = strtolower ($tabelaSingular);
		$pk = pegarChavePrimaria($tabela,$nomeDoBanco,$conexao);
		$template = new Template('templates/DAO.tpl');
		$template->set('pk', $pk);
		$template->set('nome_classe', ucfirst($tabelaSingular));
		$template->set('nome_classe_singular', $tabelaSingularMinusculo);
		$template->set('nome_tabela', $tabela);		
		$tab = pegarcampos($tabela,$conexao);
		$campos2 = "";
		$campos3 = "";
		$codigosBindValues = "";
		$camposAtualizar="";
		foreach ($tab as $campos) {
			if($campos == end($tab)){
				$campos2 .= "$campos";
				$campos3 .= ":$campos";
				$codigosBindValues .= "$"."consulta->bindValue(':$campos',$$tabelaSingularMinusculo"."->get".ucfirst($campos)."()); ";
				$camposAtualizar .="$campos = :$campos";
			}else{				
				$campos2 .= "$campos, ";
				$campos3 .= ":$campos, ";
				$codigosBindValues .= "$"."consulta->bindValue(':$campos',$$tabelaSingularMinusculo"."->get".ucfirst($campos)."()); \n\r\t\t";
				$camposAtualizar .="$campos = :$campos, ";
			}
		}
		$template->set('campos2', $campos2);	
		$template->set('campos3', $campos3);
		$template->set('camposAtualizar', $camposAtualizar);		
		$template->set('codigosBindValues', $codigosBindValues);
		$template->write("gerados/".$nomeDoBanco.'/DAO/'.ucfirst($tabelaSingular).'DAO.php');
	}	
}

function criarArquivoInclude($tabelas,$nomeDoBanco,$conexao){
	$str ="\n";
	foreach ($tabelas as $tabela) {

		$str .= "\trequire_once('DAO/".ucfirst($tabela)."DAO.php');\n";
		$str .= "\trequire_once('DTO/".ucfirst($tabela).".php');\n";
	}

	$template = new Template('templates/include_dao.tpl');
	$template->set('include', $str);
	$template->write("gerados/".$nomeDoBanco.'/include_dao.php');
}

function gerarConexao($servidor,$usuario,$senha,$nomeDoBanco,$conexao){
		$template = new Template('templates/conexao.tpl');
		$template->set('servidor', $servidor);
		$template->set('usuario', $usuario);
		$template->set('senha', $senha);
		$template->set('nomeDoBanco', $nomeDoBanco);
		$template->write("gerados/".$nomeDoBanco.'/conexao.php');
}

?>