<?php 
/**
* 
*/
class Usuario 
{
	
	private $conexion;
	 
	public  function __construct()
	{
		require_once('conexion.php');
		
		$this->conexion = new Conexion();
		$this->conexion->conectar();
		
	}
	function identificar($username, $password){
     
		$pass=sha1($password);
	
		$sql = "select nombre from registro_por where correo='" . $username . "'  AND  pass='" . $password . "' ";
		$re = $this->conexion->conexion->query($sql);
	    
		if($re->num_rows > 0){
				//--echo $filas;
			   
				$r =$re->fetch_array();
                 return $r['nombre'];
			}
			else{
			    
			    $r[0]=0;
			    return $r;
			}
			
			//exit();

			$this->conexion->cerrar();
	
		
	}
}

?>
