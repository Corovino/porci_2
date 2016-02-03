<<<<<<< HEAD

<?php
=======
<?

>>>>>>> e8dd4c758711221ab8718c97c14e17b2f52c8c84
/**
* 
*/
class Conexion 
{
	
        private $servidor;
		private $usuario;
		private $contraseña;
		private $basedatos;
		public  $conexion;
	
     public function __construct()
	{
		    $this->servidor   = "localhost";
			$this->usuario	  = "root";
			$this->contraseña = "root";
<<<<<<< HEAD
			$this->basedatos  = "porciweb";
=======
			$this->basedatos  = "Porciweb";
		  
>>>>>>> e8dd4c758711221ab8718c97c14e17b2f52c8c84
	}
    public  function conectar(){
<<<<<<< HEAD
=======

>>>>>>> e8dd4c758711221ab8718c97c14e17b2f52c8c84
  	 	$this->conexion = new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);
  	 	if($this->conexion->connect_errno){
  	 		return false;
  	 		
  	 	}else{
  	 		//echo "se conecto correctamente";
<<<<<<< HEAD
  	 		//$con->set_charset("utf8");
=======

  	 		//$con->set_charset("utf8");

>>>>>>> e8dd4c758711221ab8718c97c14e17b2f52c8c84
  	 		   
			  return $this->conexion;
			
  	 	}
	}
<<<<<<< HEAD
	function cerrar(){
		$this->conexion->close();
	}
=======

	function cerrar(){
		$this->conexion->close();
	}



>>>>>>> e8dd4c758711221ab8718c97c14e17b2f52c8c84
}
$conectar = new Conexion();
$conectar->conectar();
?>
