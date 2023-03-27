<!DOCTYPE html>
<?php 
session_start(); 
$type1= $_SESSION["type"];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User_form</title>

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
<?php
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$number=$_POST['number'];
$bloodgroup=$_POST['bloodgroup'];
$location=$_POST['location'];
$dob=$_POST['dob'];
$image=$_POST['image'];
$email=$_POST['email'];
$password1=$_POST['password'];
$roll=$_POST['roll'];


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
$imagenew=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "INSERT INTO user_form (username,number,bloodgroup,location,dob,image)VALUES('$name','$number','$bloodgroup','$location','$dob','$imagenew')";


if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='user_form.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$sql1 = "INSERT INTO login_form (login_email,login_password,person_type1)VALUES('$email','$password1','$roll')";

if ($conn->query($sql1) === TRUE){
    echo "<script type='text/javascript'>window.location='user_form.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
} 

$conn->close();

} 

?>

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
              <li class="breadcrumb-item active">User Form</li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Details</h3>
                <!-- Button trigger modal -->
              </div>
            <form method="post" action=""  enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                <?php
                if(($type1)=='admin' ){?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="Password" class="form-control" id="pws" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Roll</label>
                      <select class="custom-select" id="roll" name="roll">
                        <option selected>Choose Roll</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                     </select>
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Number</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Blood Group</label>
                      <select class="custom-select" id="bloodgroup" name="bloodgroup">
                        <option selected>Choose Blood Group</option>
                        <option value="A+">(A+)</option>
                        <option value="A-">(A-)</option>
                        <option value="B+">(B+)</option>
                        <option value="B-">(B-)</option>
                        <option value="O+">(O+)</option>
                        <option value="O-">(O-)</option>
                        <option value="AB+">(AB+)</option>
                        <option value="AB-">(AB-)</option>
                    </select>
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Date of birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter DOB">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <input type="file"  class="form-control" id="image" name="image">
                    </div>
                  </div>
                  <?php } else if(($type1)=='user' ) { ?>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Number</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Blood Group</label>
                      <select class="custom-select" id="bloodgroup" name="bloodgroup">
                        <option selected>Choose Blood Group</option>
                        <option value="A+">(A+)</option>
                        <option value="A-">(A-)</option>
                        <option value="B+">(B+)</option>
                        <option value="B-">(B-)</option>
                        <option value="O+">(O+)</option>
                        <option value="O-">(O-)</option>
                        <option value="AB+">(AB+)</option>
                        <option value="AB-">(AB-)</option>
                    </select>
                    </div>
                    <div class="form-group col-6">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Date of birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter DOB">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <input type="file"  class="form-control" id="image" name="image">
                    </div>
                  </div>
                  <?php } ?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
    $("#example1").DataTable({
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
