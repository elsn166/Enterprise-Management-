<?php 

  session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>About Us | Vewon Group</title>
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

    <!-- FOOTER STYLING -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- SPLIDE SLIDER LINK -->
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="splide/dist/css/themes/splide-sea-green.min.css">

        
    <!-- animate css link -->
    <link rel="stylesheet" href="animate_css/animate.css">

    <!-- VIDEO JS STYLING -->
    <link rel="stylesheet" href="video_js/video-js.css">


    <!-- GLIDER JS STYLING -->
    <link rel="stylesheet" href="glider_js/glider.css">
    
    

    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/about_us.css" />
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
    font-size:0% !important;
    font:none !important;
}
    .panel {
        display: none;
    }
.rotate {
    -moz-transition: all .5s linear;
    -webkit-transition: all .5s linear;
    transition: all .5s linear;
}
.rotate.down {
    -moz-transform:rotate(90deg);
    -webkit-transform:rotate(180deg);
    transform:rotate(180deg);
}
.card-section1
.carousel-inner 
.carousel-item {
    height:50vh;
}
.carousel-inner 
.carousel-item {
    height:65vh;
}

</style>





  </head>
  <body>
    <!-- Header Start -->
  <?php require'header.php'?>






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
                    <li><a class="dropdown-item" href="https://smartdeal.staging-rdegi.com/">Smart Deal</a></li>
                    <li><a class="dropdown-item" href="https://snowaqua.staging-rdegi.com/">Snowaqua</a></li>
                    <li><a class="dropdown-item" href="http://ecomm.staging-rdegi.com/">Winner Oil</a></li>
                    <li><a class="dropdown-item" href="https://residency.staging-rdegi.com">Hotel Management</a></li>
                    <li><a class="dropdown-item" href="http://optimaheat.rdegi.com/">Optima Heat</a></li>
                  </ul>
              </li>

              <li>
                <a class="font" href="javascript:void(0);"><i class="far fa-lightbulb"></i>&nbsp;&nbsp;&nbsp;&nbsp;Solutions</a>
                 <ul>
                    <li><a class="dropdown-item" href="http://dekoev.rdegi.com/">DekhoEV</a></li>
                    <li><a class="dropdown-item" href="https://construction.rdegi.com/">Brahmaa Construction</a></li>
                    <li><a class="dropdown-item" href="https://finance.staging-rdegi.com/login.php">Banking</a></li>
                    <li><a class="dropdown-item" href="https://goldloan.staging-rdegi.com/login.php">Gold Loan</a></li>
                </ul>
              </li>

              <!--<li>-->
              <!--  <a class="font" href="javascript:void(0);"><i class="fas fa-tools"></i>&nbsp;&nbsp;&nbsp;Services</a>-->
              <!-- <ul>-->
              <!--    <li><a class="font-child" href="service.php">Installation & Testing and Commissioning</a></li>-->
              <!--    <li><a class="font-child" href="service.php">Operation & Maintenance Contract Services</a></li>-->
              <!--    <li><a class="font-child" href="service.php">Remote monitoring Web based portal Service</a></li>-->
              <!--    <li><a class="font-child" href="service.php">Spare Parts Supply</a></li>-->
              <!--    <li><a class="font-child" href="service.php">Electro  Mechanical Services</a></li>-->
              <!--    <li><a class="font-child" href="service.php">Human resource for Power related services</a></li>-->
              <!--  </ul> -->
              <!--</li>-->

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
    <div class="carousel-wrapper">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-touch="true" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.rccd.edu/admin/hrer/dec/PublishingImages/DEC_HERO.jpg" class="d-block w-100" alt="Image">
            <div class="banner-text">
              <h3 class="invisible">About Us</h3>
              <p>"POWERING OUR CLIENTS WITH LIMITLESS CAPABILITIES."</p>
              <a class="btn btn-info invisible" role="button" href="product_menu.php">View Our Products</a>
            </div>
          </div>
          <!-- <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1611348586840-ea9872d33411?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="image">
            <div class="caption d-none d-md-block">
              <h1>Second slide label</h1>
              <div class="para">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
              </div>
              <a class="btn btn-primary" href="#" role="button">Learn more</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1608009597797-13bc9b52cfb8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="Image">
            <div class="caption d-none d-md-block">
              <h1>Third slide label</h1>
              <div class="para">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt temporibus recusandae debitis voluptate labore aut. Praesentium et officiis reprehenderit ullam nihil, quisquam ipsum ducimus impedit, aliquam obcaecati suscipit asperiores animi?</p>
              </div>
              <a class="btn btn-primary" href="#" role="button">Learn more</a>
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
    </div>
  <!-- </div>
</div> -->
<!--************* CAROUSEL SLIDER END *************-->




    <!-- MAIN CONTENT STARTS -->

    <!-- IMAGE BANNER -->
    <div class="container-fluid wrapper" id="container">

        <!-- <div class="row mt-3">
          <div class="col-12"> -->
        <!-- <div class="row">
          <div class="col col-lg-12 col-md-12">
            <div class="banner">
              <img src="https://www.bannerhealth.com/-/media/images/project/bh/hero-images/for-employees/employees-hero.ashx" alt="Banner Image" class="img-fluid">
              <div class="banner-text">
                <h3>Small Business</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus explicabo exercitationem sequi officia repellat hic porro corporis doloremque? Ab ea quibusdam reprehenderit quo veniam natus quas distinctio culpa voluptatem hic?</p>
                <a class="btn btn-info" role="button" href="product_menu.html">View Our Products</a>
              </div>
            </div>
          </div>
        </div> -->
        <!-- IMAGE BANNER -->







        <!-- CARD SECTION 1 STARTS -->
        <div class="row" id="row-top">
            <div class="col-md">
                <!-- <div class="card mb-3 border-0"> -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 col-lg-7">
                          <div class="about_content">
                                <div class="card-inner">
                                <div class="card-text-section">
                                    <h3 class="">About Vewon Group</h3>
                                </div>
        
                                <div class="card-textline1">
                                  <p>Vewon is a fastly growing <b class="fw-bold">Electrical and mechanical service company.</b> Our goal is to digitize <b class="fw-bold">the electric power and energy sectors.</b></p>
                                </div>
        
                                <div class="card-textline2">
                                    <p>We can safely say that, in the 20th century even the best of the best futuristics would haven't anticipated the world to attain the revolutionary technological shift we have bestowed with. Thanks to the catapult in the form of electricity that made everything possible! It is the foundation of all modern technologies.
                                    </p>
                                </div>
        
                                <div class="card-textline3">
                                  <p><b class="fw-bold">The 21st century is driven by energy and electricity.</b> Our hunger for energy just grows and grows by miles per day. And this is never stopping. Rather everything expands. We go on to explore new horizons.</p>
                                </div>

                                <div class="card-textline3">
                                  <p><b class="fw-bold">"As the use of electricity and energy happens to rage and rage more, smartest solutions are mandatory to take care of them. That's exactly what we do."</b>&nbsp; - The Team</p>
                                </div>
                                
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6 col-lg-5">
                          <div class="about_contact_form">
                            <div class="contact_wrapper">
                              <div class="contact_form_heading">
                                <h2 class="text-center text-warning font fs-5 pt-3">Get In Touch With Us</h2>
                              </div>

                              <div class="form_cls">
                                <form action="submit1.php" method="POST">
                                  <div class="form-group">
                                    <!-- <label for="name">Full Name</label> -->
                                    <input class="font mt-3" type="text" name="form_name" id="form_name" placeholder="Full Name" required />
                                  </div>
                                  <div class="form-group">
                                    <!-- <label for="email">Email Address</label> -->
                                    <input class="font mt-3" type="email" name="form_email" id="form_email" placeholder="email@domain.tld" required />
                                  </div>
                                   <div class="form-group">
                                    <!-- <label for="name">Company Name</label> -->
                                    <input class="font mt-3" type="text" name="company_name" id="company_name" placeholder="Company Name" required />
                                  </div>
                                  
                                  
                                                                    <div class="form-group">
                                    <!-- <label for="email">Email Address</label> -->
                                    <textarea class="font mt-3" name="form_address" id="form_address" rows="5" placeholder="Your Address"></textarea>
                                  </div>
                                  
                                  

                                  <div class="form-group">
                                    <!-- <label for="email">Email Address</label> -->
                                    <input class="font mt-3" type="text" name="form_phone" id="form_phone" placeholder="Phone No" pattern="^\d{10}$" maxlength="10" required />
                                  </div>

                                  <div class="form-group">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea class="font mt-3" name="form_msg" id="form_msg" rows="5" placeholder="Type Your Message Here..."></textarea>
                                  </div>

                                  <div class="form-group">
                                    <button type="submit" class="btn btn-block w-100 btn-success font mt-2"><i class="far fa-paper-plane"></i>&nbsp; Send</button>
                                  </div>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="card-textline1">
                            <p>Our team is driven by the desire and passion for tomorrow. Vewon team, each and every member, can be defined in these points.</p>
                            
                            <ul class="card-textline1" style="margin-left: 1.4em;">
                              <li><p><i class="fas fa-angle-right text-success"></i>&nbsp;<b class="fw-bold">Dynamic</b> in the way of working</p></li><br>
                              <li><p><i class="fas fa-angle-right text-success"></i>&nbsp;<b class="fw-bold">Take-charge</b> of the future</p></li><br>
                              <li><p><i class="fas fa-angle-right text-success"></i>&nbsp;<b class="fw-bold">Zeal</b> to add values to our consumers</p></li><br>
                              <li><p><i class="fas fa-angle-right text-success"></i>&nbsp;<b class="fw-bold">Concern</b> for the industry and its patron</p></li><br>
                              <li><p><i class="fas fa-angle-right text-success"></i>&nbsp;<b class="fw-bold">Consciousness</b> to do the right thing in a holistic manner</p></li><br>
                            </ul>
                          </div>

                        </div>
                      </div>
                       
                    </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- CARD SECTION 1 ENDS -->






        <!-- CARD SECTION 2 STARTS -->
        <div class="row" id="row-top">
          <div class="col-12">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-5">
                  <div class="image_contain">
                    <img src="https://www.accenture.com/ae-en/insights/future-systems/url(//www.accenture.com/t20200708T053853Z__w__/ae-en/_acnmedia/Accenture/Redesign-Assets/DotCom/Images/Global/Hero/9/Accenture-Future-Systems-Min-520x470.png)" alt="Future Image">
                  </div>
                </div>

                <div class="col-md-6 col-lg-7">
                  <div class="card_content">
                    <div class="card-text-section">
                      <h3>Our thing for future</h3>
                    </div>

                    <div class="card-textline2">
                      <p>For a young enthusiastic group, our dreams for times ahead are full of optimism. Not just in terms of our numbers in scaling, customers, and monetary value;but also become more accountable to holistic and sustainable ways.</p>
                    </div>

                    <div class="card-textline3">
                      <p>We want to hold the best for our Mother Earth. We take the pledge to take bigger sustainability measures as we move forward.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- CARD SECTION 2 ENDS -->






        <!-- CARD SECTION 2 STARTS -->
        <!-- <div class="card-section2">
            <ul class="row list-unstyled">
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.unsplash.com/photo-1512626120412-faf41adb4874?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>

                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.unsplash.com/photo-1622676666769-1a0407cf10a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.pexels.com/photos/842567/pexels-photo-842567.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.unsplash.com/photo-1573495612890-430e48b164df?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.pexels.com/photos/2505026/pexels-photo-2505026.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.pexels.com/photos/6457517/pexels-photo-6457517.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.pexels.com/photos/1181264/pexels-photo-1181264.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="card mb-3">
                        <img src="https://images.pexels.com/photos/6999018/pexels-photo-6999018.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Go somewhere <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div> -->
        <!-- CARD SECTION 2 ENDS -->


        <!-- HERO SECTION IMAGES -->
        <!-- <div class="card mb-3 border-0"> -->
          <div class="card-body">
            <div class="card-text-section">
              <h3>Gallery</h3>
            </div>
            
               <!-- ************* IMAGE GALLERY *************  -->
            <div class="" id="sec-row">
              <div id="sec-column">
                  <a>
                    <div id="sec-container">
                      <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" class="img-fluid" id="img" alt="Galley Image">
                      <!-- <div id="overlay">
                        <div id="text">Image 1</div>
                      </div> -->
                    </div>
                  </a>
              </div>

              <div id="sec-column">
                <a>
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1495314736024-fa5e4b37b979?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=752&q=80" class="img-fluid" id="img" alt="Galley Image">
                    <!-- <div id="overlay">
                      <div id="text">Image 1</div>
                    </div> -->
                  </div>
                </a>
            </div>

              <div id="sec-column">
                <a>
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1505409859467-3a796fd5798e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="img-fluid" id="img" alt="Galley Image">
                    <!-- <div id="overlay">
                      <div id="text">Image 2</div>
                    </div> -->
                  </div>
                </a>
              </div>

              <div id="sec-column">
                <a>
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1462826303086-329426d1aef5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="img-fluid" id="img" alt="Galley Image">
                    <!-- <div id="overlay">
                      <div id="text">Image 3</div>
                    </div> -->
                  </div>
                </a>
              </div>
            <!-- </div> -->

            <!-- <div class="mb-5" id="sec-row"> -->
              <div id="sec-column">
                <a>
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1549637642-90187f64f420?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=753&q=80" class="img-fluid" id="img" alt="Galley Image">
                    <!-- <div id="overlay">
                      <div id="text">Image 4</div>
                    </div> -->
                  </div>
                </a>
              </div>

              <div id="sec-column">
                <a>
                  <div id="sec-container">
                    <img src="https://images.unsplash.com/photo-1462206092226-f46025ffe607?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" class="img-fluid" id="img" alt="Galley Image">
                    <!-- <div id="overlay">
                      <div id="text">Image 5</div>
                    </div> -->
                  </div>
                </a>
              </div>
            </div>
            <!-- ************* IMAGE GALLERY END *************  -->
            </div>

          <!-- </div> -->
        
        </div>
	      <!-- Hero section end  -->
	      
	      

    <!-- WHATSAPP FLOATING SECTION -->
      <div class="whatsapp-section">
        <a href="https://wa.me/9880865733" class="whatsapp_float ripple" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
      </div>

    </div>
    <!-- MAIN CONTENT ENDS -->







<!-- ************* FOOTER  *************  -->
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
        <li><p class="title">HOME</p></li>
        <li><a class="dropdown-item" href="https://vewon.staging-rdegi.com/index716.php">Home</a></li>
        <li><a class="dropdown-item" href="https://vewon.staging-rdegi.com/our_solution.php">Our Product and Services</a></li>
        <li><a class="dropdown-item" href="https://vewon.staging-rdegi.com/support.php">Tech Support</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
            <li><p class="title">Customer Services</p></li>
            <li><a class="dropdown-item" href="https://store.rdegi.com/product-category/auto-mobiles/" target="_blank">Online Sales - Automobiles</a></li>
            <li><a class="dropdown-item" href="https://store.rdegi.com/product-category/manufacturer/" target="_blank">Online Sales -Parts</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">Employee Services</p></li>
          <li><a href="https://optimaheat.rdegi.com/" target="_blank">Project Task Management</a></li>
          <li><a href="https://store.rdegi.com/" target="_blank">Accounting Management</a></li>
          <li><a href="https://smartdeal.staging-rdegi.com/" target="_blank">Inventory Management</a></li>
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
          <p><small>&copy; 2021 All Rights Reserved. Powered by Rdegi.</small></p>
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
        