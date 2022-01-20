      
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Kependudukan</title>
  <script language="JavaScript">
  function tampilkanjam()
  {
  var waktu = new Date();
  var jam = waktu.getHours();
  var menit = waktu.getMinutes();
  var detik = waktu.getSeconds();
  var teksjam = new String();

  if ( menit <= 9 )
  menit = "0" + menit;
  if ( detik <= 9 )
  detik = "0" + detik;

  teksjam = jam + " : " + menit + " : " + detik;
  tempatjam.innerHTML = teksjam;
  setTimeout ("tampilkanjam()",1000);
  }
  window.onload = tampilkanjam
  </script>

      <div class="user-panel">
        <div class="pull-left image">
          <img src="../gambar/rafi.jpg" class="img-circle" alt="user-image">
        </div>
        <div class="pull-left info">
          <p>Rafi Alwan Setyawan</p>
          <a href="#"><i class="fa fa-circle text-success"></i>on</a>
        </div>
      </div>
      <!-- search form -->
      <center>
      <ul class="sidebar-menu">
        <li>
          <b style="color:white;padding-left:12px;"><?php echo date('d F Y '); ?>
          
          <b id="tempatjam" style="color:white;padding-left:5px;"></b>
          </b>
        </li> 
      </ul>
      </center>     
      <br>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="">
          <a href="konten.php">
            <i class="fa fa-dashboard" aria-hidden="true"></i></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
        
        <li>
          <a href="data_penduduk.php">
            <i class="fa fa-user-secret" aria-hidden="true"></i></i> <span>Penduduk</span>
          </a>
        </li>
        <li>
         
        <li class="">
          <a href="data_keluarga.php">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Keluarga</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
           <li class="">
          <a href="data_wilayah.php">
            <i class="fa fa-edit"></i> <span>Wilayah</span>
            <span class="pull-right-container">
            </span>
          </a>
          </li>
        <li class="#">
          <a href="data_kelahiran.php">
            <i class="fa fa-user"></i>
            <span>Kelahiran</span>
            <span class="pull-right-container">
            </span>
          </a>
          </li>
        <li class="header">Setting</li>
         <li>
          <a href="pengguna.php">
            <i class="fa fa-users" aria-hidden="true"></i><span>pengguna</span>
            
          </a>
        </li>
         <li>
          <a href="logout.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i></i> <span>LogOut</span>
            
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
