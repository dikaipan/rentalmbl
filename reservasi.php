<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reservasi</title>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Link Tampilan Siremon -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.css" rel="stylesheet">
<!-- Link Tampilan Siremon akhir -->

		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

<!--animmasi-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!-- akhir animmasi-->

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
     padding-top: 70px;
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


			<!--Mobil Tampil  -->

			<div class="selectroom">
				<div class="container-fluid">	

					<?php

				$id = $_GET['pesan'];

								$value = $do->beliMobil($id);
									$m = $do->selectOneMobil($value[1]);
									//$n = $do->selectOneKota($value[2]);

					echo "<div class='selectroom_top'>
						<div class='col-md-4 selectroom_left wow fadeInLeft animated' data-wow-delay='.5s'>
							<img src='gambar/".$m['gambar']."' class='img-responsive' alt=''>
						</div>
						<div class='col-md-8 selectroom_right wow fadeInRight animated' data-wow-delay='.5s'>
							<h2>$m[nama]</h2>
							
							<ul>
									<li>
										<h4>Warna</h4>
										<h6>$m[4]</h6>
									</li>
									<li>
										<h4>Tahun</h4>
										<h6>$m[3]</h6>
									</li>
									<li>
										<h4>No Polisi</h4>
										<h6>$m[6]</h6>
									</li>
									<li>
										<h4>Banyak kursi</h4>
										<h6>$m[5]</h6>
									</li>
								</ul>
									<div class='clearfix'></div>
							<div class='grand'>
								<h2 style= 'color :#34ad00;'>Harga Total</h2>
								<br>
								<h2>RP. $value[3]</h2>
							</div>
						</div>
						<div class='clearfix'></div>
					</div>"
								;
								?>

				<!--Mobil Tampil akhir -->

				<!-- input tanggal -->
								
					<div class="selectroom_top">
						<h2></h2>
						<br>
						<form method="post">
							<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
								<div class="bnr-right">
								<label class="subtitle">Tanggal Pinjam</label>
								<input class="date" name="tglawal" id="datepicker" type="text" placeholder="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}" required=>
							</div>
						<div class="bnr-right">
						<label class="subtitle">Durasi</label></td>
						<td><input name="durasi" type="text" class="required" id="durasi" size="200" /></td>
						</div>
						
							<br><br><br>
							<div class='bus-txt4'>
								<div class="sear">
								<button class="seabtn" name="book" id="book">Booking</button>
								</div>
									<div class='clearfix'></div>
							</div>
							<input type="hidden" name="idmobil" value="<?=$id?>">
							<input type="hidden" name="harga" value="<?=$value[3]?>">
							

							
						</form>
						<?php
						
						//echo "<pre>";print_r($_POST);exit;
						if(isset($_POST['book'])){
							$idmobil = $_POST['idmobil'];
							$harga = $_POST['harga'];
							//$dari = $_POST['dari'];
							//$tuju = $_POST['tuju'];
							$tglawal = $_POST['tglawal'];
							$newDate1 = date("Y-m-d", strtotime($tglawal));
							$durasi= $_POST['durasi'];
							//$tglakhir = $_POST['tglakhir'];
							//$newDate2 = date("Y-m-d", strtotime($tglakhir));
							$totBayar=$harga*$durasi;
							//print_r($totBayar);exit;
							//$totalBayar= $_POST['totBayar'];
							
							$status = 1;
							$kode = $do->acak(5);
							$userid = $_SESSION['userid'];
							if(!empty($tglawal) and !empty($durasi)){
								//echo "<script>alert('$newDate1')</script>";
								$proses = $do->reservasi($idmobil,$userid,$kode,$harga,$newDate1,$durasi,$status,$totBayar);
							}else{
								echo "<script>alert('Tanggal tidak ada')</script>";
							}
						}
						
						?>
						<div class="clearfix"></div>
						
						<!---start-date-piker---->

							<link rel="stylesheet" href="css/jquery-ui.css" />
							<script src="js/jquery-ui.js"></script>
								<script>
									$(function() {
									$( "#datepicker,#datepicker1" ).datepicker();
									});
								</script>
						
						<!---/End-date-piker---->

						</div>
						
					</div>
				</div>
			</div>

			<!-- input tanggal akhir -->
			

					<!--- footer-top ---->

						<div class="container-fluid">
							<div class="col-md-3 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
								<h1 style="color: white;">Merk Mobil</h1>
								<br>
								
									<ul>
									 <?php
								$row = $do->selectMerek();
								$no = 1;
								foreach ($row as $val) {
									echo "<li style:'padiding left'><a href='bus.php?id=$val[0]'>$val[1]</a></li>";
									$no++;
								}
								?>
								<br>
								<br>
								

										<div class="clearfix"></div>
									</ul>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>

					<!--- /footer-top ---->
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
						            <p>© 2018 Copyright Siremon </p>
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

			