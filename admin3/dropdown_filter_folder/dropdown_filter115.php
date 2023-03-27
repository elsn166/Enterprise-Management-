
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="css/site-overview.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                <!-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> -->
                                <tbody>
                                    <tr>
                                        <?php 

                                        $servername = "localhost";
                                        $username = "starking_vewon";
                                        $password = "vewon@2021";
                                        $dbname = "starking_vewon";



                                        // $date1=date('Y/m/d');
                                        // $time1=date('h:i:sa');


                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                        }

                                                                                    

                                        $sql = "SELECT name_of_asset, asset_no FROM register_asset WHERE site_name='def company' AND building=2 AND floor_no=4";
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

                                        </tr>';





                                        }
                                        } else {
                                        echo "0 results";
                                        } 

                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>