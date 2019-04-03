<?php 
include 'admin/proses.php';

$do = new ClassMobil();
error_reporting(0);
 ?>


<!DOCTYPE html>
<html>
<head>
				<title>Tentang Kami</title>
				<!-- kompiler bootstrap dan icon -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
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
	 background: url(img/bg.jpg) no-repeat center center fixed; 
	 -webkit-background-size: cover;
	 -moz-background-size: cover;
	 -o-background-size: cover;
	 background-size: cover;
     padding: 10px;
     padding-top: 0px;
     margin-right: 10px;
     margin-left: 10px;
}

		</style>

<script>

			
		$('.carousel').carousel({
		    pause: "true" 
		});
		
</script>
		

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
	 background: url(img/bg.jpg) no-repeat center center fixed; 
	 -webkit-background-size: cover;
	 -moz-background-size: cover;
	 -o-background-size: cover;
	 background-size: cover;
     padding: 10px;
     padding-top: 0px;
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

			<div class="bg"></div>
			<div class="jumbotron wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s;">
			  <h1 style="padding-top: 20px;">Tentang Kami</h1>
			 
			</div>

<!-- top-header -->
<nav class="navbar navbar-default navbar-fixed-top"style="border-radius:10px">
		    <div class="container"style="border-color: #333">
		        <a href="index.php" class="navbar-brand"><img src="img/logo.png" ></a>
		        <!-- logo  -->
		      
		   <div class="navbar-header">
		            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            
		     </div>
			 <div id="navbarCollapse" class="collapse navbar-collapse">
		      <ul class="nav navbar-nav">
		               <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		               <li><a href="tentangkami.php"><span class="glyphicon glyphicon-info-sign"></span> Tentang Kami</a></li> 
		               <li><a href="bus.php"><span class="glyphicon glyphicon-home"></span> Katalog</a></li>
		            </ul>
				
	
		<?php
		session_start();
		if(empty($_SESSION['namamember'])){
		?>
		<script type="text/javascript">
		function validasi_input(form){
		if (form.username.value == "" && form.password.value== ""){
		alert("Username atau password masih kosong!");
		form.username.focus();
		return (false);
		}
		return (true);
		}
		</script>
		
		    <ul class="nav navbar-nav navbar-right">
		<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		<li  class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	</ul>
			
      
        <?php
		}else{
		?>

    <ul class="nav navbar-nav navbar-right">			
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >
			 Halo <?php echo"$_SESSION[nama] !";?></a></li> 
			<li class="sigi"><a href="logout.php"> Log Out  <span class="glyphicon glyphicon-log-in"></span></a></li>
        </ul>

		<?php
		}
		?>
		<div class="clearfix"></div>
	</div>
</div>

  
		      </ul>

		    </div>
		    </div>
		</nav>
<!-- navigasi akhir -->

				
        
<!-- Page Content -->
    <div class="infocontent-about wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">

		      <!-- Introduction Row -->
		      <h1 class="my-5" style="text-align: center;"><strong>Siremon</strong>
		      	<br>
		        <h3>Terimakasih telah bergabung bersama kami !</h3>
		        <br>
		        <p style="text-align: center;">Siremon sendiri merupakan singkatan dari Situs Rental Mobil Online dan kami singkat menjadi Siremon.com , Siremon.com memiliki beberapa armada kendaraan , Seperti mobil pribadi hingga buss,tarif yang kami berikan pun bisa dibandingkan dengan situs rental mobil lain , karna niat kami adalah menjadi situs rental online terbesar di Yogyakarta,sedikit informasi tentang Siremon.com semoga kami mampu membuat anda puas baik dari pelayanan maupun armada kendaraan yang kami punya,terimakasih dan <strong> Vacation In Your Hand !</strong></p>
		     <br>
		      <h2 style="text-align: center;">Sedikit cuplikan biodata beserta tugas kami dari Siremon.com</h2>
		      <hr>
		      <!-- Team Members Row -->
		      <div class="row" style="text-align: center;">
		        <div class="col-lg-12">
		          <h2  style="padding-bottom: 30px;">Tim Kami</h2>
		          

		        </div>

		        <div class="col-lg-4 col-sm-6 text-center mb-4">
		          <img src="img\about_us\dika.jpg" class="img-circle img-fluid d-block mx-auto" alt="">
		          <h3>Handika Juliansyah 
		          		<hr>
		            <strong><small>Front-End Developer</small></strong>
		          </h3>
		          <p>Bagian Front-End dari sebuah website adalah bagian yang langsung dilihat oleh user. User juga bisa langsung berinteraksi pada bagian ini. Bagian ini dibangun menggunakan HTML, CSS, dan JavaScript.</p>
		        </div>
		        <div class="col-lg-4 col-sm-6 text-center mb-4">
		          <img class="img-circle img-fluid d-block " src="img\about_us\edy.jpg" alt="">
		          <h3>Edy Purnomo 
		          		<hr>
		            <strong><small>Back-End Developer</small></strong>
		          </h3>
		          <p>Back-End adalah bagian belakang layar dari sebuah website. Bahasa pemograman untuk back-end development diantaranya adalah PHP, Ruby, Python, dan banyak lainnya.</p>
		        </div>
		        <div class="col-lg-4 col-sm-6 text-center mb-4">
		          <img class="img-circle img-fluid d-block " src="img\about_us\ali.jpg" alt="">
		          <h3>Mohammad Ali Kahfi 
		          	<hr>
		            <strong><small>Web-Analyst Developer</small></strong>
		          </h3>
		          <p>Web Analyst bertugas untuk menganalisa proses web design, mencocokkan perkembangan sebuah web design dengan requirement yang diminta oleh pelanggan.</p>
		        </div>
  
		

		        <br>
		        <hr>
			<!-- Modal  Contac Us -->
	<div class="container-box rotated">
	        <button type="button" class="btn btn-info btn-danger turned-button" data-toggle="modal" data-target="#myModal">Contact Us</button>
				   
				   </div>
						<div id="myModal3" class="modal fade" role="dialog">
						<div class="modal-dialog">
				   </div>
						<div class="modal-body">

						<h2>Contact Us</h2>
						<hr>

						<form role="form" method="post" id="reused_form" >
						    <p>
							Tulis pesan anda di bagian form yang sudah disediakan dibawah , kami akan membalas secepatnya , Terimakasi Salam Hangat admin Siremon.
						    </p>

						<div class="form-group">

							<label for="name">Nama:</label>
							 
						<input type="text" class="form-control" id="name" name="name"   required maxlength="50">
									           

					</div>
			 		    <div class="form-group">

							<label for="email"> Email:</label>
									               
						<input type="email" class="form-control"id="email" name="email" required maxlength="50">
									            
					</div>
						<div class="form-group">
							<label for="name">Pesan:</label>
									                
						<textarea class="form-control" type="textarea" name="message"  id="message" placeholder="Tulis Pesan anda disini"
						maxlength="6000" rows="7"></textarea>
									          
					</div>

					    <div>
											           
					    <button type="submit" ><i class="glyphicon glyphicon-ok"></i> Kirim </button>
						<button type="button"data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Batal</button>
					
					</div>

					</form>
					    <div id="success_message" style="width:100%; height:100%; display:none; ">
							<h3>Pengiriman Berhasil!</h3>
					</div>
						<div id="error_message"
							style="width:100%; height:100%; display:none; ">
							<h3>Error</h3>
								Maaf Coba Lagi Lain Waktu .

					</div>
					</div>
				</div>
			     </div>

				</div>

			 </div>
			</div>

			
			<!-- Modal Contac us akhir -->
		 


		
		<!-- footer-top -->

<br>
		<footer id="myFooter" >
	        <div class="container">

	              
	                <div class="col-sm-3">
	                    <h5>Get started</h5>
	                    <ul>
	                        <li><a href="#">Home</a></li>
	                        <li><a href="#">Sign up</a></li>
	                       
	                    </ul>
	                </div>
	                <div class="col-sm-3">
	                    <h5>Tentang Kami</h5>
	                    <ul>
	                        <li><a href="#"> Informasi Perusahaan</a></li>
	                   
	                        
	                    </ul>
	                </div>
	                <div class="col-sm-2">
	                    <h5>Support</h5>
	                    <ul>
	                        <li><a href="#">FAQ</a></li>
	                       
	                      
	                    </ul>
	                </div>
	                <div class="col-sm-4">
	                    <div class="social-networks">
	                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
	                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
	                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
	                </div>

	            </div>
	        </div>

	        <div class="footer-copyright" style="margin-bottom:10px">
	            <p>© 2018 Copyright Siremon.tk </p>
	        </div>
		 </footer>
   	<!-- footer -->
<!-- sign -->
		<div class="modal fade wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					
						
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-right">
												<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
													<h3>Buat akun Anda</h3>
													<input type="text" name="nama" placeholder="Masukan Nama lengkap anda">
													<input type="text" name="username" placeholder="Masukan Username anda">
													<input type="password" name="password" placeholder="Masukan Password anda">	
													<input type="text" name="alamat" placeholder="Masukan Alamat anda">
													<input type="text" name="telepon" placeholder="Masukan Telepon anda">
													<input type="text" name="noktp" placeholder="Masukan No KTP anda">	
													<input type="submit" name="daftar" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
									
										
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
											<h3>Masuk Dengan Akun Anda</h3>
											<input type="text" name="username" placeholder="Masukan Username anda">
											<input type="password" name="password" placeholder="Masukan password anda">
											<input type="submit" value="SIGN IN" name="masuk">
										</form>
									</div>
									<div class="clearfix"></div>								
								
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->

		
			
</body>
</html>                     