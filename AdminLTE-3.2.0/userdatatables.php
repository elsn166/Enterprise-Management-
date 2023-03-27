<!DOCTYPE html>
<?php 
session_start(); 
$type1= $_SESSION["type"];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User database| DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!-- Preloader -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require 'left-menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card-info">
              <!-- /.card-header -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Details</h3>  
                  <!-- <button type="button" class="btn btn-primary float-right">
                  Large button
                  </button> -->
                <!--  <a href="studentedit1.php" class="btn-sm btn-primary float-right"type="button">Add New</a>-->
              </div>
              <!-- Button trigger modal -->
<!-- Modal -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S No</th>
                    <th>User Name</th>
                    <th>Number</th>
                    <th>Blood Group</th>
                    <th>Location</th>
                    <th>DOB</th>
                    <th>Image</th>
                    <?php  if(($type1)=="admin" ) { ?>
                    <th>Action</th>
                    <?php } ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php


$servername ="127.0.0.1:3306";
$username ="u309950752_vewon";
$password ="Vewon@752";
$dbname ="u309950752_vewon";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from user_form";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
 $fgs=   $row1['id'];
echo'
              <tr>
                  <td> '.++$counter.'</td>
                  <td>' .$row1['username'].'</td> 
                  <td>' .$row1['number'].'</td>
                  <td>' .$row1['bloodgroup'].'</td>
                  <td>' .$row1['location'].'</td> 
                  <td>' .$row1['dob'].'</td>  
                 <td> <img src="data:image/=jpeg;base64,'.base64_encode ($row1['image']).'" width="100%" height="100" id="file-ip-preview" id="getImage"/> </td>';?>
                 <?php  if(($type1)=="admin" ) { ?>
                                  <td>
                  <a href="user_edit.php?action=edit&amp; id=<?php echo $row1['id'] ?>"><span class="btn btn-success"><i class="fas fa-users"></i></span></a> &nbsp;
                  <a href="user_delete.php?action=edit&amp; id=<?php echo $row1['id'] ?>"><span class="btn btn-success"><i class="fas fa-trash"></i></span></a> &nbsp;
                 </td> 
                          <?php  }}} ?>
                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php require 'footer.php'; ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="dist/js/demo.js"></script>-->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
