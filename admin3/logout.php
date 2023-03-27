<?php   
session_start();  
unset($_SESSION['email']);  
session_destroy();  
 echo ("<script LANGUAGE='JavaScript'>
   
    window.location.href='../login.php';
    </script>");   
?>  