<!DOCTYPE html>
<html>
  <head>
    <title>Rental Mobil - Login Admin</title>
    
    <!-- Skrip CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
   <link rel="stylesheet" href="../css/admin.css"/>
  
  <!--//end-animate-->

  <style type="text/css">
        /*style html sama body*/
        html {
       
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        background-color:transparent;
        padding: 10px;
        padding-top: 0px;

    }
body { 
   background: url(../img/bg.jpg) no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
     padding: 10px;
     padding-top: 70px;
     margin-right: 10px;
     margin-left: 10px;
}

    </style>

<script>

      
    $('.carousel').carousel({
        pause: "true" 
    });
    
</script>
  </head>   
  <body>
  <center>
    <div class="form">
        <div class="main">
        <div class="gambar">
        <h1 >Login sebagai admin</h2>
           <form method="POST">
            <label>Username </label>
            <input size="30" class="login_regis" id="name" name="username" placeholder="Masukan username admin" type="text">
            <br>
            <label>Password </label>
            <input size="30" class="login_regis" id="password" name="password" placeholder="Masukan password admin" type="password">
            <br>
            <input type="submit" name="loginadmin" id="submit" value="Login">
            <a href="../index.php">
            <button type="button" class="btn-beranda">Beranda</button>
                </a>
          </form>
          </div>
        </div>
   </div>
    </center>
  </body>
</html>

<?php 
include 'proses.php';
$do = new ClassMobil();
 ?>

<?php 
if (isset($_POST['loginadmin'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $do->selectAdmin($user,$pass);
}

 ?>