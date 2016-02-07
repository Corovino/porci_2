
/**
  Hoja en la que se trabaja efectos de registro
  loguin  en formularios de ingreso  y se  trabaja 
  captura de datos registro e ingreso.

   




*/






//--------------------------------------------------------------


$(function(){





    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});


});



//-------------------------------------------------------------------------------

//Evento on nclick que  me captura datos y me permite ingreso al usuario .			

            $('#login-submit').click(function(){

			        var username = $('#username').val();
				    //var email = $('#email').val();
				    var password = $('#password').val();
				    //var con_password = $('#confirm-password').val();

			     
				    var data= $('#login-form').serialize();
				    console.log(data);
					$.ajax({
						beforeSend:function(){
                           console.log(data);
						},
						url:'../Controllers/usuario.php',
						type:'POST',
						data:data,
						success:function(data){
							console.log(data);
							var resp =typeof(data);
							console.log(resp);
			                if(resp =='no'){
			                      console.log('soy data'+data);
			                	 alert('datos incorrectos'); 
			                }else{
			                	location.href='./panel_control.php';
			                	       	
                                    
			                	
                               
			                }
				           
						}
					});
		      });	
		
//-------------------------------------------------------------------------------
//Envento on click   que me cierra  sesi{on de usuario 

              $('#close').click(function(){

			        var data='boton=cerrar';
						console.log(data);
						$.ajax({
							beforeSend: function(data){
                                console.log(data);
							},
					        type:'POST',
					        url:'../Controllers/usuario.php',
					        data:data,
					        success:function(data){

					             location.href ="../views/"
					        }
						});
		      });		




//-------------------------------------------------------------------------------

//evento  onclick que me permite  el registro de usuario 


$('#register-submit').click(function(){
      
 
      var data= $('#register-form').serialize();
      
        $.ajax({
	         	 beforeSend:function(){
	         	 	console.log(data);
	         	 },
	         	 type:'POST',
	         	 url:'../Controllers/registro.php',
	         	 data:data,
	         	 success: function(data){
	         	 	   console.log('nanananana');
	                   console.log("soy data"+data);
	         	 }

           });

     




});
 




















//-------------------------------------------------------------------------------



		
