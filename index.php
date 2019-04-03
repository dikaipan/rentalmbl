<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Siremon</title>

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Link Tampilan Siremon -->

		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.css" rel="stylesheet">
		
		<!-- Link Tampilan Siremon -->
		
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

<!--animmasi-->

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

<!--akhir animasi-->

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
<!-- script js slide -->
<script>

			
		$('.carousel').carousel({
		    pause: "true" 
		});
		
</script>
<!-- script js slide -->
</head>
<body>

					<!-- top-header -->

					<nav class="navbar navbar-default navbar-fixed-top"style="border-radius:10px">
							    <div class="container"style="border-color: #333">
							        <a href="#" class="navbar-brand"><img src="img/logo.png" ></a>
							        <!-- logo  -->
							      
							      <!-- Navigasi Bar -->
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
							               <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
							<!--  Navigasi Bar Akhir -->

		<!-- carausel script awal -->

				<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
					 <div class="carousel-inner" role="listbox">
					      <div class="item active background a"></div>
					      <div class="item background b"></div>
					      <div class="item background c"></div>
					      <div class="item background d"></div>
					    </div>
					  </div>
					  
					  <div class="covertext">
					    <div class="col-lg-10" style="float:none; margin:0 auto;">
					      <h2 class="title">Siremon.com</h2>
					      <br>
					      <h3 class="subtitle">Vacation In Your Hand !</h3> 
					      <h4 class="subtitle2">Liburan Tanpa Pusing Kendaraan , Kamilah Pilihan Anda  <span class="fa fa-check-square-o"></span> </h4>
					      <h5 class="subtitle3">Klik Disini</h5>
					      <h5 class="subtitle4"><span class="fa fa-hand-o-down" ></span></h5>
					    </div>
					    <div class="col-xs-12 pesan">
					      <a href="bus.php"><button type="button" class="btn btn-lg pesanbtn">PESAN</button></a>
						 
					    </div>
					  </div>
					  </div>
					</div>
				</div>
			
 		   <!-- carausel slide akhir -->


		  <!-- container armada  -->

		  <div class="container">
            <div class="row">
        	<h1 class="title">Armada Kami Siap Melayani Anda</h1>
                 <hr>
                 <br>
 
          <!-- container akhir armada  -->

          <!-- container cari mobil  -->

			<div class="container-fluid">

						<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
								<h2>SIREMON - Rental Mobil Online dengan Harga dan Kualitas</h2>
				<div class="ban-top">
						<div class="bnr-left">
									<form method="POST" action="cari.php" onsubmit="return validasi_input(this)">
								<h2>Silahkan Pilih Mobil Anda</h2>
						<select name="nama">
							<option value="pilih">Pilih Mobil Anda</option>
								<?php
								foreach ($do->selectMobil() as $val) {
									echo "
									<option value='$val[nama]'>$val[nama]</option>";
								}
								?>
						</select>
				</div>
				
			</div>
					<div class="ban-bottom">
							<div class="clearfix"></div>
						<div class="sear">
					<button class="seabtn" name="cari" id="cari">Cari Mobil</button>
					</div>
									</form>

					</div>
				</div>

			 </div>
			<!-- akhir container cari mobil  -->

			<!--- Contac Us ---->
					<div class="container-box rotated">
	        				<button type="button" class="btn btn-info btn-danger turned-button" data-toggle="modal" data-target="#myModal2">Contact Us</button>
				   
				   </div>
						<div id="myModal2" class="modal fade" role="dialog">
						<div class="modal-dialog">
				   </div>
						<div class="modal-body modal-spa">

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


			<!-- footer  -->

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
				            <p>© 2018 Copyright Siremon</p>
				        </div>
					 </footer>

			   	<!-- footer -->


					<!-- sign -->

						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
														<h3 style=" text-align: centerS;">Masuk Dengan Akun Anda</h3>
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