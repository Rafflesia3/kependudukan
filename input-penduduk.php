<?php 
include "../koneksi/koneksi.php";

$KTP           	= $_POST['KTP'];
$NAMA         	= $_POST['NAMA'];
$JK       		= $_POST['JK'];
$AGAMA          = $_POST['AGAMA'];
$PENDIDIKAN     = $_POST['PENDIDIKAN'];
$PEKERJAAN      = $_POST['PEKERJAAN'];
$PENGHASILAN    = $_POST['PENGHASILAN'];

mysqli_query($koneksi, "INSERT INTO penduduk VALUES('$KTP','$NAMA','$JK','$AGAMA','$PENDIDIKAN','$PEKERJAAN','$PENGHASILAN')");

header("location: ../admin/data_penduduk.php?pesan=input");
 ?>