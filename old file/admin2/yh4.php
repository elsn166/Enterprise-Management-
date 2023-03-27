<?php
session_start();
?>



<?php

$test = $_GET['var_PHP_data'];

echo  "subvalue  $test";
echo $_SESSION['mains'];

$_POST['mains']=$_SESSION['mains'];

$companyn=$_POST['mains'];




$_POST['building']=$_SESSION['building'];

$buildings=$_POST['building'];


$_POST['floors']=$_SESSION['floors'];

$floors=$_POST['floors'];





$_SESSION['rooms']=$test;



?>



<thead> 
    <tr>

        <!-- <th>Country</th>
        <th>Site Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Type</th>
        <th>Room</th>
        <th>Line Up</th>
        <th>Name of Asset</th>
        <th>Voltage Level</th>
        <th>Current Rating</th>
        <th>Short Circuit</th>
        <th>Risk/Capacity</th>
        <th>Frequency</th>
        <th>Installed Date</th> -->

        <th>Assets Name</th>
        <th>Assets Tag</th>
        <th>Obsolescence Status</th>
        <th>Under Contract</th>
        <th>Under Warranty</th>
    </tr>
</thead>


<tbody id="newone">


<tr>
    <?php 
    
    $servername = "localhost";
    $username = "vewon_website";
    $password = "vewon@2021";
    $dbname = "vewon_website";
    
    
    
    // $date1=date('Y/m/d');
    // $time1=date('h:i:sa');
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
                                                
    
    $sql = "SELECT name_of_asset, asset_no FROM register_asset WHERE site_name='$companyn' and building='$buildings' and floor_no='$floors' and room='$test' ";
    $result = $conn->query($sql);
    
    
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    
    // <td>' . $row["Country"] .'</td>
    // <td>' . $row["site_name"] .'</td>
    // <td>' . $row["address1"] .'</td>
    // <td>' . $row["city"] .'</td>
    // <td>' . $row["type1"] .'</td>
    // <td>' . $row["room"] .'</td>
    // <td>' . $row["line_up"] .'</td>
    // <td> '.$row["name_of_asset"] .'</td>
    // <td>' . $row["voltage_level"] .'</td>
    // <td>' . $row["current_rating"] .'</td>
    // <td>' . $row["short_circuit"] .'</td>
    // <td>' . $row["risk_capacity"] .'</td>
    // <td>' . $row["frequency"] .'</td>
    // <td>' . $row["installed_date"] .'</td>
    
    echo '<tr>
            
    <td> '.$row["name_of_asset"] .'</td>
    <td>' . $row["asset_no"] .'</td>
    <td><i class="fas fa-exclamation-circle text-danger"></i></td>
    <td><i class="fas fa-check-circle text-success"></i></td>
    <td><i class="fas fa-times-circle text-danger"></i></td>
    </tr>';
    
    
    
    
    
    }
    } else {
    echo "0 results";
    } 
    
    ?>
</tr>

</tbody>