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

<div class="container-fluid" style="padding: 0;">
<div class="limiter">
                        <div class="container-login100">
                            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                                <form class="login100-form validate-form" action="service_visit_register1.php" method="POST" >
                                    
                                    <?php
                                        if(isset($_SESSION['status'])){
                                    ?>
                                        <div class="container">
                                            <div class="alert alert-success" role="alert">
                                                <strong><?php echo $_SESSION['status']; ?></strong>
                                            </div>
                                        </div>
                                    <?php 
                                        unset($_SESSION['status']);
                                        }
                                    ?>
                                    
                                    <span class="login100-form-title p-b-33">
                                        Service Visit Form
                                    </span>
                                    
                                    <!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="email"       placeholder="Email">
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>
                
                                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                                        <input class="input100" type="password" name="pass" placeholder="Password">
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div> -->
                
                
                                    
                
                

                                     <!-- FOR Work Order -->
                                     <div class="wrap-input100 rs1">
                                        <input class="input100" type="text" name="work_order" value='<?php echo $d; ?>' id="work_order" placeholder="Work Order" required>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>


                                    <!-- FOR Date -->
                                    <div class="wrap-input100 rs1">
                                        <input class="input100" type="date" name="date" value='<?php echo $e; ?>' id="date" required>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>
                                    
                                    <!-- FOR service visit -->
                                    <div class="wrap-input100 rs1">
                                        <input class="input100" type="text" name="service_visit"  value='<?php echo $f; ?>' id="service_visit" placeholder="Service Visit Place" required>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>


                                    <!-- FOR contract -->
                                    <div class="wrap-input100 rs1">
                                        <input class="input100" type="text" name="contract" value='<?php echo $g; ?>' id="contract" placeholder="Contract No" required>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>


                                    <!-- FOR Primary Name -->
                                    <div class="wrap-input100 rs1">
                                        <input class="input100" type="text" name="primary_name" value='<?php echo $h; ?>' id="primary_name" placeholder="Primary Name" required>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>
                
                                        
                                    <!-- FOR Primary Name -->
                                    <!-- <div class="wrap-input100 rs1">-->
                                    <!--     <label for="upload_file" class="p-2">Upload File</label>-->
                                    <!--    <input class="input100" type="file" name="upload_file" value='<?php echo $i; ?>' id="upload_file" required>-->
                                    <!--    <span class="focus-input100-1"></span>-->
                                    <!--    <span class="focus-input100-2"></span>-->
                                    <!--</div> -->
                                
                                
                                
                                    
                                    
                                     <div class="wrap-input100 rs1">
                                        <select class="input100" name="status" value='<?php echo $j; ?>' id="status" required>
                                            
                                            
                                            <option value='<?php echo $j; ?>' selected><?php echo $j; ?></option>
                                            <option value="pending">Pending</option>
                                            <option value="completed">Completed</option>
                                            
                                            
                                        </select>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>
                
                                
                                
                                     
                                    <div >
                                        <button type="submit"  class="login100-form-btn">
                                            Update
                                        </button>
                                    </div>
                                    </form>
                
                                    <!-- <div class="text-center p-t-45 p-b-4">
                                        <span class="txt1">
                                            Forgot
                                        </span>
                
                                        <a href="#" class="txt2 hov1">
                                            Username / Password?
                                        </a>
                                    </div> -->
                
                                    <!-- <div class="text-center">
                                        <span class="txt1">
                                            Create an account?
                                        </span>
                
                                        <a href="#" class="txt2 hov1">
                                            Sign up
                                        </a>
                                    </div> -->
                                
                            </div>
                        </div>
                    </div>
                    </div>
<script>
    
    $(document).ready(function() {
            $('#btn1').click(function() 
            
            
            {

                var tus = document.getElementById("work_order").value;
                var tus1 = $(this).closest('tr').find('td:eq(1)').text();
                // var tus2 = $(this).closest('tr').find('td:eq(2)').text();
                // var tus3 = $(this).closest('tr').find('td:eq(3)').text();
                // var tus4 = $(this).closest('tr').find('td:eq(4)').text();
  

                // alert(tus);
                $.ajax({
                    url: 'service_visit_asset.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        // $('#dataTable').html(data);
                        console.log(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });




            });
        });

</script>
    