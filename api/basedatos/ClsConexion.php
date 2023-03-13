<?php

class ClsConexion {

	private $servidor = "mysql:host=localhost;dbname=crud_miembros";
	
	private $usuario = "root";
	
	private $contrasena;
	
	protected $conexion;

	public function __construct(){
		$this->contrasena = getenv("passbd");
	}

	public function open(){
		
		try{
		    $this->conexion = new PDO($this->servidor, $this->usuario,$this->contrasena);
		    $this->conexion->exec("SET CHARACTER SET utf8");
        $this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
        $this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}catch (PDOException $e){
		    echo "Error: ".$e->getMessage();
		}

	}

	public function close(){
		$this->conexion = null;
	}

}
?>