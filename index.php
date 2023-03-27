<?php
session_start();

if($_SESSION['fullname']!=''){
    
    
                                              $servername ="localhost";
$username ="u309950752_vewon";
$password ="Vewon@752";
$dbname ="u309950752_vewon";
    
    $_POST['emails']=$_SESSION['fullname'];
    $emails=$_POST['emails'];
    
    // $date1=date('Y/m/d');
    // $time1=date('h:i:sa');
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
    
    $sql = "SELECT person_type1 FROM register_form WHERE full_name='$emails'  ";
    $result = $conn->query($sql);
    
    
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    
            if ($row['person_type1']=='management'){
                
                ?>
                
    <script>
        
        window.location.replace("../index2.php");
        
        
    </script>            
                
                <?php
                
                
            }
            
            else if($row['person_type1']=='employee'){
                
                
                ?>
                
                <script>
        
        window.location.replace("../index3.php");
        
        
    </script>            
                
                <?php
            }
    
    else if ($row['person_type1']=='customer'){
        
                ?>
                
                <script>
        
        window.location.replace("../index4.php");
        
        
    </script>            
                
                <?php
        
    }
        
            
            
            
        }
        
        
        
    }
    
}



    else{
                ?>
                
                <script>
        
        window.location.replace("../index716.php");
        
        
    </script>            
                
                <?php
    
    }

?>
