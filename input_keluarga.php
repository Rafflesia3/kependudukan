<?php 
include "../koneksi/koneksi.php";

$NIK         	= $_POST['NIK'];
$NO_KELUARGA    = $_POST['NO_KELUARGA'];
$STATUS         = $_POST['STATUS'];
$JALAN     		= $_POST['JALAN'];
$RT             = $_POST['RT'];
$RW             = $_POST['RW'];

mysqli_query($koneksi, "INSERT INTO keluarga VALUES('$NIK','$NO_KELUARGA','$STATUS','$JALAN','$RT','$RW')");

header("location: ../admin/data_keluarga.php?pesan=input");
 ?>