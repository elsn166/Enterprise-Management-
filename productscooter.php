<!DOCTYPE html>
<?php

session_start();
   
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Our Parts|All Parts</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit= 0" />
    

    <!-- BOOTSTRAP OFFLINE CDN -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
       

    <!-- FONT AWESOME ONLINE CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- SLICK CAROUSEL ONLINE CDN -->
    <link rel="stylesheet" href="slick/slick.css" />
    <!-- SPLIDE SLIDER LINK -->
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="splide/dist/css/themes/splide-sea-green.min.css">

    <!-- animate css link -->
    <link rel="stylesheet" href="animate_css/animate.css">

    <link rel="stylesheet" href="slick/slick-theme.css" />


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <!-- Footer Styling CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/header-10.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style type="text/css">
      @media only screen and (min-width: 940px) {
        .toggle_bar {
          display: none !important; 
        } 
      }



      /************ OFFCANVAS STYLING ************/
      /* .offcanvas{
        width: 34% !important;
      } */


      @media only screen and (min-width: 940px) and (max-width: 1400px) {
        .offcanvas {
          display: none !important; 
        } 
      } 

      @media only screen and (min-width: 480px) and (max-width: 580px) {
        .offcanvas {
          width: 40% !important; 
        } 
      }


      /* Scrollbar-effect------- */
      #accordian::-webkit-scrollbar {
        width: 5px;
        height: 8px;
      }

      #accordian::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: #e4e4e4;
      }
      #accordian::-webkit-scrollbar-thumb {
        background: #0089ff;
        border-radius: 10px;
        transition: 0.5s;
      }
      #accordian::-webkit-scrollbar-thumb:hover {
        background: #d5b14c;
        transition: 0.5s;
      }
      #accordian ul li a{
        color: #222121;
        text-decoration: none;
        font-size: 15px;
        display: block;
        padding: 12px 10px;
        transition: all 0.15s;
        position: relative;
        border-radius: 3px;
      }
      
      .filter{
         filter: brightness(0.7);
      }

      /* #accordian>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul>li>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a{
        background-color: #a8d4fb;
        color: #0089ff;
        box-shadow: 0px 1px 2px rgba(0, 137, 255, 0.2);
      } */

      #accordian>ul>li>ul,
      #accordian>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul>li>ul {
        display: none;
      }


      #accordian>ul>li.active>ul.show-dropdown,
      #accordian>ul>li>ul>li.active>ul.show-dropdown,
      #accordian>ul>li>ul>li>ul>li.active>ul.show-dropdown,
      #accordian>ul>li>ul>li>ul>li>ul>li.active>ul.show-dropdown {
        display: block;
      }

      #accordian>ul>li>ul,
      #accordian>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul>li>ul {
        padding-left: 0px;
      }

      #accordian a:not(:only-child):after {
        content: "\f105";
        position: absolute;
        right: 20px;
        top: 14px;
        font-size: 15px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
      }

      #accordian .active>a:not(:only-child):after {
        transform: rotate(90deg);
      }

      .font{
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
      }
      .font-child{
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
      }
      .search-bar{
        padding: 10px; 
        outline: none;
        background: #f3f3f3;
        border: 1px solid gray;
        border-radius: 20px;
        width: 200px;
        font-size: 1rem;
        font-family: "Arial", sans-serif;
      }

      .over-lay{
        position: absolute; 
        bottom: 0; 
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); /* Black see-through */
        color: #f1f1f1; 
        width: 100%;
        transition: .5s ease;
        /* opacity:0; */
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
      }
      .bg_content_card{
        background: url(https://www.ceres.org/sites/default/files/2018-04/RenewableEnergyBanner_1.jpg);
        background-size: cover;
        background-position: center;
        margin: 4rem 0;
        background-repeat: no-repeat;
        border-radius: 5px;
        width: auto;
        height: 82vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .detail_card{
        width: 350px;
        height: 300px;
        background: #fff;
        margin: 0 1rem;
        border-radius: 5px;
        /* position: absolute;
        right: 5rem; */
        padding: 4.8rem 2rem;
        font-size: 1.3rem;
        text-align: center;
      }

      @media only screen and (max-width: 480px){
        .detail_card{
          right: 0;
        }
      }

      .big_banner{
        background-image: url(https://d10lvax23vl53t.cloudfront.net/images/Article_Images/ImageForArticle_2253_16244395316852393.jpg);
        background-position: center;
        background-size: cover;
        margin: 4rem 0;
        width: 100%;
        height: 100vh;
        filter: brightness(0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        background-repeat: no-repeat;
      }

      .banner__text{
        text-align: center;
      }

      .banner__text h4{
        color: white;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 590;
        text-align: center;
      }

      .banner__text span{
        color: white;
        font-size: 1.5rem;
        font-family: 'Montserrat', sans-serif;
        font-weight: 650;
        text-align: center;
      }
        @media only screen and (min-width:1400px){
        .site-header__start {
          margin-left:-80px !important; 
        }
        }
.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top:0;
    left:100%;
    margin-top:-6px;
}
/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
} 
.nav__item li a{
    padding: 12px 5px;
    font-size:16px;
}
h5{
    font-size:22px !important;
    font:none !important;
}.bgcolor{
  background:#C5C5C5;
}

      body {
        opacity: 0;
        transition: opacity 1s;
      }

      .container-loaded {
        opacity: 1;
      }
    </style>

    </head>
    <body>
        <!-- Navigation-->
<?php require'header.php'?>
        <!-- Header-->
        
        
        


            <header class="bg-dark py-3"id="scooter">
            <div class="container ">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder mb-2">Buy a Scooters</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With Our Website</p>
                </div>
            </div>
        </header>
                <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5 fade-out-left">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<?php
$servername ="127.0.0.1:3306";
$username ="u309950752_vewon";
$password ="Vewon@752";
$dbname ="u309950752_vewon";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from products  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) 
  {
   $productname=$row['productname'];
   $price=$row['price'];
   $image = $row['image'];
   $id = $row['id'];
  // echo $price ;
  echo'
                    <div class="col-lg-3 col-xl-3 col-md-6 col-12 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img src="data:image/=jpeg;base64,'.base64_encode ($image).'" class=" px-1 py-1" width="100%" height="200" id="file-ip-3-preview" id="getImage2"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-capitalize">'.$productname.'</h5>
                                    <!-- Product price-->
                                     <h6 class="fw-bolder  mt-1"> ₹'.$price.'</h6>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                 <div class="text-center"> <a class="btn btn-outline-dark  mt-auto " href="payscript1.php?&price='.$price.'">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    ';}}
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
       <footer class="footer-48201">
      
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-4 pr-md-5">
          <a class="footer-site-logo d-block mb-4"><img src="img/rdegi.jpg" alt="Vewon Group Logo" width="200"></a>
          <p class="footer-text">Rdegi is a fastly growing IT company. We offer technology based solutions to clients.</p><br>
          <p class="footer-text"><b>Email:</b> info@rdegi.com</p>
          <p class="footer-text"><b>Phone:</b> +91 7845298544</p><br>
        <ul class="social list-unstyled">
          <li><a href="#"><span class="icon-facebook"></span></a></li>
          <li><a href="#"><span class="icon-twitter"></span></a></li>
          <li><a href="#"><span class="icon-linkedin"></span></a></li>
          <li><a href="#"><span class="icon-instagram"></span></a></li>
          <li><a href="#"><span class="icon-youtube-play"></span></a></li>
        </ul>
      </div>
       <div class="col-md mobile-top">
        <ul class="list-unstyled nav-links">
        <li><p class="title">PRODUCTS</p></li>
        <li><a class="dropdown-item" href="https://smartdeal.staging-rdegi.com/">Smart Deal</a></li>
        <li><a class="dropdown-item" href="https://snowaqua.staging-rdegi.com/">Snowaqua</a></li>
        <li><a class="dropdown-item" href="http://ecomm.staging-rdegi.com/">Winner Oil</a></li>
        <li><a class="dropdown-item" href="https://residency.staging-rdegi.com">Hotel Management</a></li>
        <li><a class="dropdown-item" href="http://optimaheat.rdegi.com/">Optima Heat</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
            <li><p class="title">Solutions</p></li>
          <li><a class="dropdown-item" href="http://dekoev.rdegi.com/">DekhoEV</a></li>
        <li><a class="dropdown-item" href="https://construction.rdegi.com/">Brahmaa Construction</a></li>
        <li><a class="dropdown-item" href="https://finance.staging-rdegi.com/login.php">Banking</a></li>
        <li><a class="dropdown-item" href="https://goldloan.staging-rdegi.com/login.php">Gold Loan</a></li>
        </ul>
      </div>
      <div class="col-md">
        <!--<ul class="list-unstyled nav-links">-->
        <!--  <li><p class="title">SERVICES</p></li>-->
        <!--  <li><a href="service.php">Installation and Maintenance</a></li>-->
        <!--  <li><a href="service.php">Portal based Solutions</a></li>-->
        <!--  <li><a href="service.php">High Quality Spare Parts</a></li>-->
          <!--<li><a href="#">Links 4</a></li>-->
          <!--<li><a href="#">Links 5</a></li>-->
        <!--</ul>-->
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">HELPFUL LINKS</p></li>
          <li><a href="support.php">Tech Support</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <!--<li><a href="#">Links 3</a></li>-->
          <!--<li><a href="#">Links 4</a></li>-->
          <!--<li><a href="#">Links 5</a></li>-->
        </ul>
      </div>
    </div> 

    <hr class="mt-4">

    <div class="row">
      <div class="col-12 text-center">
        <div class="copyright mt-3">
          <p><small>&copy; 2021 All Rights Reserved. Powered by Rdegi.</small></p>
        </div>
      </div>
    </div> 
  </div>
  
</footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
<!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script>-->

    <!-- SLCK CAROUSEL SLIDER ONLINE CDN -->
    <script src="bootstrap/js/jquery.min.js"></script>

    <script src="slick/slick.js"></script>


    <!-- SPLIDE SCRIPT -->
    <script src="splide/dist/js/splide.min.js"></script>


    <script src="js/header-10.js"></script>


<script>
//$("#new").click(function(){
 //   var temp = $('#rup').html();
   // alert(temp);
 // $.post('edit.php',{amt:temp},function(data){
 //   window.location.replace("https://vewon.staging-rdegi.com/payscript1.php");
 // });
//});


</script>
    <script>
      $(document).ready(function() {
        $('body').addClass('container-loaded');
      });
    </script>

    

  </body>
</html>