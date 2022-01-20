<?php 
include "../koneksi/koneksi.php";

$KTP           	= $_POST['KTP'];
$NAMA         	= $_POST['NAMA'];
$JK       		= $_POST['JK'];
$AGAMA          = $_POST['AGAMA'];
$PENDIDIKAN     = $_POST['PENDIDIKAN'];
$PEKERJAAN      = $_POST['PEKERJAAN'];
$PENGHASILAN    = $_POST['PENGHASILAN'];

mysqli_query($koneksi,"UPDATE penduduk SET KTP= '$KTP', NAMA= '$NAMA', JK= '$JK', AGAMA= '$AGAMA', PENDIDIKAN= '$PENDIDIKAN', PEKERJAAN= '$PEKERJAAN', PENGHASILAN= '$PENGHASILAN' WHERE KTP= '$KTP'");

header("location: ../admin/data_penduduk.php?pesan=update");


 ?>