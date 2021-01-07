<?php
include '../koneksi.php';
// menyimpan data id kedalam variabel
$id_data   = $_GET['id_data'];
// query SQL untuk insert data
$query="DELETE from data where id_data='$id_data'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location: ./data.php");
?>