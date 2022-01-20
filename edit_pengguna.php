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
  $id = $_GET['id'];
  $data = mysqli_query($koneksi,"SELECT * FROM user WHERE id= '$id' ");
  while($d = mysqli_fetch_assoc($data) ) {
  ?>
     


<div class="container">
            <div class="panel panel-primary" style="width:750px;margin:0px auto">
              <div class="panel-heading"><font size="3" face="verdana"><b><center>Form Edit pengguna</center></b></font></div>
              <div class="panel-body">
             <form method="POST" action="updete_pengguna.php" enctype="multipart/form-data" data-toggle="validator" role="form">
                <div class="form-group">
                  <label for="exampleInputnama1">nama</label>
                  <input type="hidden" name="id" value="<?= $d['id']; ?>">
                  <input class="form-control" name="nama" type="text" placeholder="Enter nama" value="<?= $d['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">email</label>
                  <input class="form-control" name="email" type="text" placeholder="Enter email" value="<?= $d['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">username</label>
                  <input class="form-control" name="username" type="text" placeholder="username" value="<?= $d['username']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">password</label>
                  <input class="form-control" name="password" type="text" placeholder="password" value="<?= $d['password']; ?>">
                </div>
              
                </div>
                  <div class="form-group">
                     <input type="submit" value="Simpan Data" name="btnSimpan"  class="btn btn-sm btn-primary"/>

                       <button class="btn btn-warning" type="Reset">
                          Reset
                      </button>
                  </div> 
                 <div class="text-left">
                  <a href="pengguna.php"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Data pengguna <i class="fa fa-arrow-circle-left"></i></a>
                </div>
                </form>

              <?php }  ?>
              </div>
            </div> 
        </div>
</body>
</html>