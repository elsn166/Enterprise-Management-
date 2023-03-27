<?php 
    //Convert php data into json data
    header('Content-Type: application/json');

    // For Database Connectivity
    $servername = "localhost";
    $username = "vewon_website";
    $password = "vewon@2021";
    $dbname = "vewon_website";


    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the particular column data from the pie_chart database
    $query = "SELECT * FROM pie_chart ORDER BY year_of_difference desc";

    $result = $conn -> query($query);
    $data = array();
    foreach ($result as $row){
        $data[] = $row;
    }

    $result -> close();
    $mysqli -> close();

?>