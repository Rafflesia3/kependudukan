<?php 
include "../koneksi/koneksi.php";

$KODE_POS     = $_POST['KODE_POS'];
$KELURAHAN    = $_POST['KELURAHAN'];
$KECAMATAN    = $_POST['KECAMATAN'];
$KABUPATEN    = $_POST['KABUPATEN'];
$PROVINSI     = $_POST['PROVINSI'];

mysqli_query($koneksi, "INSERT INTO wilayah VALUES('$KODE_POS','$KELURAHAN','$KECAMATAN','$KABUPATEN','$PROVINSI')");

header("location: ../admin/data_wilayah.php?pesan=input");
 ?>