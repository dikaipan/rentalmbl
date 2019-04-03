<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bayaran</title>
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
						        <a href="#" class="navbar-brand"><img src="img/logo.png" ></a>
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
						               <li><a href="tentangkami.html"><span class="glyphicon glyphicon-info-sign"></span> Tentang Kami</a></li> 
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

				<!-- Biaya tagihan -->

				<div class="selectroom">
					<div class="container-fluid">	
					<?php 

					$kodebooking = $_GET['kodebooking'];

									foreach ($do->infotagihan($kodebooking) as $value) {
				$totBayar=$value['harga']*$value['durasi'];
					echo "<div class='selectroom_top'>

						<div id='pilih'>
						<h2>Data Pemesanan Anda : </h2>
								<hr>
							</br>

							<table>
							<tr>
							<td>Nama Mobil </td>
							<td>&nbsp : $value[nama]</td>
							</tr>
							<tr>
							<td>Warna Mobil</td>
							<td>&nbsp : $value[warna]</td>
							</tr>
							<tr>
							<td>Tahun </td>
							<td>&nbsp : $value[tahun]</td>
							</tr>
							<tr>
							<td>No Polisi Mobil </td>
							<td>&nbsp : $value[no_plat]</td>
							</tr>
							<tr>
							<td>Banyak Kursi </td>
							<td>&nbsp : $value[kursi]</td>
							</tr>
							
							<tr>
							<td>Tanggal Pinjam </td>
							<td>&nbsp : $value[tgl_pinjam]</td>
							</tr>
							<tr>
							<td>Durasi </td>
							<td>&nbsp : $value[durasi]</td>
							</tr>
							<tr>
							<td>Nama Pemesan </td>
							<td>&nbsp : $value[nama_lengkap]</td>
							</tr>
							<tr>
							<td>Alamat Pemesan </td>
							<td>&nbsp : $value[alamat]</td>
							</tr>
							<tr>
							<td>Telepon </td>
							<td>&nbsp : $value[telepon]</td>
							</tr>
							<tr>
							<td>No KTP </td>
							<td>&nbsp : $value[no_ktp]</td>
							</tr>
							<tr>
							<td><b><i>Harga Total </i></b></td>
							<td><b><i>&nbsp : Rp. $totBayar</i></b></td>
							</tr>
						  </table>

						  <br>
						   <hr>
						  <h2>Silahkan melakukan pembayaran</h2><br>
						 
						  <img src='images/mandiri.png' height='20' width='30'> <b>Mandiri (900-5858-xxx)</b><br><br>
						  <img src='images/bca.png' height='20' width='30'> <b>BCA (900-5858-xxx)</b><br><br>
						  <img src='images/bri.png' height='20' width='30'> <b>BRI (900-5858-xxx)</b><br><br>
						  </div>
						  </div>";
						}

					 ?>
				<button type="button" class="btn-default pesanbtn" onclick="printContent('pilih')" style="margin-bottom: 20px;">Cetak</pilih>
				<style type="text/css">
					.b{
						background-color: #eaeaea;
						padding: 10px;

					}
				</style>


				 <script>
				function printContent(el){
				 var restorepage = document.body.innerHTML;
				 var printcontent = document.getElementById(el).innerHTML;
				 document.body.innerHTML = printcontent;
				 window.print();
				 document.body.innerHTML = restorepage;
				}
				</script>

					 </div>
				</div>

				<!--- Biaya tagihan akhir --->

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
														<input type="submit" value="SIG NIN" name="masuk">
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

			