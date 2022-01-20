<?php
include "../koneksi/koneksi.php";

$KTP  = $_GET['KTP'];
mysqli_query($koneksi,"DELETE FROM penduduk WHERE KTP= '$KTP'");

header("location: ../admin/data_penduduk.php?pesan=hapus");


?>