<?php 
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php");
}
include ("../koneksi.php");
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "tes";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$now = date('d F Y - g:i a');
$bulan = $_POST['bulan'];
$area = $_POST['area'];
$fmbm = $_POST['fmbm'];
$lokasi = $_POST['lokasi'];
$uraian = $_POST['uraian'];
$periode = $_POST['periode'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:./inputdata.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$rand.'_'.$filename);

		$koneksi->query("INSERT INTO kegiatan(id_data, tanggal_input, bulan, area, fmbm, lokasi, uraian, periode, foto)    
		values('$_POST[id_data]','$now','$_POST[bulan]','$_POST[area]','$_POST[fmbm]','$_POST[lokasi]','$_POST[uraian]','$_POST[periode]','$xx')");

		

		header("location:./inputdata.php?alert=berhasil");
	}else{
		header("location:./inputdata.php?alert=gagal");
	}
}

?>