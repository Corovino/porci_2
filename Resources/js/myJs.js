

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

			

            $('#login-submit').click(function(){

			        var username = $('#username').val();
				    //var email = $('#email').val();
				    var password = $('#password').val();
				    //var con_password = $('#confirm-password').val();

			     
				    var data= $('#login-form').serialize();
				    console.log(data);
					$.ajax({
						url:'../Controllers/usuario.php',
						type:'POST',
						data:data,
						success:function(data){
							console.log(typeof(data));
			                if(typeof(data)!='string'){
			                      console.log('soy data'+data);
			                	 alert('datos incorrectos');
			                }else{
			                	console.log(data);          	
                                    location.href='./panel_control.php';
			                	
                               
			                }
				           
						}
					});
		      });	
		



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



		
