<?php 

 require_once('../Model/usuario.php');

  $boton=$_POST['boton'];

  if($boton =="cerrar"){

       session_start();
       session_destroy();
  }else{

       
		  $username=$_POST['username'];
		  $password=$_POST['password'];

		  $p= new Usuario();
		  $array = $p->identificar($username,$password);
            var_dump($array);
          
		if($array){

		        session_start();
		        $_SESSION['usuario']=$array[0];
		        $_SESSION['Nombre']=$array[0];
		    }else{
		    
		       echo "no";
		    }


  }







?>