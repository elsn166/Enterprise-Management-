<?php 
    $connect = mysqli_connect("localhost", "root", "", "vewon_register_form") or die("Connection Failed");

    if(!empty($_POST['save'])){
        $username = $_POST['un'];
        $password = $_POST['pw'];
        $query = "SELECT * FROM login_form WHERE login_email = '$username' AND login_password = '$password'";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            echo "Login Done";
        } else{
            echo "Login not Done";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>
    <form action="test_login.php" method="POST">
        <input type="email" name="un" id="un" placeholder="email"> <br>
        <input type="password" name="pw" id="pw" placeholder="password"> <br>
        <input type="button" name="save" value="Submit">
    </form>
</body>
</html>