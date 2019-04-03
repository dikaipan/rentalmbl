<?php 
include 'proses.php';
$do = new ClassMobil();
 ?>
  <a href="print.php">Cetak Data</a>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">

					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">

							<div class="ace-settings-box clearfix" id="ace-settings-box">
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Daftar Pemesan
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Customer</th>
													<th>Nama Mobil</th>
													<th>Warna</th>
													<th>No polisi</th>
													<th>Tgl Pinjam</th>
													<th>Durasi (hari)</th>
													<th>Harga Harian</th>
													<th>Total Harga</th>
													
												</tr>
											</thead>

											<tbody>
											<?php 
											$no = 1;
											
											foreach ($do->semuainfotagihan() as $value) {
											$totBayar=$value['harga']*$value['durasi'];
												
												echo "<tr>
												<td>$no</td>
												<td>$value[12]</td>
												<td class='hidden-480'>$value[nama]</td> 
													<td>$value[warna]</td>
													<td>$value[no_plat]</td>
													<td>$value[tgl_pinjam]</td>
													<td>$value[durasi]</td>
													<td>$value[harga]</td>
													<td>$totBayar</td>													
													</tr>";
												$no++;
															
											}		
											
		//=================================================================================================================================


/* 2. Mengambil dan menampilkan data */
$link = mysqli_connect("localhost","root","","rentalmobil");
$query = "select totalbayar from reservasi"; // limit 5 dibatasi cuma 5 hasil 
$data  = mysqli_query($link, $query);
if (!$data)
{
    die('Invalid query: ' . mysqli_error());
}
else
{
    //$no = 1;
   // echo "<table ><tr><th>No</th><th>Jumlah1</th></tr>";
    While ($row = mysqli_fetch_object($data))
    {
        $jumlah1      = $row->totalbayar;
       
        // 3. memasukan ke array dari setiap baris
        $jumlah1_ar[] = $jumlah1;

        //echo "<tr><td>" . $no . "</td><td>" . $jumlah1 . "</td></tr>";
       // $no++;
    }
    // 4. Menjumllahkan dan menampilkan data array
    $j_1 = array_sum($jumlah1_ar);

    echo "Total Seluruh Transaksi :" . $j_1 ;
   // echo "</table>";
}

//========================================================================================================					
												
								
											?>
											
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

								<div class="hr hr-18 dotted hr-double"></div>

						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
