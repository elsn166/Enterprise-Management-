<?php

session_start();
   
?>
<?php

$amt=$_GET['price'];
// echo "<script>alert ('$amt'); </script>";
?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var totalAmount="<?php echo $amt;?>"
//alert(totalAmount);
var product_id = "1";
var options ={
"key": "rzp_test_1YKYVgSaIFgQJP",
"amount": totalAmount*100, // 2000 paise = INR 20
"name": "Manufacturing Site",
"description": "Manufacturing Site Payment!",
"image":"img/rdegi.jpg",
"handler": function (response){
$.ajax({
url: 'payment_success.php',
type: 'post',
dataType: 'json',
data: {
razorpay_payment_id: response.razorpay_payment_id , totalAmount:totalAmount ,product_id : product_id,
}, 
success:function (msg) {
   window.location.replace("https://inventory.staging-rdegi.com/success.php");
}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
</script>

