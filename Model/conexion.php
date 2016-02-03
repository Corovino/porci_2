
<?php
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
			$this->basedatos  = "porciweb";
	}
    public  function conectar(){
  	 	$this->conexion = new mysqli($this->servidor,$this->usuario,$this->contraseña,$this->basedatos);
  	 	if($this->conexion->connect_errno){
  	 		return false;
  	 		
  	 	}else{
  	 		//echo "se conecto correctamente";
  	 		//$con->set_charset("utf8");
  	 		   
			  return $this->conexion;
			
  	 	}
	}
	function cerrar(){
		$this->conexion->close();
	}
}
$conectar = new Conexion();
$conectar->conectar();
?>
