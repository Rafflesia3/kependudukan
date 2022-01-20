<?php 
include "../koneksi/koneksi.php";

$id   = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username    = $_POST['username'];
$password  = $_POST['password'];

mysqli_query($koneksi,"UPDATE user SET nama= '$nama', email= '$email', username= '$username', password= '$password' WHERE id= '$id'");

header("location: ../admin/pengguna.php?pesan=update");


 ?>