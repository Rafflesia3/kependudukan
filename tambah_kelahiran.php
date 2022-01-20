
<?php
error_reporting(0); 
include "../koneksi/koneksi.php";
// membuka.sessi.logiin 
session_start();
$lv = $_SESSION['username'];
if($lv == ""){
?>

<?php
}
?>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="build/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="../tinymce/tinymce.min.js">
</script>
<script type="text/javascript">
  tinymce.init({
  selector: "textarea"
});
</script>

<?php 
  include "header.php";
  include "menu.php";
  include "fungsi_indotgl.php";
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
  <br>
        <div class="container">
            <div class="panel panel-primary" style="width:750px;margin:0px auto">
              <div class="panel-heading"><font size="3" face="verdana"><b><center>Form Input Wilayah</center></b></font></div>
              <div class="panel-body">
              <form method="post" action="input_wilayah.php" enctype="multipart/form-data" data-toggle="validator" role="form">
                <div class="form-group">
                  <label for="exampleInputnama1">Kode Pos</label>
                  <input class="form-control" name="KODE_POS" type="text" placeholder="Kode Pos">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Kelurahan</label>
                  <input class="form-control" name="KELURAHAN" type="text" placeholder="Kelurahan">
                </div>
            
                 <div class="form-group">
                  <label for="exampleInputnama1">Kecamatan</label>
                  <input class="form-control" name="KECAMATAN" type="text" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Kabupaten</label>
                  <input class="form-control" name="KABUPATEN" type="text" placeholder="Kabupaten">
                </div>
                <div class="form-group">
                  <label for="exampleInputnama1">Provinsi</label>
                  <input class="form-control" name="PROVINSI" type="text" placeholder="Provinsi">
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
              </div>
            </div>
        </div>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
        <script src="build/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
         <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker();
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>