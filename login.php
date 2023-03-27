<!DOCTYPE html>
<?php 
session_start(); 

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Vewon Group</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/login.css">
  <!-- <link rel="stylesheet" href="styles/header-10.css">
  <link rel="stylesheet" href="styles/style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
  <?php
if(isset($_POST['submit']))
{
$Username1=$_POST['email'];
$Password1=$_POST['password']; 

$servername ="127.0.0.1:3306";
$username ="u309950752_vewon";
$password ="Vewon@752";
$dbname ="u309950752_vewon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
$sql= "SELECT * from login_form where login_email='$Username1' AND login_password ='$Password1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row1 = $result->fetch_assoc()){
    $type=$row1['person_type1'];
    $_SESSION["type"]=$type;
    if($type =='user'){
    echo "<script type='text/javascript'>window.location='/AdminLTE-3.2.0/user_form.php?&success=Account Login Successfully';</script>";
    }
    else  if($type =='admin'){
 echo "<script type='text/javascript'>window.location='/AdminLTE-3.2.0/user_form.php?&success=Account Login Successfully';</script>";
    }
    else{
      echo "<h1>  not valid</h1>";
    }
}}

}
?>  
    <div class="container">
        <div class="card bg-light" style="margin-top: 6em;">
            <article class="card-body mx-auto" style="min-width: 5rem;">
                <h4 class="card-title mt-3 text-center">Login</h4>
                <p class="text-center">Get started with your free account</p>
                <!-- <ul class="list-unstyled d-flex align-center justify-content-center">
                    <li class="px-2">
                        <a href="#"><img src="img/facebook.png" alt="Facebook" width="45"></a>
                    </li>

                    <li class="px-2">
                        <a href="#"><img src="img/linkedin.png" alt="Linkedin" width="45"></a>
                    </li>

                    <li class="px-2">
                        <a href="#"><img src="img/apple.png" alt="Apple" width="45"></a>
                    </li>
                </ul>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p> -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <!-- <span class="input-group-text"> <i class="fa fa-envelope"></i> </span> -->
                        </div>
                        <input name="email" id="email"  class="form-control " placeholder="Email" type="email" required autofocus>
                    </div> 
                

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <!-- <span class="input-group-text"> <i class="fa fa-lock"></i> </span> -->
                        </div>
                        <input class="form-control"   name="password" id="password" placeholder="Password" type="password" required>
                    </div> 


                    
                     <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Login  </button>
                    </div>
                     <!-- form-group// -->      
                    <p class="text-center">Do you have an account?<a href="register.php"> Register Here</a></p>                                                                 
                    <p class="text-center"><a href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Back to Home</a></p>  
                </form>
            </article>
        </div> <!-- card.// -->
        
    </div> 
        <!--container end.//-->
    
    <br><br>

    <!-- <footer class="">  
        <div class="footer-content">
            <ul class="link-col list-unstyled ml-3">
                <li class="px-3">
                    <a href="#" class="text-dark">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="text-dark">Privacy Notice</a>
                </li>
            </ul>

            <div class="footer-img">
                <img src="img/vewonlogo3.png" alt="vewon Group Logo" width="100">
            </div>
        </div>


        <div class="bottom-footer">
            <h6 class="text-dark" style="font-size: 13px;">2021 Vewon Group. All Rights Reserved.</h6>
        </div> 
    </footer> -->




    <script src="bootstrap4/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</html>