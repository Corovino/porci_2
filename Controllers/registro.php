<?php

require_once("../Model/registro.php");
   


      $username =$_POST["username"];
 	  $email =$_POST["email"];
      $password =$_POST["password"];
      $confirm_password =$_POST["confirm_password"];
      
    	
     $reg = new Registro();

     $t=$reg->registrar($username,$email,$password,$confirm_password);  
      
     var_dump($t);
      
    if($t != 1){
    	//return "ok";
    	//echo "es difenrete de uno";
    	return $t;
    }else{
    	return $t;
    	//echo "fail";
     }





?>