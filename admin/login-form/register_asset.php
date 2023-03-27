<?php
session_start();

$conn = mysqli_connect('localhost', 'vewon_website', 'vewon@2021','vewon_website');



// $_SESSION['email'] = $Email;
$_POST['email'] = $_SESSION['email'];
$Temail = $_SESSION['email'];


echo "<script>alert($Temail);</script>";

// get the post records
$txtCountry = $_POST['country'];
$txtSitename = $_POST['site_name'];
$txtAddress = $_POST['address'];
$txtCity = $_POST['city'];
$txtType = $_POST['type'];
$txtBuilding1 = $_POST['building'];
$txtFloor1 = $_POST['floor'];
$txtroom1 = $_POST['room'];
$txtLineup = $_POST['line_up'];
$txtNameofasset = $_POST['name_of_asset'];
$txtAssetNo = $_POST['asset_no'];
$txtQuantityNo = $_POST['quantity'];
$txtVoltagelevel = $_POST['voltage_level'];
$txtCurrentrating = $_POST['current_rating'];
$txtShortcircuit = $_POST['short_circuit'];
$txtRiskcapacity = $_POST['risk_capacity'];
$txtFrequency = $_POST['frequency'];
$txtinstalleddate = $_POST['installed-date'];
$txtexpired = $_POST['expired'];

$txtBuilding= "Building $txtBuilding1";
$txtFloor= "Floor $txtFloor1";
$txtroom= "Room $txtroom1";



// CHANGING THE DATE FORMAT FROM YYYY-MM-DD TO DD-MM-YYYY
// $txtinstalleddate =  date('d-m-Y', strtotime('$txttempinstalleddate'));



//Get the current year and Extract the year from the User Input
$currentDate = date("Y");
$userDate = date("Y", strtotime($txtinstalleddate));
$diff_old = $currentDate - $userDate;


$sql = "INSERT INTO register_asset (email, country, site_name, address1, city, type1, building, floor_no, room, line_up, name_of_asset, asset_no,quantity, voltage_level, current_rating, short_circuit, risk_capacity, frequency, installed_date, diff_old, end_date,temp, pressure, rpm)
VALUES ('$Temail', '$txtCountry', '$txtSitename', '$txtAddress', '$txtCity', '$txtType', '$txtBuilding', '$txtFloor', '$txtroom', '$txtLineup', '$txtNameofasset', '$txtAssetNo', '$txtQuantityNo', '$txtVoltagelevel', '$txtCurrentrating', '$txtShortcircuit', '$txtRiskcapacity', '$txtFrequency', '$txtinstalleddate', '$diff_old', '$txtexpired', 'no', 'no', 'no')";

// $tableTwo = "INSERT INTO year_calc (name_of_asset, installed_date, diff_old) VALUES ('$txtNameofasset','$txtinstalleddate', '$diff_old')";


$sql_run = mysqli_query($conn, $sql);

if($sql_run){
  $_SESSION['status'] = "Data inserted Successfully";
  header('location: form.php');
}
else{
  echo "Something Went Wrong";
}




//DATE RANGE FILTER
  $conn = mysqli_connect("localhost", "root", "", "vewon_register_form");
	
	$post_at = "";
	$post_at_to_date = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"]["post_at"])) {			
		$post_at = $_POST["search"]["post_at"];
		list($fid,$fim,$fiy) = explode("-",$post_at);
		
		$post_at_todate = date('Y-m-d');
		if(!empty($_POST["search"]["post_at_to_date"])) {
			$post_at_to_date = $_POST["search"]["post_at_to_date"];
			list($tid,$tim,$tiy) = explode("-",$_POST["search"]["post_at_to_date"]);
			$post_at_todate = "$tiy-$tim-$tid";
		}
		
		$queryCondition .= "WHERE post_at BETWEEN '$fiy-$fim-$fid' AND '" . $post_at_todate . "'";
	}

  $dateRange = "SELECT * from register_asset " . $queryCondition . " ORDER BY post_at desc";
	$result = mysqli_query($conn,$dateRange);







// ASSIGNING THE CURRENT TO VARIABLE
$currentdate= date('Y');


//EXTRACT THE YEAR FROM THE DATABASE DATE
$date = date('Y', strtotime($txtinstalleddate));


// CALCULTE THE DIFFERENCE BETWEEN TWO YEARS
$calculated_difference = ((int)$currentdate - (int)$date);

echo "The difference between two years is $calculated_difference";


// CREATING THE NEW TABLE FOR PIE-CHART
$sql1 = "INSERT INTO pie_chart (asset_name, year_of_difference) VALUES 
('$txtNameofasset', '$calculated_difference')";





// FOR SQL DATABASE TABLE NO : 1
//CHECKING THE VARIABLE $sql IS EQUALTO TRUE
if ($sql === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



// FOR SQL DATABASE TABLE NO : 2
if ($conn->query($sql1) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}


//FOR DATABASE NUMBER 2
// if ($conn->query($tableTwo) === TRUE) {
// 	echo "New record created successfully";
//   } else {
// 	echo "Error: " . $tableTwo . "<br>" . $conn->error;
//   }


$conn->close();



?>

























