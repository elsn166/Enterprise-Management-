<?php
//error_reporting(0);
session_start();

   $Name =$_POST['name'];
   $Mobile_no =$_POST['mobile'];
   $Email_id =$_POST['email'];
   $address=$_POST['address'];
   $order_id=$_POST['orderid'];
   $dish=$_POST['dish'];
   $price=$_POST['price'];
  $to="arun@rdegi.com";

$_SESSION['name']=$_POST['name'];
$_SESSION['mobile']=$_POST['mobile'];
$_SESSION['email']=$_POST['email'];
$_SESSION['address']=$_POST['address'];
$_SESSION['order']=$_POST['orderid'];
$_SESSION['dish']=$_POST['dish'];
$_SESSION['price']=$_POST['price'];




//   echo "New record created successfully";
  $header = "From: arunkumar15ece@gmail.com.com\r\n";
// $header .= 'Cc: mailto: ' . "\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";
$subject="Enquiry Form India Biriyani";
$message ='<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>WMS</title>
</head>
<body style="margin:0; padding:0">
<div style="width:600px; margin:0 auto; border-top:27px solid #FF3333; border-bottom:27px solid #FF3333; border-left:27px solid #F0F0F0; border-right:27px solid #F0F0F0; padding-bottom:10px;">
	
    
    <div class="detail">
    	<h1 style="font-size:16px; text-align:center; margin-top:30px; text-decoration:underline; color:#FF3333;"><strong>Dish Enquiry Email</strong></h1>
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
    				<td  style="font-size:15px;width:50%;">Address :</td>
    				<td >'.$address.'</td>
    			</tr>
    			
    			<tr>
    				<td  style="font-size:15px;width:50%;">Order_id:</td>
    				<td >'.$order_id.'</td>
    			</tr>
    			
    				<tr>
    				<td  style="font-size:15px;width:50%;">Selected Dish :</td>
    				<td >'.$dish.'</td>
    			</tr>
    			
    				<tr>
    				<td  style="font-size:15px;width:50%;">Price :</td>
    				<td >'.$price.'</td>
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
echo $status;
if($status)
{
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mail Sent Succesfully! Our Team Will Contact You Soon');
    window.location.href='payscript.php';
    </script>");
} else {
       echo "<script>alert('Message could not be sent');</script>";
}


// header("Location: http://innovateforyou.com/learning/contact.php"); 

$conn->close();

//header("Location: https://innovateforyou.com/admin/index.php");
   

  
exit; 
?>