<?php
include "../koneksi/koneksi.php";

$KODE_POS  = $_GET['KODE_POS'];
mysqli_query($koneksi,"DELETE FROM wilayah WHERE KODE_POS= '$KODE_POS'");

header("location: ../admin/data_wilayah.php?pesan=hapus");


?>