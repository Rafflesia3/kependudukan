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
  $NIK = $_GET['NIK'];
  $data = mysqli_query($koneksi,"SELECT * FROM keluarga WHERE NIK= '$NIK' ");
  while($d = mysqli_fetch_assoc($data) ) {
  ?>
     


<div class="container">
            <div class="panel panel-primary" style="width:750px;margin:0px auto">
              <div class="panel-heading"><font size="3" face="verdana"><b><center>Form Edit Keluarga</center></b></font></div>
              <div class="panel-body">
             <form method="POST" action="update_keluarga.php" enctype="multipart/form-data" data-toggle="validator" role="form">
                <div class="form-group">
                  <label for="exampleInputnama1">NIK</label>
                  <input class="form-control" name="NIK" type="text" placeholder="Enter NIK" value="<?= $d['NIK']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">No Keluarga</label>
                  <input class="form-control" name="NO_KELUARGA" type="text" placeholder="Enter No Keluarga" value="<?= $d['NO_KELUARGA']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Status</label>
                  <input class="form-control" name="STATUS" type="text" placeholder="Status" value="<?= $d['STATUS']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Jalan</label>
                  <input class="form-control" name="JALAN" type="text" placeholder="Enter Jalan" value="<?= $d['JALAN']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">RT</label>
                  <input class="form-control" name="RT" type="text" placeholder="Enter RT" value="<?= $d['RT']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">RW</label>
                  <input class="form-control" name="RW" type="text" placeholder="Enter RW" value="<?= $d['RW']; ?>">
                </div>

                  <div class="form-group">
                     <input type="submit" value="Simpan Data" name="btnSimpan"  class="btn btn-sm btn-primary"/>

                       <button class="btn btn-warning" type="Reset">
                          Reset
                      </button>
                  </div> 
                 <div class="text-left">
                  <a href="data_keluarga.php"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Data Keluarga <i class="fa fa-arrow-circle-left"></i></a>
                </div>
                </form>

              <?php }  ?>
              </div>
            </div> 
        </div>
</body>
</html>