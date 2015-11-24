<?php
class Facebook{
	//atributos
	public $nombre;
	public $edad;
	private $pass;

	//métodos
	public function __construct($nombre, $edad,$pass){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pass = $pass;
	}

	public function verInformacion(){
		echo "Nombre: " . $this->nombre . " <br>"; 
		echo "Edad: " . $this->edad . " <br>"; 
		//se puede poner self::metodo o $this->metodo
		$this->cambiarPass("54321");
		echo "Password: " . $this->pass . " <br>"; 
	}

	private function cambiarPass($pass){
		$this->pass = $pass;
	}
}

$facebook =  new Facebook("Carlos Fernandez", 24, "1234");
$facebook->verInformacion();

?>