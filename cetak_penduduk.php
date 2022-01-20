<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cetak Data Penduduk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>KTP</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>Penghasilan</th>
                  <th>Action</th>
                </tr>
                <?php 
                  include "../koneksi/koneksi.php";
                  $data = mysqli_query($koneksi,"SELECT * FROM penduduk");
                  while($d = mysqli_fetch_assoc($data) ) {
                   ?>
                  <tr>
                    <td><?= $d['KTP']; ?></td>
                    <td><?= $d['NAMA']; ?></td>
                    <td><?= $d['JK']; ?></td>
                    <td><?= $d['AGAMA']; ?></td>
                    <td><?= $d['PENDIDIKAN']; ?></td>
                    <td><?= $d['PEKERJAAN']; ?></td>
                    <td><?= $d['PENGHASILAN']; ?></td>
                    
                    <td>
                      </tr>
                    <?php }  ?>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
