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
		  
		    
			   if($array[0]==0){
			      echo "Nombre de usuario o clave incorrecto";
			    }else{
			    
			        session_start();
			        $_SESSION['usuario']="yes";
			        $_SESSION['Nombre']=$array[0];
			    } 


  }







?>