<?php
//error_reporting(0);
session_start();

$Name =$_POST['form_name'];
$Email_id =$_POST['form_email'];
$Mobile_no =$_POST['form_phone'];
$course=$_POST['form_msg'];
$to="yuvaraj@rdegi.com";

$servername = "localhost";
$username = "vewon_website";
$password = "vewon@2021";
$dbname = "vewon_website";
global $Name;
global $Mobile_no;
global $Email_id;
global $course;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vewon_contact_form (username, mobile, mail, course)
VALUES ('$Name', '$Mobile_no', '$Email_id', '$course' )";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
  $header = "From: arunkumar15ece022@gmail.com.com\r\n";
//$header .= 'Cc: mailto:yuvarajseenipandi29@gmail.com' . "\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";
$subject="Enquiry Form";
$message ='<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Vewon Group Enquiry</title>
</head>
<body style="margin:0; padding:0">
<div style="width:600px; margin:0 auto; border-top:27px solid #FF3333; border-bottom:27px solid #FF3333; border-left:27px solid #F0F0F0; border-right:27px solid #F0F0F0; padding-bottom:10px;">
	
    
<div class="detail">
<h1 style="font-size:16px; text-align:center; margin-top:30px; text-decoration:underline; color:#FF3333;"><strong>Vewon Group Enquiry Email</strong></h1>
  <table border="1" align="center" cellpadding="10" cellspacing="0" width="80%">
	<tr>
		<td  style="font-size:15px;width:50%;">Name :</td>
		<td >'.$Name.'</td>
	</tr>
                                <tr>
		<td  style="font-size:15px;width:50%;">Mobile No. :</td>
		<td >'.$Mobile_no.'</td>
	</tr>
	<tr>
		<td  style="font-size:15px;width:50%;">Email :</td>
		<td >'.$Email_id.'</td>
	</tr>
		<tr>
		<td  style="font-size:15px;width:50%;">course :</td>
		<td >'.$course.'</td>
	</tr>
</table><br>
</div>
    
    
    
      </div>
		</div>
        <table>
        <tr>
	        <td height="27" align="center" valign="top" bgcolor="#f0f0f0">&nbsp;</td>
          </tr>
          </table>
     
</body>
</html>
';
$status = mail($to, $subject, $message, $header);
// echo $status;
if($status)
{
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mail Sent Succesfully! Our Team Will Contact You Soon');
    window.location.href='about_us.php';
    </script>");
} else {
       echo "<script>alert('Message could not be sent');</script>";
}
} 

$conn->close();
   

?>