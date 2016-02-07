<?php 


/**
* 
*/
class Registro 
{

	private $conexion;
	private $has;
	private $has_con;
 
	
	function __construct()
	{
		require_once('conexion.php');
		$this->conexion = new Conexion();
		$this->conexion->conectar();

		
			
		
	}


	 public function registrar($username,$email,$password,$confirm_password)
	   {


                    
                     
	   	 try{
                    
                    $this->has= crypt($password);
				    $this->has_con= crypt($confirm_password);
                    $p= "soy diferente de uno";
				    
				    $registro=$this->conexion->conexion->query("insert into registro_por (nombre, correo, pass, conf_pass) values( '$username','$email','$this->has','$this->has_con')");
                    

				     if($registro)
				     {
                             return $p;
		                      
				     }else{

				     	throw new Exception("Fallos la ejecución");
				     	
				     }
				    
		   

	   	 }catch(Exception $e){

                 echo 'Message: '.$e->getMessage();
	   	 
	   	 }
         
		
		   
		
         

	 }
}


?>