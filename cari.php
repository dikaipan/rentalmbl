
<?php 
include 'admin/proses.php';

$do = new ClassMobil();
error_reporting(0);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Cari Mobil </title>

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
								      
								   <div class="navbar-header" >
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
						
						<!-- Mobil Tampil -->
						
								<div class="bus-btm">
							<div class="container-fluid wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;" >
								<ul>
									<li class="trav"><a href="#">Nama Mobil</a></li>
									<li class="dept"><a href="#">Warna</a></li>
									<li class="arriv"><a href="#">Tahun</a></li>
									<li class="seat"><a href="#">No Polisi</a></li>
									<li class="kursi"><a href="#">Banyak Kursi</a></li>
									<li class="hr"><a  style="margin-left:  15px">Harga</a></li>
										
								</ul>
							 </div>
							</div>
						
						<!--- mobil tampil akhir ---->
						
						<!--- bus-midd ---->
						
						<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
							<div class="container-fluid">
							<!--- ul-first  ---->
										<?php

							if (isset($_POST['cari']))  {
								$nama = $_POST['nama'];
							
							//print_r($nama);exit;
							
								if (!empty($nama)) {
									$no = 1;
								//$r=$do->cariNamaMobil($nama);
								//print_r($r);exit;
								foreach ($do->cariNamaMobil($nama) as $value) {

								echo "<ul class='first'>
									<li class='trav'>
										<div class='bus-ic'>
											<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
										</div>
										</br></br></br></br></br>
										<div class='bus-txt'>
											
											<p style='color:white;'>$value[nama]</p>
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='dept'>
										<div class='bus-ic1'>
										<h4>$value[warna]</h4>
										</div>
										<div class='bus-txt1'>
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='arriv'>
										<div class'bus-txt2'>
											<h4>$value[tahun]</h4>
										</div>
									</li>
									
									<li class='seat'>
										<div class='bus-i'>
											<h4>$value[no_plat]</h4>
										</div>
										<div class='bus-txt3'>
											
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='kursi'>
										<div class='bus-i'>
											<h4>$value[kursi] kursi</h4>
										</div>
										<div class='bus-txt3'>
											
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='hr'>
										<div class='bus-txt4'>
											<h4>RP. $value[harga]</h4>
											<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
											<div class='clearfix'></div>
											</div>
											</li>
											<div class='clearfix'></div>
											</ul>"
											;
												$no++;
										}
								}
								else if ($nama == 'pilih') {
									$no = 1;
								foreach ($do->cariKotaMobil($kota_asal,$kota_tujuan) as $value) {

								echo "<ul class='first'>
									<li class='trav'>
										<div class='bus-ic'>
											<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
										</div>
										</br></br></br></br></br>
										<div class='bus-txt'>
											
											<p style='color:white;'>$value[nama]</p>
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='dept'>
										<div class='bus-ic1'>
										<h4>$value[warna]</h4>
										</div>
										<div class='bus-txt1'>
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='arriv'>
										<div class'bus-txt2'>
											<h4>$value[tahun]</h4>
										</div>
									</li>
									
									<li class='seat'>
										<div class='bus-i'>
											<h4>$value[no_plat]</h4>
										</div>
										<div class='bus-txt3'>
											
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='kursi'>
										<div class='bus-i'>
											<h4>$value[kursi] kursi</h4>
										</div>
										<div class='bus-txt3'>
											
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='hr'>
										<div class='bus-txt4'>
											<h4>RP.$value[harga]</h4>
											<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
											<div class='clearfix'></div>
											</div>
											</li>
											<div class='clearfix'></div>
											</ul>"
											;
												$no++;
										}
								}
								else if ($nama != 'pilih' AND $kota_asal != null AND $kota_tujuan != null)
								{
									$no = 1;
								foreach ($do->cariNamaKotaMobil($nama,$kota_asal,$kota_tujuan) as $value) {

								echo "<ul class='first'>
									<li class='trav'>
										<div class='bus-ic'>
											<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
										</div>
										</br></br></br></br></br>
										<div class='bus-txt'>
											
											<p style='color:black;'>$value[nama]</p>
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='dept'>
										<div class='bus-ic1'>
										<h4>$value[warna]</h4>
										</div>
										<div class='bus-txt1'>
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='arriv'>
										<div class'bus-txt2'>
											<h4>$value[tahun]</h4>
										</div>
									</li>
								
									<li class='seat'>
										<div class='bus-i'>
											<h4>$value[no_plat]</h4>
										</div>
										<div class='bus-txt3'>
											
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='kursi'>
										<div class='bus-i'>
											<h4>$value[kursi] kursi</h4>
										</div>
										<div class='bus-txt3'>
											
										</div>
										<div class='clearfix'></div>
									</li>
									<li class='hr'>
										<div class='bus-txt4'>
											<h4>RP.$value[harga]</h4>
											<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
											<div class='clearfix'></div>
											</div>
											</li>
											<div class='clearfix'></div>
											</ul>"
											;
												$no++;
										}	
								}
										
						}
									?>
							</div>
						</div>
						<br>
						<!--- /bus-midd ---->

					 <!--- Merk Mobil---->

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

					<!--- Merek Mobil akhir---->

				<!-- footer-->

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