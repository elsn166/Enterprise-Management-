<?php

$test = $_GET['var_PHP_data'];
$test1=$_GET['dta1'];
$test2=$_GET['dta2'];
$test3=$_GET['dta3'];
$test4=$_GET['dta4'];
  
    $servername = "localhost";
    $username = "vewon_website";
    $password = "vewon@2021";
    $dbname = "vewon_website";
                    
                    
    $date1=date('Y/m/d');
    $time1=date('h:i:sa');
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    
      
    
    $sql = "SELECT * FROM service_register_asset WHERE work_order='$test' AND date1='$test1' AND service_visit='$test2' AND contract1='$test3' AND primary_name='$test4'";
    $result = $conn->query($sql);
    
    
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    
            // $addr1=$row["addr_upload1"];
            // $bigc=$row["addr_upload2"];
    
            // $qil=$row["qualification"];
            // $langp=$row["lang_prof"];
            
            $d=$row["work_order"];
            $e=$row["date1"];
            $f=$row["service_visit"];
            $g=$row["contract1"];
            $h=$row["primary_name"];
            $i=$row["pdf"];
            $j=$row["status"];
        
                // $m=$row["city"];
                //     $n=$row["other_city"];    $ctn=$row["vehicle"];
                //         $o=$row["duty_pref"];
                //             $p=$row["salary_exp"];
                //                 $qj=$row["immediate_join"];
                //                     $r=$row["particular_date"];
                //                         $ss=$row["reli_duty_pref"];

        }
    } else {
        echo "0 results";
    } 

?>




<!DOCTYPE html>
<html>
<head>
    <title>Upload Data to DB</title>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');


    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", Sans-serif;
    }
    .container{
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .form-container{
        border-radius: 1rem;
        background: #f7f7f7;
        width: 500px;
        height: auto;
        padding: 2rem 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    input[type=text], input[type=date], input[type=number] {
        outline: none;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    input[type=submit]{
        width: 100%;
        margin: 1rem auto;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.9rem 2.5rem;
        background: #3d8bfd;
        outline: none;
        border: none;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
    }
    
    
</style>
</head>
<body>
    
    <div class="container">
        <div class="form-container">
            <form action="dbupload.php" method="POST" enctype="multipart/form-data">
                <label for="name" class="label">Enter the Work Order:</label>
                <input type="text" id="work" name="work" value='<?php echo $d; ?>' placeholder="Enter Work Order" required>
                <br>
                <label for="date" class="label">Enter the date:</label>
                <input type="date" id="date" name="date" value='<?php echo $e; ?>' placeholder="Enter date" required>
                <br>
                <label for="visit" class="label">Enter the Service Visit:</label>
                <input type="text" id="visit" name="visit" value='<?php echo $f; ?>' placeholder="Enter Service Visit" required>
                <br>
                <label for="contract" class="label">Enter the Contract:</label>
                <input type="number" id="contract" name="contract" value='<?php echo $g; ?>' placeholder="Enter Contract" required>
                <br>
                <label for="pname" class="label">Enter Primary Name:</label>
                <input type="text" id="pname" name="pname" value='<?php echo $h; ?>' placeholder="Enter Primary Name" required>
                <br>
                <input type="submit" value="Submit">
        </form>
        </div>
    </div>
</body>    
</html>