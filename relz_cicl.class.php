<?php
	public class relz_cicl {
	private $idRcc;
	private $pontuacaoAlcancadaRcc;
	
	function __construct(){
		$this->pontuacaoAlcancadaRcc = 0;
	}
	
	function __construct($pontuacaoAlcancadaRcc){
		$this->pontuacaoAlcancadaRcc = $pontuacaoAlcancadaRcc;
	}
		
	public function __construct($idRcc){
		$this->idRcc = $idRcc;
	}

	
	public function __set($atrib, $value){
		$this -> $atrib = $valeu;
	}
	
	public function __get($atrib){
		return $this -> $atrib;
		}

?>
