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
  $KODE_POS = $_GET['KODE_POS'];
  $data = mysqli_query($koneksi,"SELECT * FROM wilayah WHERE KODE_POS= '$KODE_POS' ");
  while($d = mysqli_fetch_assoc($data) ) {
  ?>
     


<div class="container">
            <div class="panel panel-primary" style="width:750px;margin:0px auto">
              <div class="panel-heading"><font size="3" face="verdana"><b><center>Form Edit Wilayah</center></b></font></div>
              <div class="panel-body">
             <form method="POST" action="update_wilayah.php" enctype="multipart/form-data" data-toggle="validator" role="form">
                <div class="form-group">
                  <label for="exampleInputnama1">Kode Pos</label>
                  <input class="form-control" name="KODE_POS" type="text" placeholder="Enter Kode Pos" value="<?= $d['KODE_POS']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Kelurahan</label>
                  <input class="form-control" name="KELURAHAN" type="text" placeholder="Enter Kelurahan" value="<?= $d['KELURAHAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Kecamatan</label>
                  <input class="form-control" name="KECAMATAN" type="text" placeholder="Enter Kecamatan" value="<?= $d['KECAMATAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Kabupaten</label>
                  <input class="form-control" name="KABUPATEN" type="text" placeholder="Enter Kabupaten" value="<?= $d['KABUPATEN']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Provinsi</label>
                  <input class="form-control" name="PROVINSI" type="text" placeholder="Enter Provinsi" value="<?= $d['PROVINSI']; ?>">
                </div>
                

                  <div class="form-group">
                     <input type="submit" value="Simpan Data" name="btnSimpan"  class="btn btn-sm btn-primary"/>

                       <button class="btn btn-warning" type="Reset">
                          Reset
                      </button>
                  </div> 
                 <div class="text-left">
                  <a href="data_wilayah.php"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Data Wilayah <i class="fa fa-arrow-circle-left"></i></a>
                </div>
                </form>

              <?php }  ?>
              </div>
            </div> 
        </div>
</body>
</html>