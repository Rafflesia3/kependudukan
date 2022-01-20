<?php 
include "../koneksi/koneksi.php";

$nama         = $_POST['nama'];
$email         = $_POST['email'];
$username         = $_POST['username'];
$password        = $_POST['password'];
             

mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$email','$username','$password')");

header("location: ../admin/pengguna.php?pesan=input");
 ?>