<?php
    session_start();
?>


<?php
    $arun = $_POST['postname'];
    $arun1 = $_POST['dateva'];
    $arun2 = $_POST['timeva'];
    $arun3 = $_POST['mobva'];
    $arun4 = $_POST['maiva'];
    $arun5 = $_POST['amounts'];
    $amt1 = $_GET['amt'];


    $_SESSION["user"] = $arun;
    $_SESSION["date11"] = $arun1;
    $_SESSION["time11"] = $arun2;
    $_SESSION["mobb"]=$arun3;
    $_SESSION["mai"]=$arun4;
    $_SESSION["amounts"]=$arun5;
    $_SESSION["price"]=$amt1;

    echo $_SESSION["user"];
    echo $_SESSION["date11"];
    echo $_SESSION["time11"];
  //$amt2=$_SESSION["user"];
   $amt1=$_SESSION["price"];
   echo "<script> alert ('$amt1'); </script>";
?>