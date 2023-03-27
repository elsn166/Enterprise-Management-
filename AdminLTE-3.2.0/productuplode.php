<!DOCTYPE html>
<?php 
session_start(); 
$type1= $_SESSION["type"];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product_uplode</title>

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
  <style>
      <style type="text/css">
	h2 {
    text-align: center;
    font-size: 30px;
	}
	img ,#getImage,#getImage1,#getImage2 {
    width: ;
    height: ;  
    border: 1px solid #a1a1a1;  
    opacity:0.9;
	}
	 {
    text-align: center;
	}
    img.blur {
    -webkit-filter: blur(1px);
	filter: blur(-1px);
  filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='8');

}
.center {
  height:100%;
  display:flex;
  align-items:center;
  justify-content:center;

}
body {
  margin:0px;
  height:100vh;
  background: #1283da;
}
.form-input {
  width:350px;
  padding:20px;
  background:#fff;
  box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
              3px 3px 7px rgba(94, 104, 121, 0.377);
}
.form-input img {
  width:100%;
  display:none;
  margin-bottom:30px;
}
.form-input input {
  display:none;
}

.form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#1172c2;
  color:#fff;
  font-size:15px;
  font-family:"Open Sans",sans-serif;
  text-transform:Uppercase;
  font-weight:600;
  border-radius:5px;
  cursor:pointer;
}.edit{
    color:white;
}label{
    background:#fff; 
    display: table;
    color: #fff;
    font-family: serif;

     }
input[type="file"] {
    display: none;
}
  </style>
</head>
<!-- Preloader -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require 'left-menu.php'; ?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['productname'];
$image=$_POST['image'];
$category=$_POST['category'];
$price=$_POST['price'];

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
$sql = "INSERT INTO products (productname,category,price,image)VALUES('$name','$category','$price','$imagenew')";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='productuplode.php?&success=Product Uplode Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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
            <h1>Product Uplode</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Uplode</li>
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
                <h3 class="card-title">Product Uplode</h3>
                <!-- Button trigger modal -->
              </div>
            <form method="post" action=""  enctype="multipart/form-data">
                <div class="card-body">
                    <div class="col-3 mb-5">
                        <div class="card ">
                             <label type="button" class="float-left my-2 mx-2 py-1 px-2"> 
                             <img src="dist/img/upload.png" width="100%" height="200" id="file-ip-preview" id="getImage2"/>
                             <input type="file" class="edit" name="image" id="fifth_name"  onchange="showPreview(event)" >
                           </label>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                  <input type="text" class="form-control my-2" name="productname"   placeholder="Enter product Name">
                                   <input type="text" class="form-control my-2" name="category"  placeholder="Enter Category Name">
                                   <input type="text" class="form-control my-2" name="price" placeholder="Enter Price Name">
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
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
<script>
    function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
       
</script>
</body>
</html>
