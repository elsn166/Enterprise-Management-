<?php

$servername ="127.0.0.1:3306";
$username ="u309950752_vewon";
$password ="Vewon@752";
$dbname ="u309950752_vewon";

$id=$_GET['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM user_form where id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>window.location='userdatatables.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>