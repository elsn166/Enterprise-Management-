<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home | Vewon Group</title>
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
      
    </style>





  </head>
  <body>
    <!-- Header Start -->
    <header class="site-header">
      <!-- <div class="site-header__top">
        <div class="top-navbar-content wrapper d-flex justify-content-between align-items-center p-3">
          <div class="personal-content">
           <ul>
              <li><a href="tel://9790864096" class="top_font text-dark"><i class="fas fa-phone-alt"></i> 9790864096</a></li>
              <li><a href="mailto:vewongroup@gmail.com" class="top_font text-dark"><i class="far fa-envelope"></i> vewongroup@gmail.com</a></li>
            </ul>
          </div>

          <div class="social-icon-content">
            <ul>
              <li><a href="#" class="text-dark"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="text-dark"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="text-dark"><span class="icon-linkedin"></span></a></li>
              <li><a href="#" class="text-dark"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="text-dark"><span class="icon-youtube-play"></span></a></li>
            </ul>
          </div>
        </div>
      </div> -->



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
                <a href="index.php"  aria-expanded="false">Home</a>
                  
              </li>
                
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
                  <li><a class="dropdown-item" href="solution.php">Design Engineering and Energy Systems</a></li>
                  <li><a class="dropdown-item" href="solution.php">Grid automation and Remote Monitoring</a></li>
                  <li><a class="dropdown-item" href="solution.php">Customized Remote Web Portal Solutions</a></li>
                  <li><a class="dropdown-item" href="solution.php">Network Co-ordination Studies</a></li>
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
    <!-- NEEDED CAROUSEL ENDS -->
    <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-touch="true" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner1.jpeg" loading="lazy" class="d-block w-100" alt="Welcome Page Image">
          <div class="caption">
            <h1 class="h1">"STAY POWERFUL !!!"</h1>
            <div class="para">
              <p class="p">Vewon is an electric and energy service company. We offer technology based solutions to clients.</p>
            </div>
            <a class="btn btn-primary learn-more-btn invisible" href="#" role="button">Learn more</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/banner02.jpeg" loading="lazy" class="d-block w-100" alt="Welcome Page image">
          <div class="caption">
            <h1 class="h1">"STAY CONNECTED !!!"</h1>
            <div class="para">
              <p class="p">Vewon build community that serves as society and act as family</p>
            </div>
            <a class="btn btn-primary learn-more-btn invisible" href="#" role="button">Learn more</a>
          </div>
        </div>

        <!-- <div class="carousel-item">
          <img src="img/banner001.jpeg" class="d-block w-100" alt="Image">
          <div class="caption">
            <h1 class="h1">Third slide label</h1>
            <div class="para">
              <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
            </div>
            <a class="btn btn-primary learn-more-btn" href="#" role="button">Learn more</a>
          </div>
        </div> -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- NEEDED CAROUSEL ENDS -->




  <!-- </div>
</div> -->
<!--************* CAROUSEL SLIDER END *************-->
    <!--*********** MAIN CONTENT ***********-->
      <div class="container-fluid wrapper" id="container">
        <!-- <div class="row">
          <div class="col-12"> -->



          <div class="bg_content_card">
            <div class="detail_card">
              <h4 style="font-family: 'Poppins', Sans-serif; font-weight: 590;">Why Vewon</h4>
              <br>
              <p style="font-size: 0.8em;font-family: 'Montserrat', Sans-serif; line-height: 20px;">Vewon is a fastly growing electrical and mechanical service company. We offer technology based solutions to clients.</p>
            </div>
          </div>



          <div class="row">
            <div class="col">
              <div class="title_section text-center">
                <h4 class="font fs-2 mt-4 mb-3">Our Solutions & Service</h4>
              </div>
            </div>
          </div>



        <!--************* CARD SECTION *************-->
        <div class="row d-flex mt-3" id="mob-top">
          <div class="col-md-12">
            <div class="flexible-block d-flex">
              <div class="row d-flex">
                <div class="col">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                        <a href="solution.php"><img src="img/card_img1.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Design Engineering and Energy Systems</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="solution.php"><img src="img/card_img2.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Grid automation and Remote Monitoring</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="solution.php"><img src="img/card_img3.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Customized Remote Web Portal Solutions</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="solution.php"><img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Co-ordination Studies</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img4.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Installation, Testing and Commissioning</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img5.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Operation & Maintenance Contract Services</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img6.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Spare Parts Supply</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img7.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Electro - Mechanical Services</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--************* CARD SECTION END*************-->





            <!-- Big Banner -->
            <div class="big_banner">
              <div class="banner__text">
                <h4>"As the use of electricity and energy happens to rage and rage more, smartest solutions are mandatory to take care of them. That's exactly what we do."</h4>
                <br>
                <span>  - The Team</span>
              </div>
            </div>



            <div class="row">
              <div class="col">
                <div class="title_section text-center">
                  <h4 class="font fs-2 mt-4 mb-3">Our Best Products</h4>
                </div>
              </div>
            </div>




             <!--************* CARD SECTION *************-->
        <div class="row d-flex mt-3" id="mob-top">
          <div class="col-md-12">
            <div class="flexible-block d-flex">
              <div class="row d-flex">
                <div class="col">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                        <a href="grid_automation_menu.php"><img src="img/transformer.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Transformer</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="small_business_menu.php"><img src="img/switch_gear.png" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Switch Gear</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="med_low_voltage_products_menu.php"><img src="img/Control-Relay-Panel.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Control & Relay Panels</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="renewable_storage_energy_menu.php"><img src="img/solar_panel.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Solar Panels</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="med_low_voltage_products_menu.php"><img src="img/elec_product.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Electronic Product</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="industrial_automation_menu.php"><img src="img/motor_starter.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Motor Starter</h4>
                        </div></a>
                        <!-- <div class="card-body">
                          <h5 class="card-title" id="card-title">Card title</h5>
                          <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div> -->
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <!--************* CARD SECTION END*************-->



            

            <!--************* TITLE *************-->
            <!-- <section class="">
              <div class="row d-flex flex-wrap my-4" id="title-row"> -->
                <!-- <div class="col flex-grow-1 flex-shrink-0" id="title-col">
                  <h3>Title</h3>
                </div> -->
              <!-- </div>
            </section> -->


            <!-- ************* IMAGE GALLERY *************  -->
            <!-- <div class="mb-5" id="sec-row">
              <div id="sec-column">
                  <a href="#">
                    <div id="sec-container">
                      <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" loading="lazy" class="img-fluid" id="img" alt="Galley Image" style="position: relative;">
                    
                      <div id="overlay">
                        <div id="text">Image 1</div>
                      </div>
                    </div>
                  </a>
              </div>

              <div id="sec-column">
                <a href="#">
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" loading="lazy" class="img-fluid" id="img" alt="Galley Image">
                    <div id="overlay">
                      <div id="text">Image 2</div>
                    </div>
                  </div>
                </a>
              </div>

              <div id="sec-column">
                <a href="#">
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1581093583449-8255a7d46e66?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" loading="lazy" class="img-fluid" id="img" alt="Galley Image">
                    <div id="overlay">
                      <div id="text">Image 3</div>
                    </div>
                  </div>
                </a>
              </div> -->



            <!-- </div> -->

            <!-- <div class="mb-5" id="sec-row"> -->



              <!-- <div id="sec-column">
                <a href="#">
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" loading="lazy" class="img-fluid" id="img" alt="Galley Image">
                    <div id="overlay">
                      <div id="text">Image 4</div>
                    </div>
                  </div>
                </a>
              </div>

              <div id="sec-column">
                <a href="#">
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1580983218765-f663bec07b37?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" loading="lazy" class="img-fluid" id="img" alt="Galley Image">
                    <div id="overlay">
                      <div id="text">Image 5</div>
                    </div>
                  </div>
                </a>
              </div>

              <div id="sec-column">
                <a href="#">
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1580983703451-bf6bb44a9917?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" loading="lazy" class="img-fluid" id="image" alt="Galley Image">
                    <div id="overlay">
                      <div id="text">Image 6</div>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->
            <!-- ************* IMAGE GALLERY END *************  -->



            <!-- ************* TITLE *************  -->
            <!-- <div class="product-row mb-4">
              <div class="carousel-title">
                <h3>Products</h3>
              </div> -->


              <!-- <div class="carousel-link">
                <a href="#">see all products <i class="fas fa-angle-right"></i></a>
              </div> -->


            <!-- </div> -->
            <!-- ************* TITLE END*************  -->



            <!-- ************* PRODUCT CAROUSEL *************  -->
           <!-- <div class="row">
             <div class="col-sm-12">
              <div class="splide" id="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear1.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear2.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear3.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear4.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear5.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear6.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear7.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/switch_gear8.jpg" loading="lazy" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li> -->



                    <!-- <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#" class="text-decoration-none">
                        <div class="card card-size">
                          <img src="img/index_switch_gears_img/" class="card-img-top" alt="Switch Gears Image">
                          <div class="card-body">
                            <p class="card-text text-dark">Switch Gears</p>
                          </div>
                        </div>
                      </a>
                    </li> -->



                  <!-- </ul>
                </div>
              </div>-->
             </div> 
           </div>
            <!-- ************* PRODUCT CAROUSEL *************  -->
          </div>




          <!-- ************* ASIDE SECTION ************* -->
          <!-- <aside class="col-md-3">
            <div class="card mb-3">
              <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" loading="lazy" class="card-img-top" alt="Image">
              <div class="card-body">
                <h5 class="card-title" id="card-title">Card title</h5>
                <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title" id="card-title">Special title treatment</h5>
                <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title" id="card-title">Special title treatment</h5>
                <p class="card-text" id="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title" id="card-title">Special title treatment</h5>
                  <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a><br>
                  <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a><br>
                  <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a><br>
                  <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a><br>
                  <a href="#" class="card-link" id="card-link">Learn more <i class="fas fa-long-arrow-alt-right"></i></a><br>
                </div>
              </div>
            </div>
          </aside> -->
          
          
          
          <!-- WHATSAPP FLOATING SECTION -->
          <div class="whatsapp-section">
            <a href="https://wa.me/9790864096" class="whatsapp_float ripple" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
          </div>
        </div>
      </div>










<!-- ************* FOOTER  *************  -->
<footer class="footer-48201">
      
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-4 pr-md-5">
          <a class="footer-site-logo d-block mb-4"><img src="img/vewonlogo2.png" alt="Vewon Group Logo" width="200"></a>
          <p class="footer-text">Vewon is a fastly growing electrical and mechanical service company. We offer technology based solutions to clients.</p><br>
          <p class="footer-text"><b>Email:</b> vewongroup@gmail.com</p>
          <p class="footer-text"><b>Phone:</b> +91 9790864096</p><br>
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
          <li><a href="solution.php">Testing and Commissioning</a></li>
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


    <!-- SPLIDE SCRIPT -->
    <script src="splide/dist/js/splide.min.js"></script>


    <script src="js/header-10.js"></script>


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
        slidesToShow: 2,
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

     
    <!-- SPLIDE SLIDER SCRIPT -->
    <script>
      new Splide( '#splide', {
        type   : 'slider',
        perPage: 3,
        perMove: 1,
        breakpoints: {
          480: {
            perPage: 1,
          },
          640: {
            perPage: 2,
          },
          1400: {
            perPage: 3,
          },
        }
      } ).mount();
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





    

  </body>
</html>
