<?php 
include 'proses.php';
$do = new ClassMobil();
 ?>
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
								Daftar Transaksi
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
													<th>Tahun</th>
													<th>Banyak Kursi</th>
													<th>No polisi</th>
													<th>Tanggal Pinjam</th>
													<th>Durasi (hari)</th>
													<th>Harga Harian</th>
													<th>Total Harga</th>
													<th>Aksi</th>
													
												</tr>
											</thead>

											<tbody>
											<?php 
											$no = 1;
											
											foreach ($do->semuainfotagihan() as $value) {
											$totBayar=$value['harga']*$value['durasi'];
										
											
												echo "<tr>
												<td>$no</td>
												<td>$value[nama_lengkap]</td>
												<td class='hidden-480'>$value[nama]
														
													</td> 
													<td>
														$value[warna]
													</td>
													<td>
														$value[tahun]
													</td>
													<td>$value[kursi]</td>
													<td>$value[no_plat]</td>
													<td>$value[tgl_pinjam]</td>
													<td>$value[durasi]</td>
													<td>$value[harga]</td>
													<td>$totBayar</td>
														<td>
														<div class='hidden-sm hidden-xs btn-group'>
															<a href='prosestambahhapus.php?hapusPesanan=$value[0]'>
															<button class='btn btn-xs btn-danger' name='hapus'>
																<i class='ace-icon fa fa-trash-o bigger-120'></i>
															</button>
															</a>
														</div>

														<div class='hidden-md hidden-lg'>
															<div class='inline pos-rel'>

																<ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>

																	<li>
																		<a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
																			<span class='red'>
																				<i class='ace-icon fa fa-trash-o bigger-120'></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>													
													</tr>";
												$no++;
											}
											?>
											</tbody>
										</table>
										
										
										<?php
										$link = mysqli_connect("localhost","root","","rentalmbl");
$query = "select totalbayar from reservasi"; 
$data  = mysqli_query($link, $query);
if (!$data)
{
    die('Invalid query: ' . mysqli_error());
}
else
{
    While ($row = mysqli_fetch_object($data))
    {
        $jumlah1      = $row->totalbayar;
       
        // 3. memasukan ke array dari setiap baris
        $jumlah1_ar[] = $jumlah1;
    }
    // 4. Menjumllahkan dan menampilkan data array
    $j_1 = array_sum($jumlah1_ar);

    echo "Total Seluruh Transaksi :" . $j_1 ;

}
										
										?>
										<a href="print.php">Cetak Data</a>
										
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

								<div class="hr hr-18 dotted hr-double"></div>

						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
