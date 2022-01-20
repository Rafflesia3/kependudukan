<?php
include "../koneksi/koneksi.php";

$NIK  = $_GET['NIK'];
mysqli_query($koneksi,"DELETE FROM keluarga WHERE NIK= '$NIK'");

header("location: ../admin/data_keluarga.php?pesan=hapus");


?>