<?php 
include 'proses.php';
$do = new ClassMobil();
 ?>
<?php 


if (isset($_GET['hapus'])) {
	$id = $_GET['hapus'];
	$do->deleteMerek($id);
}else if (isset($_GET['hapusHarga'])) {
	$id = $_GET['hapusHarga'];
	$do->deleteHarga($id);
}else if (isset($_GET['hapusMobil'])) {
	$id = $_GET['hapusMobil'];
	$do->deleteMobil($id);
}else if(isset($_GET['hapusPesanan'])){
	$id = $_GET['hapusPesanan'];
	$do->deletePesanan($id);
}
	
 ?>

