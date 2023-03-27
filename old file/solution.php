<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Solution | Vewon Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit= 0" />
    
    <!-- BOOTSTRAP OFFLINE CDN -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       
    <!-- FONT AWESOME ONLINE CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">


    <!-- SLICK CAROUSEL ONLINE CDN -->
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />

    
    <!-- animate css link -->
    <link rel="stylesheet" href="animate_css/animate.css">


    <!-- FOOTER STYLING -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/style.css">



    <!-- SPLIDE SLIDER LINK -->
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="splide/dist/css/themes/splide-sea-green.min.css">


    <!-- VIDEO JS STYLING -->
    <link rel="stylesheet" href="video_js/video-js.css">


    <!-- GLIDER JS STYLING -->
    <link rel="stylesheet" href="glider_js/glider.css">
    
    

    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/solution.css" />
    <link rel="stylesheet" href="styles/support.css" />
    <link rel="stylesheet" href="styles/header-10.css" />
    

   <!-- FOR TOGGLE BAR STYLING -->
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
      padding: 12px 15px;
      transition: all 0.15s;
      position: relative;
      border-radius: 3px;
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
      padding-left: 20px;
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
    .card-text-section{
      padding: 15px 25px;
    }
    .card-text-section h3{
      padding: 10px;
      font-size: 1.7em;
      font-family: "Open Sans", sans-serif;
      font-weight: 600;
      color: rgb(18, 150, 18);
      line-height: 30px;
    }
    .card-text-section p{
      padding: 10px;
      font-size: 1em;
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      line-height: 23px;
    }
    .card-title-ad h3{
      margin-top: 5em;
    }
    .media-query-card a{
      font-family: 'Roboto', sans-serif;
    }
    @media screen and (max-width: 750px) {
    .card-title-ad h3{
        margin: 0;
      }
    }
    @media screen and (max-width: 750px) {
    .media-sec6{
        margin-bottom: 2em;
      }
    }
    @media screen and (min-width: 700px) {
    .list{
        display: flex;
        flex-direction: row-reverse;
      }
    }
    .content-header{
      margin: 6rem 0rem;
    }
    .content-header h3,
    .content_header h3{
      font-family: 'Poppins', sans-serif;
      color:#093765;
      font-size: 3.3rem;
      font-weight: 900;
    }
    .content-header p,
    .content_header p{
      font-size: 1rem;
    }
    .img-content img{
      width: 100%;
    }
    .caption h1{
        position: absolute;
        top: -12rem;
        left: 37%;
        font-weight: 700;
        font-size: 3rem;
        font-family: 'Poppins', sans-serif;
        color: #fff;
    }
    
    .card-image{
        margin: 40px 20px 40px 10px;
        text-align: center;
    }
    
    .card-image .img_img{
        width: 500px; height: auto;
    }
    
    @media only screen and (max-width: 568px){
        .card-image .img_img{
            width: 250px;
        }
    }
  </style>





</head>
<body>
  <!-- Header Start -->
  <header class="site-header">
      <!--<div class="site-header__top">-->
      <!--  <div class="top-navbar-content wrapper d-flex justify-content-between align-items-center p-3">-->
      <!--    <div class="personal-content">-->
      <!--     <ul>-->
      <!--        <li><a href="tel://9790864096" class="top_font text-dark"><i class="fas fa-phone-alt"></i> 9790864096</a></li>-->
      <!--        <li><a href="mailto:vewongroup@gmail.com" class="top_font text-dark"><i class="far fa-envelope"></i> vewongroup@gmail.com</a></li>-->
      <!--      </ul>-->
      <!--    </div>-->

      <!--    <div class="social-icon-content">-->
      <!--      <ul>-->
      <!--        <li><a href="#" class="text-dark"><span class="icon-facebook"></span></a></li>-->
      <!--        <li><a href="#" class="text-dark"><span class="icon-twitter"></span></a></li>-->
      <!--        <li><a href="#" class="text-dark"><span class="icon-linkedin"></span></a></li>-->
      <!--        <li><a href="#" class="text-dark"><span class="icon-instagram"></span></a></li>-->
      <!--        <li><a href="#" class="text-dark"><span class="icon-youtube-play"></span></a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      
      
      
        <!-- <div class="wrapper site-header__wrapper"> -->
          <!-- <div class="site-header__start">
            <ul class="">
              <li class=""><a href="#">About</a></li>
              <li class=""><a href="#">Contact</a></li>
            </ul>
          </div> -->
          <!-- <div class="site-header__middle"> -->
            <!-- <a href="index.php" class="brand" title="Vewon Group"><img src="img/vewonlogo.png" alt=""></a> -->
          <!-- </div> -->
          <!-- ******* LOGIN BUTTON ******* -->
          <!-- <div class="site-header__end"> -->
            <!-- <a class="doc-link" href="#">My documents <i class="material-icons-outlined external_link">open_in_new</i></a> -->

            <!-- <a href="login.php" class="button text-capitalize text-decoration-none login" title="If you already have an account"><i class="fas fa-sign-in-alt"></i> login</a> -->
            
          <!-- </div>
        </div> -->

      <div class="site-header__bottom">
        <div class="wrapper site-header__wrapper" id="bottom_wrapper">
          <div class="site-header__start">
          <a href="index.php" class="brand" title="Vewon Group"><img src="img/vewonlogo3.png" alt=""></a>

            <!-- <form action="" method="" role="search" class="search-form">
              <input type="search" name="search" class="search-bar" placeholder="Search...">
            </form> -->




            <!-- <div class="search">
              <button class="search__toggle" aria-label="Open search">
                Search
              </button>
              <form class="search__form" action="">
                <label class="sr-only" for="search">Search</label>
                <input
                  type="search"
                  name=""
                  id="search"
                  placeholder="Search for"
                />
              </form>
            </div> -->
          </div>

          <div class="site-header__middle">
            <i class="fas fa-bars toggle_bar" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="position: absolute; right: 1rem; top: 1.5rem; cursor: pointer;"></i>
            <!-- <button class="nav__toggle" aria-expanded="false" type="button">
              menu
            </button> -->
            <ul class="nav__wrapper">
              <li class="nav__item text-capitalize dropdown">
                <a href="#" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="dropdown">products</a>
                  <ul class="dropdown-menu animate__animated animate__zoomIn" aria-labelledby="#dropdown">
                    <li><a class="dropdown-item" href="med_low_voltage_products_menu.php">MV and LV Systems</a></li>
                    <li><a class="dropdown-item" href="building_automation_menu.php">Building Automation</a></li>
                    <li><a class="dropdown-item" href="renewable_storage_energy_menu.php">Renewable & Energy Storage</a></li>
                    <li><a class="dropdown-item" href="grid_automation_menu.php">Grid Automation</a></li>
                    <li><a class="dropdown-item" href="critical_power_menu.php">Critical & Industrial Power</a></li>
                  </ul>
              </li>
              <li class="nav__item text-capitalize dropdown">
                <a href="solution.php" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="dropdown">solutions</a>
                 <ul class="dropdown-menu animate__animated animate__zoomIn" aria-labelledby="#dropdown">
                  <li><a class="dropdown-item" href="#t1">Design Engineering and Energy Systems</a></li>
                  <li><a class="dropdown-item" href="#t2">Grid automation and Remote Monitoring</a></li>
                  <li><a class="dropdown-item" href="#t3">Customized Remote Web Portal Solutions</a></li>
                  <li><a class="dropdown-item" href="#t4">Network Co-ordination Studies</a></li>
                  <!--<li><a class="dropdown-item" href="solution.php">Solution 5</a></li>-->
                </ul> 
              </li>
              <li class="nav__item text-capitalize dropdown">
                <a href="#" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="dropdown">services</a>
                <ul class="dropdown-menu animate__animated animate__zoomIn" aria-labelledby="#dropdown">
                 <li><a class="dropdown-item" href="service.php">Installation & Testing and Commissioning</a></li>
                  <li><a class="dropdown-item" href="service.php">Operation & Maintenance Contract Services</a></li>
                  <li><a class="dropdown-item" href="service.php">Remote monitoring Web based portal Service</a></li>
                  <li><a class="dropdown-item" href="service.php">Spare Parts Supply</a></li>
                  <li><a class="dropdown-item" href="service.php">Electro  Mechanical Services</a></li>
                  <li><a class="dropdown-item" href="service.php">Human resource for Power related services</a></li>
                </ul> 
              </li>
              <li class="nav__item text-capitalize"><a href="support.php" class="text-decoration-none">tech support</a></li>
              <li class="nav__item text-capitalize"><a href="about_us.php" class="text-decoration-none">about us</a></li>
            </ul>
          </div>

            <div class="site-header--end">
              <a href="login.php" class="text-capitalize text-decoration-none" title="If you already have an account"> <i class="material-icons-outlined login">login</i></a>
              <a class="text-decoration-none text-capitalize mx-2" href="register.php" target="_blank" title="Create a new account"> <i class="material-icons-outlined reg">how_to_reg</i></a>
            </div>
          </div>
        </div>
      </div>
    </header>






    <!-- OFFCANVAS FOR MOBILE DEVICES -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel" style="opacity: 0;user-select: none;">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div id="accordian">
          <ul class="show-dropdown">
              <li>
                  <a class="font" href="javascript:void(0);"><i class="fas fa-tag"></i>&nbsp;&nbsp;&nbsp;Products</a>
                  <ul>
                    <li><a class="font-child" href="med_low_voltage_products_menu.php">MV and LV Systems</a></li>
                    <li><a class="font-child" href="building_automation_menu.php">Building Automation</a></li>
                    <li><a class="font-child" href="renewable_storage_energy_menu.php">Renewable & Energy Storage</a></li>
                    <li><a class="font-child" href="grid_automation_menu.php">Grid Automation</a></li>
                    <li><a class="font-child" href="critical_power_menu.php">Critical & Industrial Power</a></li>
                  </ul>
              </li>

              <li>
                <a class="font" href="javascript:void(0);"><i class="far fa-lightbulb"></i>&nbsp;&nbsp;&nbsp;&nbsp;Solutions</a>
                 <ul>
                  <li><a class="font-child" href="solution.php">Design Engineering and Energy Systems</a></li>
                  <li><a class="font-child" href="solution.php">Grid automation and Remote Monitoring</a></li>
                  <li><a class="font-child" href="solution.php">Customized Remote Web Portal Solutions</a></li>
                  <li><a class="font-child" href="solution.php">Network Co-ordination Studies</a></li>
                  <!--<li><a class="font-child" href="solution.php">Solution 5</a></li>-->
                </ul>
              </li>

              <li>
                <a class="font" href="javascript:void(0);"><i class="fas fa-tools"></i>&nbsp;&nbsp;&nbsp;Services</a>
               <ul>
                  <li><a class="font-child" href="service.php">Installation & Testing and Commissioning</a></li>
                  <li><a class="font-child" href="service.php">Operation & Maintenance Contract Services</a></li>
                  <li><a class="font-child" href="service.php">Remote monitoring Web based portal Service</a></li>
                  <li><a class="font-child" href="service.php">Spare Parts Supply</a></li>
                  <li><a class="font-child" href="service.php">Electro  Mechanical Services</a></li>
                  <li><a class="font-child" href="service.php">Human resource for Power related services</a></li>
                </ul> 
              </li>

              <li class=""><a href="support.php" class="font"><i class="far fa-handshake"></i>&nbsp;&nbsp;Tech Support</a></li>
              <li class=""><a href="about_us.php" class="font"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;&nbsp;About Us</a></li>
            </ul>
        </div>
        <div class="login-button">
          <a href="login.php" class="btn btn-outline-primary btn-block text-decoration-none mob-login font w-100 mb-2"> Login</a>
        </div>

        <div class="register-button">
          <a href="register.php" class="btn btn-outline-primary btn-block text-decoration-none w-100 font mob-reg"> Register</a>
        </div>
      </div>
    </div>




  <!-- Header End -->
  
  


  <!--*********** CAROUSEL SLIDER ***********-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-touch="true" data-bs-ride="carousel">
    <!-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=https://www.jasib.com.my/wp-content/uploads/2015/12/electrical.png" class="d-block w-100" alt="Image">
        <div class="caption">
          <h1 class="h1">Solutions</h1>
          <!--<div class="para">-->
          <!--  <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>-->
          <!--</div>-->
          <!--<a class="btn btn-primary learn-more-btn" href="#" role="button">Learn more</a>-->
        </div>
      </div>

      <!-- <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1558403194-611308249627?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="image">
        <div class="caption">
          <h1 class="h1">Second slide label</h1>
          <div class="para">
            <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
          </div>
          <a class="btn btn-primary learn-more-btn" href="#" role="button">Learn more</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=667&q=80" class="d-block w-100" alt="Image">
        <div class="caption">
          <h1 class="h1">Third slide label</h1>
          <div class="para">
            <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
          </div>
          <a class="btn btn-primary learn-more-btn" href="#" role="button">Learn more</a>
        </div>
      </div> -->
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>
<!-- </div>
</div> -->
<!--************* CAROUSEL SLIDER END *************-->




  <!--*********** MAIN CONTENT ***********-->
  <div class="container-fluid wrapper" id="container">
    <!-- <div class="row">
      <div class="col-12"> -->


  




 
      <!-- BIG CARD SECTION 1 STARTS -->
      <!-- <div class="row">
        <div class="col-12 col-md-12">
          <div class="card" style="margin-top: 2.5em;">
            <div class="card-body p-4">
              <h3 class="card-body-title">Discover our solutions</h3>
              <hr class="w-100">
              <div class="card-link p-3 d-flex justify-content-between">
                <a href="#title-1">EcoStructure Innovation at Every Level</a>
                <a href="#link2">Solution for your Business</a>
                <a href="#link3">Solutions and Programs for Partners</a>
                <a href="#link4">Solutions for your Home</a>
                <a href="#link5">software</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- BIG CARD SECTION 1 ENDS -->



      <div class="row">
        <div class="col">
        <div class="card-text-section">
          <h3>Our Solutions</h3>
        </div>
        </div>
      </div>




      <!-- CARD SECTION 1 STARTS -->
      <div class="card-section1">
        <div class="row">
            <div class="col-md">
                <div class="card mt-2">
                    <div class="card-body">
                      <!-- <div class="card-text-section">
                        <h3>Our Solutions</h3>
                      </div> -->
                        <ul class="d-flex">
                            <li class="row no-gutters list-row">
                                <div class="col-md-6 image-card-section">
                                    <div class="card-image">
                                        <img src="https://media.istockphoto.com/photos/two-architect-working-at-construction-site-and-compass-drawing-on-picture-id1224506889?b=1&k=20&m=1224506889&s=170667a&w=0&h=Nu5fZy_i3r0k1BbXaVFrFnH7hs8piZXWrUe7zVPx21E=" alt="Design Image">
                                    </div>
                                </div>


                                <div class="col-md-6 card-text-section">
                                    <div class="card-title">
                                        <h3 id="t1">Design Engineering and Energy Systems</h3>
                                    </div>

                                    <div class="card-textline-section">
                                        <p>Design is an art that impresses your eye at first sight, and we are the artist of that designs. </p>
                                        <p>We love to give attention to the client's cravings rather than attaining ways to adapt them into our standardized approach. We design your electric sources with great passion and guaranteeing advanced security standards. </p>
                                        <p>No matter how sophisticated our industry, solutions, and reserves are, we still design with great passion. We give attention to what the client wants rather than finding ways to fit them into our standardized approaches. We take up all kinds of electric and energy design challenges. </p>
                                        <ul class="ms-5" style="list-style: disc;font-family: 'open Sans', sans-serif;">
                                          <li class="py-1">Residential</li>
                                          <li class="py-1">Personal</li>
                                          <li class="py-1">Commercial</li>
                                        </ul>
                                    </div>

                                    <!-- <div class="card-link-section">
                                        <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                                    </div> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARD SECTION 1 ENDS -->




     <!-- CARD SECTION 2 STARTS -->
     <div class="card-section1">
      <div class="row">
          <div class="col-md">
              <div class="card mt-4">
                  <div class="card-body">
                      <ul class="d-flex">
                          <li class="row no-gutters">
                              <div class="col-md-6 image-card-section">
                                  <div class="card-image">
                                      <img src="https://media.istockphoto.com/photos/smart-asian-glassses-engineer-working-site-inspector-hand-use-laptop-picture-id1213860395?b=1&k=20&m=1213860395&s=170667a&w=0&h=WxZP3sZCeYvBvtQw8Cx9mZXjGTCqPQuytd-h39DNvPo=" alt="Remote Monitoring Image">
                                  </div>
                              </div>


                              <div class="col-md-6 card-text-section">
                                  <div class="card-title">
                                      <h3 id="t2">Grid automation and Remote Monitoring</h3>
                                  </div>

                                  <div class="card-textline-section">
                                      <p>We are glad to present a layered structure, data acquisition, and power of electricity delivery to your residence, personal, and commercial assets. </p>
                                      <p>Physically remaining present in an organization set up and monitoring 24 hours is next to impossible. </p>
                                      <p>Vewon offers remote monitoring infrastructure that guarantees that you keep in touch with what's progressing on without actually being there.</p>
                                      <p>Appropriate responses, emails, and calls will be the trigger as proactive measures. Such an infrastructure guarantees the safety of your electrical distribution system.</p>
                                  </div>

                                  <!-- <div class="card-link-section">
                                      <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                                  </div> -->
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- CARD SECTION 2 ENDS -->




  <!-- CARD SECTION 3 STARTS -->
  <!-- <div class="card-section1">
    <div class="row">
        <div class="col-md">
            <div class="card mt-4">
                <div class="card-body">
                    <ul class="d-flex">
                        <li class="row no-gutters list-row">
                            <div class="col-md-6 image-card-section">
                                <div class="card-image">
                                    <img src="img/maintenance.svg" alt="Installation Maintenance Image" height="300">
                                </div>
                            </div>


                            <div class="col-md-6 card-text-section">
                                <div class="card-title-ad">
                                    <h3>Installation and Maintenance</h3>
                                </div>

                                <div class="card-textline-section">
                                    <p>Physically being present in a company setup and monitoring 24x7 is next to impossible. That's why remote monitoring is a necessity.</p>
                                    <p>Vewon offers remote monitoring infrastructure that ensures that you keep in touch with what's going on without actually being there. Timely responses, mails and calls will be triggered as proactive measures. Such an infrastructure guarantees the safety for your electrical or power distribution system.</p>
                                </div>

                                <div class="card-link-section">
                                    <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- CARD SECTION 3 ENDS -->




  <!-- CARD SECTION 4 STARTS -->
  <!-- <div class="card-section1">
    <div class="row">
        <div class="col-md">
            <div class="card mt-4">
                <div class="card-body">
                    <ul class="d-flex">
                        <li class="row no-gutters">
                            <div class="col-md-6 image-card-section">
                                <div class="card-image">
                                    <img src="img/portal.svg" alt="Portal-based Solution Image" width="250" height="250">
                                </div>
                            </div>


                            <div class="col-md-6 card-text-section">
                                <div class="card-title">
                                    <h3>Portal Based Solution</h3>
                                </div>

                                <div class="card-textline-section">
                                    <p>Physically being present in a company setup and monitoring 24x7 is next to impossible. That's why remote monitoring is a necessity.</p>
                                    <p>Web portals are easy ways to share information and stay in touch with the clients. We give our clients an exclusive portal via which we can alert, update and communicate with them at ease. This helps in maintaining long term relationships with our clients.</p>
                                </div>

                                <div class="card-link-section">
                                    <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- CARD SECTION 4 ENDS -->




<!-- CARD SECTION 5 STARTS -->
<div class="card-section1">
  <div class="row">
      <div class="col-md">
          <div class="card mt-4">
              <div class="card-body">
                  <ul class="d-flex">
                      <li class="row no-gutters list-row">
                          <div class="col-md-6 image-card-section">
                              <div class="card-image">
                                  <img src="https://media.istockphoto.com/photos/binders-are-waiting-to-be-processed-back-in-blur-picture-id533837953?b=1&k=20&m=533837953&s=170667a&w=0&h=VWSFTEPIOay1ewUJ3GtOV3BTpF4dP4wxByMzLb7ayPQ=" alt="Testing and Commission Image">
                              </div>
                          </div>


                          <div class="col-md-6 card-text-section">
                              <div class="card-title">
                                  <h3 id="t3">Customized Remote Web Portal Solutions</h3>
                              </div>

                              <div class="card-textline-section">
                              
                                    <p>Vewon is glad to provide you with a web portal design and web portal preferences. You will be able to generate your own customized HTML web access folios, 
                                    and there is no requirement to be a web developer.</p>
                                    <p>We provide a web portal with a worthy, unique point of access for data to our clients. Our customized web portal will save your time by solidifying back-end applications into one tip of access.</p>
                                    <p>We help our clients increase protection by presenting a singular sign-on for all industry applications.</p>
                                </div>

                              <!-- <div class="card-link-section">
                                  <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                              </div> -->
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- CARD SECTION 5 ENDS -->




<!-- CARD SECTION 6 STARTS -->
<!-- <div class="card-section1 media-sec6">
  <div class="row">
      <div class="col-md">
          <div class="card mt-4">
              <div class="card-body">
                  <ul class="d-flex">
                      <li class="row no-gutters">
                          <div class="col-md-6 image-card-section">
                              <div class="card-image">
                                  <img src="img/spare.svg" alt="Provide high quality spare parts Image" width="250" height="250">
                              </div>
                          </div>


                          <div class="col-md-6 card-text-section">
                              <div class="card-title">
                                  <h3>High Quality Spare Parts</h3>
                              </div>

                              <div class="card-textline-section">
                                  <p>Provide high quality spare parts and power related accessories for substation, automation and monitoring </p>
                                </div>

                              <div class="card-link-section">
                                  <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div> -->
<!-- CARD SECTION 6 ENDS -->



        <!--CARD SECTION 7 STARTS-->
        <div class="card-section1">
          <div class="row">
              <div class="col-md">
                  <div class="card mt-4">
                      <div class="card-body">
                          <ul class="d-flex">
                              <li class="row no-gutters">
                                  <div class="col-md-6 image-card-section">
                                      <div class="card-image">
                                          <img src="https://media.istockphoto.com/photos/communication-technology-picture-id920409476?b=1&k=20&m=920409476&s=170667a&w=0&h=en7zZcbtIep80tdk_cQHjBbKeKPLjeBlrscQA2ZaMFc=" alt="Remote Monitoring Image">
                                      </div>
                                  </div>
    
    
                                  <div class="col-md-6 card-text-section">
                                      <div class="card-title">
                                          <h3 id="t4">Network Co-ordination Studies</h3>
                                      </div>
    
                                      <div class="card-textline-section">
                                          <p>A network coordination study is used to analyze the short circuit currents and achieve an optimal balance between equipment protection and fault isolation that is consistent with the operating requirements of the electrical network.</p>
                                          <p>The effects of equipment failures and fault currents within a power system and analyzes the impacts on the system operation. </p>
                                          <!--<p>Vewon offers remote monitoring infrastructure that guarantees that you keep in touch with what's progressing on without actually being there.</p>-->
                                          <!--<p>Appropriate responses, emails, and calls will be the trigger as proactive measures. Such an infrastructure guarantees the safety of your electrical distribution system.</p>-->
                                      </div>
    
                                      <!-- <div class="card-link-section">
                                          <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                                      </div> -->
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <!--CARD SECTION 7 ENDS-->




    <!-- CARD SECTION 8 STARTS -->
  <!--  <div class="card-section1">-->
  <!--    <div class="row">-->
  <!--      <div class="col-md">-->
  <!--        <div class="card mt-4 mb-2">-->
  <!--          <div class="card-body">-->
  <!--            <ul class="d-flex">-->
  <!--                <li class="row no-gutters">-->
  <!--                    <div class="col-md-12 image-card-section">-->
  <!--                        <div class="card-image">-->
  <!--                            <img class="img_img" src="https://media.istockphoto.com/photos/survey-engineer-in-construction-site-use-theodolite-mark-a-concrete-picture-id813210666?b=1&k=20&m=813210666&s=170667a&w=0&h=pwITs_HnKhTDRNPt3hJW2tubEel0S-WDkDrPDBaqKmY=" alt="Coordination Studies Image">-->
  <!--                        </div>-->
  <!--                    </div>-->


  <!--                    <div class="col-md-12 card-text-section">-->
  <!--                        <div class="card-title">-->
  <!--                            <h3>Co-ordination Studies</h3>-->
  <!--                        </div>-->

  <!--                        <div class="card-textline-section">-->
  <!--                            <p>Coordination studies are done to ensure the overall safety of the system.-->
  <!--                          Generally circuits are protected by protective equipment. This minimizes the impact of faults or overload or any other mishap. But if protective devices fail to meet standards or become faulty, then this becomes a great liability to the system. Thus coordination studies are conducted.</p>-->
  <!--                            <p>Vewon performs coordination studies over each protective equipment and uses other information. Powerful tools are deployed to process the comprehensive data of the system into understandable information and graphs so for further assessment.</p>-->
  <!--                            <p>The ultimate goal is to ensure that the protective devices do their job at best which minimises the impact of hazards and ensure overall safety of the electric circuit is intact.</p>-->
  <!--                            <p>An elaborate report on our process, methods, analysis, values, results and recommendations are sent to our customers.</p>-->
  <!--                            <p>Coordination studies is mandatory for business firms and enterprises with power distribution systems. Many jurisdictions expect business to up-to-date coordination studies report. This is because a minor fault can lead to fatal losses of life and resources.</p>-->
  <!--                            <p>With our experience, expert engineers and robust tools, our reports promise you the best insights to your electrical and power distribution system.</p>-->
  <!--                            <p>Know if you need coordination studies for your firm or just know more about compliance involved. Talk to our expert.</p>-->
  <!--                        </div>-->

  <!--                        <div class="mb-5 d-none">-->
  <!--                            <a class="btn btn-primary" href="#">Click Here <i class="fas fa-angle-right"></i></a>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                </li>-->
  <!--            </ul>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--</div>-->
  <!-- CARD SECTION 8 ENDS -->






      <!-- CARD SECTION 2 STARTS-->
      <!--<div class="row mb-3">-->
      <!--  <div class="col-12 col-md-12">-->
      <!--    <div class="card media-query-card">-->
      <!--      <div class="card-body p-4">-->
      <!--        <h3 class="card-title card_title">The "Know Your System" Assessment</h3>-->
      <!--        <p class="card-text card_text">Vewon offers an exclusive Know Your System Assessment to clients. It is not just yet another service. Rather it is an opportunity for our clients to have a look at their electrical or power systems.  We help clients understand their system. Then, we proceed with our recommendations. </p>-->
      <!--        <p class="card-text card_text">This is something unique to Vewon. Grab this opportunity.</p>-->

      <!--        <div class="my-4">-->
      <!--          <a class="btn btn-primary" href="#">Know More <i class="fas fa-angle-right"></i></a>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!-- CARD SECTION 2 ENDS-->






      <!-- CARD SECTION 3 STARTS -->
      <!-- <div class="row">
        <div class="col-12 col-md-12">
          <div class="card" style="margin-top: 2.5em;">
            <div class="card-body">
              <div class="card-section3-title">
                <h3 id="title-1">EcoStruxure: Innovation at Every Level</h3>
              </div> 

                <div class="card-section3-text">
                  <p>EcoStruxure is our IoT-enabled, plug-and-play, open, interoperable architecture and platform, in Homes, Buildings, Data Centers, Infrastructure and Industries.</p>
                </div>



              <ul class="row no-gutters">
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoStruxure Building</h3>
                      </div>

                      <div class="card-heading-text">
                        <p>Building automation and management system innovation for energy performance, occupant comfort and engineering efficiency.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoStruxure Plant & Machine</h3>
                      </div>

                      <div class="card-heading-text">
                        <p>Innovative solutions for safer, more reliable, efficient, profitable, and sustainable industrial operations.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoStruxure Grid</h3>
                      </div>

                      <div class="card-heading-text">
                        <p>Solutions enabling electricity companies to create smart grids and integrate renewable generation for sustainable, efficient networks.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoStruxure IT</h3>
                      </div>

                      <div class="card-heading-text">
                        <p>Building automation and management system innovation for energy performance, occupant comfort and engineering efficiency.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoStruxure Power</h3>
                      </div>

                      <div class="card-heading-text">
                        <p>Safe, reliable and efficient IoT-enabled electrical distribution with enhanced connectivity, real-time operations and smart analytics.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoStruxure Platform</h3>
                      </div>

                      <div class="card-heading-text">
                        <p>The digital backbone connecting best-in-class OT solutions with the latest in IT technology to tap into the true potential of IoT.</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div> -->
      <!-- CARD SECTION 3 ENDS -->






      <!-- CARD SECTION 4 STARTS -->
      <!-- <div class="row">
        <div class="col-12 col-md-12">
          <div class="card" style="margin-top: 2.5em;">
            <div class="card-body">
              <div class="card-section3-title">
                <h3 id="title-1">Solutions for your Business</h3>
              </div> 

                <div class="card-section3-text">
                  <p>Optimize your energy consumption, maintain a healthy and productive environment, update aging facilities and connect to your integrated solutions anytime, anywhere.</p>
                </div>



              <ul class="row no-gutters">
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Access to Energy</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Metals</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Healthcare</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Retail</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Power & Grid</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Marine</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Water and Wastewater</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Solar and Energy Storage</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Data Centers and Networks</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Cybersecurity</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Life Sciences</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Hotels</h3>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div> -->
      <!-- CARD SECTION 4 ENDS -->





      <!-- CARD SECTION 5 STARTS -->
      <!-- <div class="row">
        <div class="col-12 col-md-12">
          <div class="card" style="margin-top: 2.5em;">
            <div class="card-body">
              <div class="card-section3-title">
                <h3 id="title-1">Solutions and Programs for Partners</h3>
              </div> 

                <div class="card-section3-text">
                  <p>Large, medium, or small – your business can grow together with Schneider Electric. Explore the possibilities today!
                  </p>
                </div>



              <ul class="row no-gutters">
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Collaborative Automation Partner Program</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Consultants, Designers & Engineers</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Contractors</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Distributors</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>EcoXpert Partner Program</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Electricians</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Interior Designers</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>IT Resellers & System Integrators</h3>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-6 col-xl-4">
                  <div class="card border-0" style="margin-top: 8px;padding: 5px;">
                    <div class="card-body">
                      <div class="card-heading">
                        <h3>Panel Builders</h3>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <!-- CARD SECTION 5 ENDS -->





      <!-- CARD SECTION 6 STARTS-->
      <!-- <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col">
              <div class="card" style="margin-top: 2rem;margin-bottom: 2rem;">
                <div class="card-body">
                  <div class="card-section6-heading">
                    <h3>Solutions for your Home</h3>
                  </div>

                  <div class="card-section6-text">
                    <p>A home isn’t just about aesthetics, it’s also about how you feel. At Schneider Electric, we develop innovative solutions that enhance both your home’s appearance and your lifestyle, reduce your energy bills, and safeguard your family and memories.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- CARD SECTION 6 ENDS-->
      
      
      
      
 <!-- WHATSAPP FLOATING SECTION -->
      <div class="whatsapp-section">
        <a href="https://wa.me/9790864096" class="whatsapp_float ripple" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
      </div>
      

      </div>
      <!--********** PRODUCT CONTENT ENDS***********-->












<!-- ************* FOOTER  *************  -->
<footer class="footer-48201 mt-4">
      
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-4 pr-md-5">
          <a class="footer-site-logo d-block mb-4"><img src="img/vewonlogo2.png" alt="Vewon Group Logo" width="200"></a>
          <p class="footer-text">Vewon is a fastly growing electrical and mechanical service company. We offer technology based solutions to clients.</p><br>
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
          <li><a href="med_low_voltage_products_menu.php">MV and LV Systems</a></li>
          <li><a href="building_automation_menu.php">Building Automation</a></li>
          <li><a href="renewable_storage_energy_menu.php">Renewable & Energy Storage</a></li>
          <li><a href="grid_automation_menu.php">Grid Automation</a></li>
          <li><a href="critical_power_menu.php">Critical & Industrial Power</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">SOLUTIONS</p></li>
          <li><a href="solution.php">Design Engineering and Energy Systems</a></li>
          <li><a href="solution.php">Remote Monitoring</a></li>
          <li><a href="solution.php">Customized Remote Web Portal Solutions</a></li>
          <li><a href="solution.php">Co-ordination Studies</a></li>
          <!--<li><a href="#">Links 5</a></li>-->
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">SERVICES</p></li>
          <li><a href="service.php">Installation and Maintenance</a></li>
          <li><a href="service.php">Portal based Solutions</a></li>
          <li><a href="service.php">High Quality Spare Parts</a></li>
          <!--<li><a href="#">Links 4</a></li>-->
          <!--<li><a href="#">Links 5</a></li>-->
        </ul>
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
          <p><small>&copy; 2021 All Rights Reserved. Powered by Dbot Digital.</small></p>
        </div>
      </div>
    </div> 
  </div>
  
</footer>











  <!-- BOOTSTRAP OFFLINE CDN -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- SLCK CAROUSEL SLIDER ONLINE CDN -->
  <script src="bootstrap/js/jquery.min.js"></script>

  <script src="slick/slick.js"></script>

  <script src="js/header-10.js"></script>

  <!-- SPLIDER SCRIPT -->
  <script src="splide/dist/js/splide.min.js"></script>

 <!-- VIDEO JS SCRIPT -->
 <script src="video_js/video.min.js"></script>


 <!-- GLIDER JS SCRIPT -->
 <script src="glider_js/glider.js"></script>
 <!-- <script>
   window.addEventListener('load', function(){
   new Glider(document.querySelector('.glider'), {
     
     })
   })
 </script> -->



  <script>
    // SLICK SLIDER SCRIPT
    $('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});
  </script>
  
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>


  <script>
  // -------multilevel-accordian-menu---------
    $(document).ready(function() {
      $("#accordian a").click(function() {
        var link = $(this);
        var closest_ul = link.closest("ul");
        var parallel_active_links = closest_ul.find(".active")
        var closest_li = link.closest("li");
        var link_status = closest_li.hasClass("active");
        var count = 0;

        closest_ul.find("ul").slideUp(function() {
          if (++count == closest_ul.find("ul").length){
            parallel_active_links.removeClass("active");
            parallel_active_links.children("ul").removeClass("show-dropdown");
            link.not().children("ul").removeClass(".active");
          }
        });

        if (!link_status) {
            closest_li.children("ul").slideDown().addClass("show-dropdown");
            closest_li.addClass("active");
        }	

      })
    });






    // --------for-active-class-on-other-page-----------
    //jQuery(document).ready(function($){
        // Get current path and find target link

        //var path = window.location.pathname.split("/").pop();
      
        // Account for home page with empty path
        
        /*if ( path == '' ) {
          path = 'index.html';
        }*/
        
        //var target = $('#accordian li a[href="'+path+'"]');

        // Add active class to target link

        /*target.parents("li").addClass('active');
        target.parents("ul").addClass("show-dropdown");*/
    //});

  </script>

  
  <!-- SPLIDE SLIDE SCRIPT -->
  <!-- <script>
    new Splide( '#splide', {
     type   : 'slider',
     perPage: 3,
     perMove: 1,
     } ).mount();
  </script> -->


  <!-- SINGLE SPLIDE SLIDER -->
  <script>
    new Splide( '#splide2', {
     type : 'slider',
     perPage : 1,
     perMove : 1,
   } ).mount();
  </script>


  <!-- GLIDER SLIDER SCRIPT -->
  <!-- <script>
      new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        dots: '#dots',
        draggable: true,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        }
        });
  </script> -->



</body>
</html>