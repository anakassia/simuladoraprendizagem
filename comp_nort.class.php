<?php
	class comp_nort {
	private $idCnr;
	private $nomeCnr;
	
	public function __construct(){
		this->nomeCnr = "";
	}
	
		public function __construct($nomeCnr){
		this->nomeCnr = $nomeCnr;
	}
	
		public function __construct($idCnr){
		this->$idCnr = idCnr;
	}
	
	
	public function __set($atrib, $value){
		$this -> $atrib = $valeu;
	}
	
	public function __get($atrib){
		return $this -> $atrib;
	}
		

	

?>
