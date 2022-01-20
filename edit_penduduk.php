<?php
include "header.php";
include "menu.php"


?>

<div class="content-wrapper" style="min-height: 1136px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 <h1>
       
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dasboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
  <br>


  <?php 
  include "../koneksi/koneksi.php";
  $KTP = $_GET['KTP'];
  $data = mysqli_query($koneksi,"SELECT * FROM penduduk WHERE KTP= '$KTP' ");
  while($d = mysqli_fetch_assoc($data) ) {
  ?>
     


<div class="container">
            <div class="panel panel-primary" style="width:750px;margin:0px auto">
              <div class="panel-heading"><font size="3" face="verdana"><b><center>Form Edit Penduduk</center></b></font></div>
              <div class="panel-body">
             <form method="POST" action="update_penduduk.php" enctype="multipart/form-data" data-toggle="validator" role="form">
                <div class="form-group">
                  <label for="exampleInputnama1">KTP</label>
                  <input class="form-control" name="KTP" type="text" placeholder="Enter KTP" value="<?= $d['KTP']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Nama</label>
                  <input class="form-control" name="NAMA" type="text" placeholder="Enter NAMA" value="<?= $d['NAMA']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Jenis Kelamin</label>
                  <input class="form-control" name="JK" type="text" placeholder="Enter JK" value="<?= $d['JK']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Agama</label>
                  <input class="form-control" name="AGAMA" type="text" placeholder="Enter AGAMA" value="<?= $d['AGAMA']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Pendidikan</label>
                  <input class="form-control" name="PENDIDIKAN" type="text" placeholder="Enter PENDIDIKAN" value="<?= $d['PENDIDIKAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Pekerjaan</label>
                  <input class="form-control" name="PEKERJAAN" type="text" placeholder="Enter PEKERJAAN" value="<?= $d['PEKERJAAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Penghasilan</label>
                  <input class="form-control" name="PENGHASILAN" type="text" placeholder="Enter PENGHASILAN" value="<?= $d['PENGHASILAN']; ?>">
                </div>

                  <div class="form-group">
                     <input type="submit" value="Simpan Data" name="btnSimpan"  class="btn btn-sm btn-primary"/>

                       <button class="btn btn-warning" type="Reset">
                          Reset
                      </button>
                  </div>
                 <div class="text-left">
                  <a href="data_penduduk.php"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Data Penduduk <i class="fa fa-arrow-circle-left"></i></a>
                </div>
                </form>

              <?php }  ?>
              </div>
            </div> 
        </div>
</body>
</html>