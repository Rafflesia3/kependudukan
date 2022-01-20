<?php 
include "../koneksi/koneksi.php";

$NIK         	= $_POST['NIK'];
$NO_KELUARGA    = $_POST['NO_KELUARGA'];
$STATUS         = $_POST['STATUS'];
$JALAN     		= $_POST['JALAN'];
$RT             = $_POST['RT'];
$RW             = $_POST['RW'];

mysqli_query($koneksi,"UPDATE keluarga SET NIK= '$NIK', NO_KELUARGA= '$NO_KELUARGA', STATUS= '$STATUS', JALAN= '$JALAN', RT= '$RT', RW= '$RW' WHERE NIK= '$NIK'");

header("location: ../admin/data_keluarga.php?pesan=update");


 ?>