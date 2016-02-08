<?php

require_once("../Model/registro.php");
   


      $username =$_POST["username"];
 	  $email =$_POST["email"];
      $password =$_POST["password"];
      $confirm_password =$_POST["confirm_password"];
      
    	
     $reg = new Registro();

     $t=$reg->registrar($username,$email,$password,$confirm_password);  
      $respuesta="soy controllers";
      $fail="segenero un erro";
     //var_dump($t);
     //echo ($t); 
    if($t == true){
    	//return "ok";
    	header('Content-Type: application/json');
    	echo json_encode($respuesta);
    	
    }else{
    	header('Content-Type: application/json');
    	echo json_encode($fail);
    	//echo "fail";
    	//echo json_encode("fail");
     }





?>