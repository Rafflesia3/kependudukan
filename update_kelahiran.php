<?php 
include "../koneksi/koneksi.php";

$KODE_POS     = $_POST['KODE_POS'];
$KELURAHAN    = $_POST['KELURAHAN'];
$KECAMATAN    = $_POST['KECAMATAN'];
$KABUPATEN    = $_POST['KABUPATEN'];
$PROVINSI     = $_POST['PROVINSI'];

mysqli_query($koneksi,"UPDATE wilayah SET KODE_POS= '$KODE_POS', KELURAHAN= '$KELURAHAN', KECAMATAN= '$KECAMATAN', KABUPATEN= '$KABUPATEN', PROVINSI= '$PROVINSI' WHERE KODE_POS= '$KODE_POS'");

header("location: ../admin/data_wilayah.php?pesan=update");


 ?>