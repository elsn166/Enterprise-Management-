<?php
session_start(); 

$conn = mysqli_connect('localhost', 'vewon_website', 'vewon@2021','vewon_website');



$username = $_POST['email'];  
$password = $_POST['password'];  
// $personType = $_POST['person_type1'];
  

// CHANGING INTO THE SESSION VARIABLES
$_SESSION["email"] = $_POST['email'];
$_SESSION["password"] = $password;
// $_SESSION["person_type1"] = $personType;


// $Email=$_SESSION['email'];
// $_POST['email'] = $_SESSION['email'];
// $Temail = $_POST['email'];


  //to prevent from mysqli injection  
  $username = stripcslashes($username);  
  $password = stripcslashes($password);  
  $username = mysqli_real_escape_string($conn, $username);  
  $password = mysqli_real_escape_string($conn, $password);  

  
  $sql = "SELECT * FROM login_form WHERE login_email = '$username' AND login_password = '$password'"; 

  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  

  // IF EMAIL AND PASSWORD IS GOT, IT IS REDIRECT TO THE RESPECTIVE ADMIN-PANEL
  if($count == 1){ 
      
     if($row["person_type1"] == 'customer'){
        echo "<script>window.location.assign('/admin/index.php')</script>";  
     }elseif($row["person_type1"] == 'partner'){
        echo "<script>window.location.assign('/admin2/index.php')</script>";  
     }else{
        echo "<script>window.location.assign('/admin3/index.php')</script>";
     }
  }
  
  else{  
    echo "<script>alert('Incorrect Email or Password.. Try Again')</script>";
    echo "<script>window.location.assign('/login.php')</script>";  
  }     

// (-- MESSAGE --) NOW WE HAVE TO SET THE LOGIN SESSION WHEN THE USER CLICK A BACK BUTTON AFTER LOGOUT



             
    
    $sql1 = "SELECT full_name FROM register_form WHERE email='$username'  ";
    $result1 = $conn->query($sql1);
    
    
    
    if ($result1->num_rows > 0) {
        // output data of each row
        while($row1 = $result1->fetch_assoc()) {
    
    
    // echo $row1['full_name'];
    
    
    $fullname= $row1['full_name'];
    $_SESSION['fullname']=$fullname;
    
    // $Email = $row['email'];
    // $_SESSION['email'] = $Email;
    
    
    
    }
    } else {
    echo "0 results";
    } 
    




$conn->close();



?>
