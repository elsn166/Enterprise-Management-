<?php


$conn = mysqli_connect('localhost', 'vewon_website', 'vewon@2021','vewon_website');

// get the post records
$txtWorkorder = $_POST['work_order'];
$txtDate = $_POST['date'];
$txtServicevisit = $_POST['service_visit'];
$txtContract = $_POST['contract'];
$txtPrimaryname = $_POST['primary_name'];
// $txtUploadfile = $_POST['upload_file'];



    $img = $_FILES['upload_file']['name'];
    $img_loc=$_FILES['upload_file']['tmp_name'];
    $img_folder ="pdf_folder/";

    move_uploaded_file($img_loc,$img_folder.$img);
    
    $re="vewongroups.com/admin/login-form/pdf_folder/".$img;


$sql = "INSERT INTO service_register_asset (work_order, date1, service_visit, contract1, primary_name, pdf)
VALUES ('$txtWorkorder', '$txtDate', '$txtServicevisit', '$txtContract', '$txtPrimaryname', '$re')";


$sql_run = mysqli_query($conn, $sql);


if($sql_run){
  $_SESSION['status'] = "Data inserted Successfully";
  header('location: service_visit_form.php');
}
else{
  echo "Something Went Wrong";
}


if ($sql === TRUE) {
  // header("Location: service_visit_form.php");
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();



?>

























