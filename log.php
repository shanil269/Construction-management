<?php
	require_once('connection.php');
   
?>
    <html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
   
    </head>
    <body>
    
     <div class="container-fluid">
         <div class="container col-lg-4 login">
             <div class="row">
             </div>
         </div>
         <div class="container col-lg-4 login">
             <div class="row loginss">
                  <form class="form-signin" method="POST" action="login.php">
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">UserName</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
       <div class="input-group">
       <span class="input-group-addon" id="basic-addon1">password</span>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      </div>
        <button class="btn btn-lg btn-primary btn-block button" type="submit">Login</button>
      </form>

             </div>
         </div>
     </div>
      
     

        </body>
