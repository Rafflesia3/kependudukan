<?php 
include "header.php";
include "menu.php"

 ?>
 <?php   
include "../koneksi/koneksi.php";
 ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php 
              $data_penduduk = mysqli_query($koneksi,"SELECT * FROM penduduk");
              $jumlah_penduduk = mysqli_num_rows($data_penduduk);  
               ?>
              <h3><?= "$jumlah_penduduk" ?></h3>

              <p>Data Penduduk</p>
            </div>
            <div class="icon">
              <i class="ion-android-contacts"></i>
            </div>
            <a href="data_penduduk.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php 
              $data_keluarga = mysqli_query($koneksi,"SELECT * FROM keluarga");
              $jumlah_keluarga = mysqli_num_rows($data_keluarga);

               ?>
              <h3><?= "$jumlah_keluarga"; ?><sup style="font-size: 20px"></sup></h3>

              <p>Data Keluarga</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
            <a href="data_keluarga.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php 
              $data_wilayah = mysqli_query($koneksi,"SELECT * FROM wilayah");
              $jumlah_wilayah = mysqli_num_rows($data_wilayah);
               ?>
              <h3><?= "$jumlah_wilayah"; ?></h3>

              <p>Data Wilayah</p>
            </div>
            <div class="icon">
              <i class="ion-android-globe"></i>
            </div>
            <a href="data_wilayah.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php 
              $data_kelahiran  = mysqli_query($koneksi,"SELECT * FROM kelahiran");
              $jumlah_kelahiran = mysqli_num_rows($data_kelahiran);
               ?>
              <h3><?= "$jumlah_kelahiran"; ?></h3>

              <p>Data Kelahiran</p>
            </div>
            <div class="icon">
              <i class="ion-ios-personadd"></i>
            </div>
            <a href="data_kelahiran.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
         
           
            <form role="form">
              <div class="box-body">
              
            </form>
          </div>
          <!-- /.box -->
          <div >
            <div >     
                <div >
                  <div >
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; Rafi Alwan Setyawan - 311810325 - 2020 <a href="http://almsaeedstudio.com">Admin</a>.</strong> Data Kependudukan
  </footer>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
