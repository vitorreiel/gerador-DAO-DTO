<?php
session_start();
$_SESSION['msg'] = array();
class Template{
	private $template;
	private $content;

	function Template($template){
		$this->template = $template;
		$this->content = $this->getContent();
	}

	function set($key, $value){
		$this->content = str_replace('${'.$key.'}', $value, $this->content);	
	}

	function getContent(){
		$ret = '';
		$uchwyt = fopen ($this->template, "r");
		while (!feof ($uchwyt)) {
			$buffer = fgets($uchwyt, 4096);
			$ret .= $buffer;
		}
		fclose ($uchwyt);
		return $ret;			
	}
	
	function write($fileName){
		$fd = fopen ($fileName, "w");
		fwrite($fd, $this->content);
		fclose ($fd);
		array_push($_SESSION['msg'], $fileName);
	}
}
?>