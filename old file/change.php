<?php



$conn = mysqli_connect('localhost', 'vewon_website', 'vewon@2021','vewon_website');

// get the post records
$txtName = $_POST['fullname'];
$txtEmail = $_POST['email'];
$txtPassword = $_POST['password'];
$txtLocation = $_POST['location'];
$txtPersontype = $_POST['person-type'];




//CHECKING IF ANY EMAIL IS ALREADY EXISTS IN THE DATABASE
if(isset($_POST['register-button'])){
  $txtEmail = $_POST['email'];
  $checkquery = "SELECT * FROM register_form WHERE email = '$txtEmail'";
  $result = mysqli_query($conn, $checkquery);

  //CHECK THE DATABASE ROW ONE BY ONE
  if(mysqli_num_rows($result) > 0){
    echo "<script> window.location.assign('/register.php');
    window.alert('Sorry..This Email address has already taken..! Try Some new one') </script>";
  } else{

    //INSERT THE VALUES FROM THE INPUTS TO THE REGISTER DATABASE
    $sql = "INSERT INTO register_form (full_name, email, password1, location1, person_type1)
    VALUES ('$txtName', '$txtEmail', '$txtPassword', '$txtLocation', '$txtPersontype')";

    //GET THE PERSON TYPE INTO THE LOGIN DATABASE FOR VALIDATION 
    $login = "INSERT INTO login_form (login_email, login_password, person_type1) VALUES ('$txtEmail', '$txtPassword', '$txtPersontype')";
  //  echo "successfully saved";
  }
}





//FOR LOGIN FUNCTIONALITY FOR LOGIN TABLE 
if ($conn->query($sql) === TRUE) {
  echo "<script> window.location.assign('/login.php');
        window.alert('Your account is Sucessfully Registered..! Moving to Login..') </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



// FOR SQL DATABASE TABLE NO : 2
if ($conn->query($login) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $login . "<br>" . $conn->error;
}




$conn->close();



?>

























