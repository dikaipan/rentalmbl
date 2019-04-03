<?php
include 'proses.php';
$do = new ClassMobil();
ob_start(); 
?>
<html>
<head> 
 <title>Cetak PDF</title> 
 <style>
 table {
 border-collapse:collapse; 
 table-layout:fixed;
 width: 630px;
 } 
 table td {
 word-wrap:break-word;
 width: 16%;
 }  
 </style>
 </head>

 <body>  
 <h1 style="text-align: center;">Data Customer</h1>
 
 <?php
 //Fungsi nama hari format Indonesia
 function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}
 
//Fungsi Tanggal-bulan-tahun format Indonesia
function tgl_indo($tanggal){
	$bulan = array (1 =>   
		'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember');
	$pecahkan = explode('-', $tanggal);

 	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
} 
	echo "Hari/Tanggal : ".hari_ini()." / ".tgl_indo(date('Y-m-d')); 
	echo "<br/>";
	echo "<br/>";

 ?>   
 
 <table border="1" width="586">
 <tr >  
 <th width="20"  height="34" style="text-align: center;">No</th>  
 <th width="130" height="34" style="text-align: center;">Customer</th>
 <th width="130" height="34" style="text-align: center;">Nama Mobil</th> 
 <th width="9"  height="34" style="text-align: center;">Warna</th> 
  <th width="20" height="34" style="text-align: center;">No polisi</th>
   <th width="120" height="34" style="text-align: center;">Tgl Pinjam</th>
    <th width="20" height="34" style="text-align: center;">Durasi (hari)</th>
	    <th width="130" height="34" style="text-align: center;">Harga Harian</th>
	 <th width="130" height="34" style="text-align: center;">Total Harga</th>
 </tr>
 <?php 
											$no = 1;											
											foreach ($do->semuainfotagihan() as $value) {
											$totBayar=$value['harga']*$value['durasi'];
												echo "<tr>
												<td>$no</td>
												<td>$value[nama_lengkap]</td>
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
											
											
											
											?>
 
 
 
 </table>
 <?php
 //=================================================================================================================================
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
        $jumlah1_ar[] = $jumlah1;
    }

    $j_1 = array_sum($jumlah1_ar);
	
	echo " " ;
    echo "Total Seluruh Transaksi :" . $j_1 ;

}
//========================================================================================================				
 ?>
</body>
 </html>
 <?php
 $html = ob_get_contents();
 ob_end_clean(); 
 require_once('html2pdf/html2pdf.class.php');
 $pdf = new HTML2PDF('L','A4','en');
 $pdf->WriteHTML($html);
 $pdf->Output('Data Customer.pdf', 'E');
 ?>