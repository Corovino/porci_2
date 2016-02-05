<?php
session_start();
if(isset($_SESSION['usuario']) ){
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wizard</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    

    <style type="text/css">
     .barra{
        background-color: #33b5e5;
        color: #FFFFFF;
     }
      .color{
        color: #FFFFFF;
        padding-right: 10px;
      }
      .navbar-default .navbar-link {
       color: #FFFFFF;
     }
     .btn-default {
        color: #FFFFFF;
        background-color: #33b5e5;
        border-style: none;
        margin-top: 10px;
       
     }
     .navbar-header{
        padding-top: 15px; 
     }
 
    </style>
</head>
<body>
 
<nav class="barra navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <p class="color">Wizard</p>
     
    </div>
           <div class="text-right">
            <div class="btn-group ">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuario <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><?php   echo" ".$_SESSION['usuario']." ";   ?></a></li>
                   
                    <li role="separator" class="divider"></li>
                    <li><button type="button" id="close" class="btn btn-default"  >Salir</button></li>
                  </ul>
            </div>
           </div>
 
     
  </div>
</nav>

  <section class="row">
     <div class="col-xs-12 .col-md-12 .col-lg-12">
        <h1 class="text-center">Bienvenido al panel de control</h1>
      </div>  
  </section>
  
  <div class="container">
  <h2>Muestra</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
 <footer>
    <script type="text/javascript"  src="https://code.jquery.com/jquery-2.1.4.min.js "></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/prueba/Resources/js/myJs.js"></script>
 </footer>
</body>
</html>
<?php        
     
 }else{
    header('Location: index.php');
 
}
 
 
?>