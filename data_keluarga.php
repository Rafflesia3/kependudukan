<?php 
include "header.php";
include "menu.php";

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kependudukan | Data Keluarga</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

     <?php 
  if(isset($_GET['pesan']) ) {
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
      echo "<script>
          alert('Data Berhasil di tambahkan!');
          </script>
      ";
    }else if($pesan == "update"){
      echo "<script>
          alert('Data berhasil di ubah!');
          </script>
      ";
    }else if($pesan == "hapus"){
      echo "<script>
          alert('Data Berhasil di hapus!');
          </script>
      ";
    }
  }
 ?>
<div class="wrapper">

  <header class="main-header">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kependudukan
        <small>Data Keluarga
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">table</a></li>
        <li class="active">Data Keluarga</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Keluarga</h3>
              <br>
              <br>
              <a class='btn btn-primary' href='tambah_keluarga.php'><i class='fa fa-plus'></i> Tambah Data</a>
            <a class="btn btn-danger" href="#" ><i class="fa fa-print"></i> Export xls</a>
            <a class="btn btn-danger" href="../admin/cetak_keluarga.php" target="blank"><i class="fa fa-print"></i> Print Pdf</a>
            </div>
           
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>No Keluarga</th>
                  <th>Status</th>
                  <th>Jalan</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Action</th>
                </tr>
                <?php 
                  include "../koneksi/koneksi.php";
                  $data = mysqli_query($koneksi,"SELECT * FROM keluarga");
                  while($d = mysqli_fetch_assoc($data) ) {
                   ?>
                  <tr>
                    <td><?= $d['NIK']; ?></td>
                    <td><?= $d['NO_KELUARGA']; ?></td>
                    <td><?= $d['STATUS']; ?></td>
                    <td><?= $d['JALAN']; ?></td>
                    <td><?= $d['RT']; ?></td>
                    <td><?= $d['RW']; ?></td>
                    
                    <td>
                <div class="text-center" width="160px">
                   <a href="edit_keluarga.php?NIK=<?php echo $d["NIK"];?>" class="btn btn-xs btn-success" title='Edit'> <i class="fa fa-edit"></i>Edit
                   </a> 
                  <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="hapus_keluarga.php?NIK=<?= $d["NIK"];?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash" ></i> Hapus
                  </a>
                </div>
                </td>
                  </tr>
                <?php } ?>
                </thead>
                <tbody>

                </tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>     <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.2.1
    </div>
    <strong>Copyright &copy; 2021 <a href="http://almsaeedstudio.com">Rafi Alwan Setyawan - 311810325</a>.</strong> All rights
    reserved.
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
