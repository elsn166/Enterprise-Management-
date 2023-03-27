<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Grid automation and Remote Monitoring | Vewon Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit= 0" />
    
    <!-- BOOTSTRAP OFFLINE CDN -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       
    <!-- FONT AWESOME ONLINE CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <link rel="stylesheet" href="video-popup/css/modal-video.min.css">




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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/grid_auto.css" />
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
                  <li><a class="dropdown-item" href="design_engg.php">Design Engineering and Energy Systems</a></li>
                  <li><a class="dropdown-item" href="grid_auto.php">Grid automation and Remote Monitoring</a></li>
                  <li><a class="dropdown-item" href="test_comm.php">Testing and Commissioning</a></li>
                  <li><a class="dropdown-item" href="network.php">Network Co-ordination Studies</a></li>
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
                  <li><a class="font-child" href="design_engg.php">Design Engineering and Energy Systems</a></li>
                  <li><a class="font-child" href="grid_auto.php">Grid automation and Remote Monitoring</a></li>
                  <li><a class="font-child" href="test_comm.php">Testing and Commissioning</a></li>
                  <li><a class="font-child" href="network.php">Network Co-ordination Studies</a></li>
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
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade mb-3" data-bs-touch="true" data-bs-ride="carousel">
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://s7e3a.scene7.com/is/image/hitachiabbpowergrids/organization-structure:64-25?wid=1440&hei=563&fmt=webp-alpha&fit=crop%2C1" class="d-block w-100" alt="Image">
          <div class="caption">
            <h1 class="h1">Grid automation and Remote Monitoring</h1>
            <!-- <div class="para">
              <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
            </div> 
            <a class="btn btn-primary learn-more-btn js-modal-btn" data-video-id="iYV4c-zwotU" role="button">Watch Video</a> -->
          </div>
        </div>

        <!-- <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1586614940065-4a589c27fb19?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=747&q=80" class="d-block w-100" alt="image">
          <div class="caption">
            <h1 class="h1">Second slide label</h1>
            <div class="para">
              <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
            </div>
            <a class="btn btn-primary learn-more-btn js-modal-btn" data-video-id="uIgO1bf1UMs" href="#" role="button">Watch Video</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="Image">
          <div class="caption">
            <h1 class="h1">Third slide label</h1>
            <div class="para">
              <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
            </div>
            <a class="btn btn-primary learn-more-btn js-modal-btn" data-video-id="e60Tsu7xPDc" role="button">Watch Video</a>
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




    <!-- MAIN CONTENT STARTS -->

    <!-- IMAGE BANNER -->
    <div class="container-fluid wrapper" id="container">
        <!-- <div class="row">
            <div class="col-12"> -->
  
  



      <div class="card-section1">
        <div class="row">
            <div class="col-md">
                <div class="card mt-2 mb-3">
                    <div class="card-body">
                      <!-- <div class="card-text-section">
                        <h3>Our Solutions</h3>
                      </div> -->
                        <ul class="d-flex">
                            <li class="row no-gutters list-row">
                                <div class="col-md-6 image-card-section">
                                    <div class="card-image">
                                        <img src="https://media.istockphoto.com/photos/smart-asian-glassses-engineer-working-site-inspector-hand-use-laptop-picture-id1213860395?b=1&k=20&m=1213860395&s=170667a&w=0&h=WxZP3sZCeYvBvtQw8Cx9mZXjGTCqPQuytd-h39DNvPo=" alt="Architect Image">
                                    </div>
                                </div>


                                <div class="col-md-6 card-text-section">
                                    <!-- <div class="card-title">
                                        <h3>Medium & Low Voltage Products</h3>
                                    </div> -->

                                    <div class="card-textline-section mt-5">
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
  
      <!-- IMAGE BANNER -->
      



      <!-- PRODUCT CARD TITLE -->
      <!-- <div class="product-card-title">
        <h3>Explore our low-voltage product categories</h3>
      </div> -->



      <!-- PRODUCT CARD SECTION -->
        <!-- <div class="row g-0 mb-5">
          <div class="col">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="splide" id="splide">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://media.istockphoto.com/photos/blue-electric-industrial-motor-picture-id521803718?k=6&m=521803718&s=612x612&w=0&h=0SPIEllR61hm6wMNQUKPQHFzHOf-Flrd6GGH-XT0yEg=" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://5.imimg.com/data5/VR/BD/VL/SELLER-28779644/hindustan-electric-motors-500x500.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHaZkgNkun2ZT7Zrw4DSv-moWzMVEw4cvmFt4Rs2vdcCO9dpHbmsiZEzpOVtQ7PcZggbg&usqp=CAU" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://www.turkishexportal.com/photo/d6610bdd76664838af0c1831d3a0e540/e475f8828803470b83ce25c9312e4cc9.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://media.istockphoto.com/photos/blue-electric-industrial-motor-picture-id521803718?k=6&m=521803718&s=612x612&w=0&h=0SPIEllR61hm6wMNQUKPQHFzHOf-Flrd6GGH-XT0yEg=" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://5.imimg.com/data5/VR/BD/VL/SELLER-28779644/hindustan-electric-motors-500x500.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHaZkgNkun2ZT7Zrw4DSv-moWzMVEw4cvmFt4Rs2vdcCO9dpHbmsiZEzpOVtQ7PcZggbg&usqp=CAU" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://www.turkishexportal.com/photo/d6610bdd76664838af0c1831d3a0e540/e475f8828803470b83ce25c9312e4cc9.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://media.istockphoto.com/photos/blue-electric-industrial-motor-picture-id521803718?k=6&m=521803718&s=612x612&w=0&h=0SPIEllR61hm6wMNQUKPQHFzHOf-Flrd6GGH-XT0yEg=" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="splide__slide">
                        <a href="small_business_products.php" class="text-decoration-none">
                          <div class="card card-size">
                            <img src="https://5.imimg.com/data5/VR/BD/VL/SELLER-28779644/hindustan-electric-motors-500x500.jpg" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                              <p class="card-text text-dark">Product Name</p>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      <!-- PRODUCT CARD SECTION -->
        



      <!-- CARD SECTION 2-->
        <!-- <div class="title-card-section2">
          <div class="title-section2">
            <h3>Featured low-voltage electrical distribution products</h3>
          </div>
        </div>





        <div class="card-section2">
          <div class="row">
            <div class="col col-12">
              <div class="row">
                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1565120130276-dfbd9a7a3ad7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1507209281643-9cddb381dcea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1555436169-20e93ea9a7ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1537111261224-6fa49cecda2f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1569012871812-f38ee64cd54c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="card shadow-sm mb-2">
                    <img src="https://images.unsplash.com/photo-1573167710701-35950a41e251?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- CARD SECTION 2 ENDS -->



        <!-- CARD SECTION 3 STARTS -->
        <!-- <div class="card-section3">
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow-sm">
                <img src="https://images.unsplash.com/photo-1573164574397-dd250bc8a598?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <div class="card shadow-sm">
                <img src="https://images.unsplash.com/photo-1573164574048-f968d7ee9f20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Go somewhere <span><i class="fas fa-angle-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- CARD SECTION 3 ENDS -->
      



        <!-- CARD SECTION 4 STARTS -->
        <!-- <div class="row">
          <div class="col col-12 col-lg-12">
            <div class="card mb-4">
              <div class="card-heading">
                <h3>Need help ?</h3>
              </div>
              <div class="card-body">
                <div class="card-body-inner d-flex justify-content-evenly flex-wrap">
                  <a class="card-link text-decoration-none text-dark" href="#">
                    <div class="card cards" style="width: 12rem;">
                      <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                          <div class="title">
                            Start here !
                          </div>
                          <div class="title-icon">
                            <i class="material-icons-outlined">lightbulb</i>
                          </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </a>

                  <a class="card-link text-decoration-none text-dark" href="#">
                    <div class="card cards" style="width: 12rem;">
                      <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                          <div class="title">
                            Contact Support
                          </div>
                          <div class="title-icon">
                            <i class="fas fa-headset"></i>
                          </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </a>

                  <a class="card-link text-decoration-none text-dark" href="#">
                    <div class="card cards" style="width: 12rem;">
                      <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                          <div class="title">
                            Where to buy?
                          </div>
                          <div class="title-icon">
                            <i class="fas fa-map-marker-alt"></i>
                          </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </a>

                  <a class="card-link text-decoration-none text-dark" href="#">
                    <div class="card cards" style="width: 12rem;">
                      <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                          <div class="title">
                            Browse FAQ
                          </div>
                          <div class="title-icon">
                            <i class="fas fa-question"></i>
                          </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </a>

                  <a class="card-link text-decoration-none text-dark" href="#">
                    <div class="card cards" style="width: 12rem;">
                      <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                          <div class="title">
                            Contact Sales
                          </div>
                          <div class="title-icon">
                            <i class="material-icons-outlined">inventory</i>
                          </div>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- CARD SECTION 4 ENDS -->

   

       
      <!-- WHATSAPP FLOATING SECTION -->
      <div class="whatsapp-section">
        <a href="https://wa.me/9790864096" class="whatsapp_float ripple" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
      </div>
      

      </div>
      <!--********** PRODUCT CONTENT ENDS***********-->












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
 

     <!-- <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script> -->
     <script src="video-popup/js/jquery-modal-video.js"></script>


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


     <!-- SECOND SPLIDER SLIDER -->
     <!-- <script>
       new Splide( '#splider2', {
        type : 'slider',
        perPage : 1,
        perMove : 1,
      } ).mount();
     </script> -->


     <script>
         $(".js-modal-btn").modalVideo();
     </script>

 


   </body>
 </html>