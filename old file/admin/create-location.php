<?php
    
    session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | Vewon Group</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">    

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="css/create-location.css" rel="stylesheet">

    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.php">
                <div class="brand-logo-img">
                    <img src="img/vewonlogo3.png" alt="Vewon Group Logo">
                </div>
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-3">

            <!-- Nav Item - Overview -->
            <li class="nav-item active">
                <a class="nav-link" href="./index.php" style="font-family: 'Poppins', sans-serif;">
                    <i class="fas fa-th" id="icons"></i>
                    <span>Overview</span>
                </a>
            </li>

            <!-- Nav Item - Installed Base -->
            <li class="nav-item active" id="active">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo" style="font-family: 'Poppins', sans-serif;">
                    <i class="far fa-building" id="icons"></i>
                    <span>Installed Base</span>
                </a>

                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="./site-overview.php" style="font-family: 'Poppins', sans-serif;font-weight: 500;"><i class="material-icons-outlined" style="margin-left: -5px;">grid_view</i>&nbsp;&nbsp;Site Overview</a>
                        <a class="collapse-item active-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">add_location_alt</i>&nbsp; Create Location</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">supervisor_account</i>&nbsp;&nbsp;Monitor</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">account_box</i>&nbsp;&nbsp;Manage</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">psychology</i>&nbsp;&nbsp;Strategize</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Contract-->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-family: 'Poppins', sans-serif;">
                    <i class="fas fa-receipt" id="icons"></i>
                    <span>Contract</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="./current.php" style="font-family: 'Poppins', sans-serif;font-weight: 500;"><i class="material-icons-outlined" style="margin-left: -5px;">fact_check</i>&nbsp;&nbsp;Current</a>
                        <a class="collapse-item" href="./expired.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">cancel</i>&nbsp; Expired</a>
                        <a class="collapse-item" href="./renewal.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">autorenew</i>&nbsp; Renewal</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Service Visits-->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="font-family: 'Poppins', sans-serif;">
                    <i class="fas fa-tools" id="icons"></i>
                    <span>Service Visits</span>
                </a>

                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="./upcoming.php" style="font-family: 'Poppins', sans-serif;font-weight: 500;"><i class="material-icons-outlined" style="margin-left: -5px;">upcoming</i>&nbsp;&nbsp;Upcoming</a>
                        <a class="collapse-item" href="./ongoing.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">arrow_forward</i>&nbsp; Ongoing</a>
                        <a class="collapse-item" href="./past.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">arrow_back</i>&nbsp; Past</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search Installed Base"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!--<li class="nav-item dropdown no-arrow d-sm-none">-->
                        <!--    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"-->
                        <!--        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                        <!--        <i class="fas fa-search fa-fw"></i>-->
                        <!--    </a>-->
                            <!-- Dropdown - Messages -->
                        <!--    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"-->
                        <!--        aria-labelledby="searchDropdown">-->
                        <!--        <form class="form-inline mr-auto w-100 navbar-search">-->
                        <!--            <div class="input-group">-->
                        <!--                <input type="text" class="form-control bg-light border-0 small"-->
                        <!--                    placeholder="Search for..." aria-label="Search"-->
                        <!--                    aria-describedby="basic-addon2">-->
                        <!--                <div class="input-group-append">-->
                        <!--                    <button class="btn btn-primary" type="button">-->
                        <!--                        <i class="fas fa-search fa-sm"></i>-->
                        <!--                    </button>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </form>-->
                        <!--    </div>-->
                        <!--</li>-->

<!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i> -->
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"  id="sess" ><?php echo $_SESSION['fullname']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/user_profile.png" alt="User">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item btn" id="logout"    onclick="logou()">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Nunito', sans-serif;font-weight: bold;">Create Location</h1>
                        <!-- <a href="login-form/form.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="font-family: 'Poppins', sans-serif; font-weight: bold;"><i class="fas fa-scroll fa-sm text-white-50"></i>&nbsp; Register Asset</a> -->
                    </div>



                    <!-- Filter Tltle Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h6><i class="fas fa-filter"></i> Filter by</h6>
                        </div>
                    </div>



                    <!-- Main Content -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card mb-3 shadow-sm">
                                        <div class="card-body">
                                            <ul class="list-unstyled d-block">
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselistone" aria-expanded="true" aria-controls="collapselistone" style="font-family: 'Poppins', sans-serif;display: flex;justify-content: space-between;">
                                                        <span style="font-size: 0.8rem;">ABC Company-Boston-SITE</span>
                                                        <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i>
                                                        <!-- <i class="fas fa-angle-down" style="float: right
                                                        ;text-align: center;"></i> -->
                                                        <!-- <i class="fas fa-receipt" id="icons"></i> -->
                                                    </a>
                                    
                                                    <div id="collapselistone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buildinga" aria-expanded="true" aria-controls="collapselist1buildinga" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building A <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist1buildinga" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingaitemone" aria-expanded="true" aria-controls="collapselist1buidingaitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingaitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingaitemtwo" aria-expanded="true" aria-controls="collapselist1buidingaitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingaitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingaitemthree" aria-expanded="true" aria-controls="collapselist1buidingaitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingaitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingaitemfour" aria-expanded="true" aria-controls="collapselist1buidingaitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingaitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingaitemfive" aria-expanded="true" aria-controls="collapselist1buidingaitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingaitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>



                                                            <!--***** Building B *****-->



                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buildingb" aria-expanded="true" aria-controls="collapselist1buildingb" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building B <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist1buildingb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingbitemone" aria-expanded="true" aria-controls="collapselist1buidingbitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingbitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingbitemtwo" aria-expanded="true" aria-controls="collapselist1buidingbitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingbitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingbitemthree" aria-expanded="true" aria-controls="collapselist1buidingbitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingbitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingbitemfour" aria-expanded="true" aria-controls="collapselist1buidingbitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingbitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist1buidingbitemfive" aria-expanded="true" aria-controls="collapselist1buidingbitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist1buidingbitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>



                                                <!--****** Second Dropdown ******-->


                                                <li class="nav-item">
                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselisttwo" aria-expanded="true" aria-controls="collapselisttwo" style="font-family: 'Poppins', sans-serif;display: flex;justify-content: space-between;">
                                                        <span style="font-size: 0.8rem;">ABC Company-Creteil South Paris-SITE</span>
                                                        <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i>
                                                        <!-- <i class="fas fa-angle-down" style="float: right
                                                        ;text-align: center;"></i> -->
                                                        <!-- <i class="fas fa-receipt" id="icons"></i> -->
                                                    </a>
                                    
                                                    <div id="collapselisttwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buildinga" aria-expanded="true" aria-controls="collapselist2buildinga" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building A <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist2buildinga" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingaitemone" aria-expanded="true" aria-controls="collapselist2buidingaitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingaitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingaitemtwo" aria-expanded="true" aria-controls="collapselist2buidingaitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingaitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingaitemthree" aria-expanded="true" aria-controls="collapselist2buidingaitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingaitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingaitemfour" aria-expanded="true" aria-controls="collapselist2buidingaitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingaitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingaitemfive" aria-expanded="true" aria-controls="collapselist2buidingaitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingaitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>



                                                            <!--***** Building B *****-->



                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buildingb" aria-expanded="true" aria-controls="collapselist2buildingb" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building B <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist2buildingb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingbitemone" aria-expanded="true" aria-controls="collapselist2buidingbitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingbitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingbitemtwo" aria-expanded="true" aria-controls="collapselist2buidingbitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingbitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingbitemthree" aria-expanded="true" aria-controls="collapselist2buidingbitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingbitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingbitemfour" aria-expanded="true" aria-controls="collapselist2buidingbitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingbitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist2buidingbitemfive" aria-expanded="true" aria-controls="collapselist2buidingbitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist2buidingbitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>




                                                <!-- Third Dropdown -->



                                                <li class="nav-item">
                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselistthree" aria-expanded="true" aria-controls="collapselistthree" style="font-family: 'Poppins', sans-serif;display: flex;justify-content: space-between;">
                                                        <span style="font-size: 0.8rem;">ABC Company-La Defence Paris-SITE</span>
                                                        <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i>
                                                        <!-- <i class="fas fa-angle-down" style="float: right
                                                        ;text-align: center;"></i> -->
                                                        <!-- <i class="fas fa-receipt" id="icons"></i> -->
                                                    </a>
                                    
                                                    <div id="collapselistthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buildinga" aria-expanded="true" aria-controls="collapselist3buildinga" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building A <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist3buildinga" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingaitemone" aria-expanded="true" aria-controls="collapselist3buidingaitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingaitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingaitemtwo" aria-expanded="true" aria-controls="collapselist3buidingaitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingaitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingaitemthree" aria-expanded="true" aria-controls="collapselist3buidingaitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingaitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingaitemfour" aria-expanded="true" aria-controls="collapselist3buidingaitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingaitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingaitemfive" aria-expanded="true" aria-controls="collapselist3buidingaitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingaitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">FRoom 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>



                                                            <!--***** Building B *****-->



                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buildingb" aria-expanded="true" aria-controls="collapselist3buildingb" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building B <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist3buildingb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingbitemone" aria-expanded="true" aria-controls="collapselist3buidingbitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingbitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingbitemtwo" aria-expanded="true" aria-controls="collapselist3buidingbitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingbitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingbitemthree" aria-expanded="true" aria-controls="collapselist3buidingbitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingbitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingbitemfour" aria-expanded="true" aria-controls="collapselist3buidingbitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingbitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist3buidingbitemfive" aria-expanded="true" aria-controls="collapselist3buidingbitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist3buidingbitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>



                                            
                                                <!-- Fourth Dropdown -->



                                                <li class="nav-item">
                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselistfour" aria-expanded="true" aria-controls="collapselistfour" style="font-family: 'Poppins', sans-serif;display: flex;justify-content: space-between;">
                                                        <span style="font-size: 0.8rem;">ABC Company-Les Corts Barcelona-SITE</span>
                                                        <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i>
                                                        <!-- <i class="fas fa-angle-down" style="float: right
                                                        ;text-align: center;"></i> -->
                                                        <!-- <i class="fas fa-receipt" id="icons"></i> -->
                                                    </a>
                                    
                                                    <div id="collapselistfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buildinga" aria-expanded="true" aria-controls="collapselist4buildinga" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building A <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist4buildinga" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingaitemone" aria-expanded="true" aria-controls="collapselist4buidingaitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingaitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingaitemtwo" aria-expanded="true" aria-controls="collapselist4buidingaitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingaitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingaitemthree" aria-expanded="true" aria-controls="collapselist4buidingaitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingaitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingaitemfour" aria-expanded="true" aria-controls="collapselist4buidingaitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingaitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingaitemfive" aria-expanded="true" aria-controls="collapselist4buidingaitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingaitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>



                                                            <!--***** Building B *****-->



                                                            <ul class="list-unstyled">
                                                                <li class="collapse-item">
                                                                    <a class="nav-link collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buildingb" aria-expanded="true" aria-controls="collapselist4buildingb" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;font-weight: 500; display: flex;justify-content: space-between;">Building B <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a>

                                                                    <div id="collapselist4buildingb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 30px;">
                                                                            <ul class="list-unstyled">
                                                                                <!--*** Floor 1 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingbitemone" aria-expanded="true" aria-controls="collapselist4buidingbitemone"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 1 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingbitemone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 2 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingbitemtwo" aria-expanded="true" aria-controls="collapselist4buidingbitemtwo"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 2 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingbitemtwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 3 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingbitemthree" aria-expanded="true" aria-controls="collapselist4buidingbitemthree"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 3 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingbitemthree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 4 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingbitemfour" aria-expanded="true" aria-controls="collapselist4buidingbitemfour"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 4 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingbitemfour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <!--*** Floor 5 ***-->
                                                                                <li>
                                                                                    <a class="nav-link collapse-item collapsed text-dark" href="" data-toggle="collapse" data-target="#collapselist4buidingbitemfive" aria-expanded="true" aria-controls="collapselist4buidingbitemfive"  style="font-family: 'Poppins', sans-serif;font-size: 0.9rem; display: flex;justify-content: space-between;">Floor 5 <i class="material-icons-outlined" style="margin-top: 5px;">expand_more</i></a></a>


                                                                                    <div id="collapselist4buidingbitemfive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                                                        <div class="bg-white py-2 collapse-inner rounded" style="display: grid;padding: 0 15px;">
                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 1</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 2</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 3</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 4</a>

                                                                                            <a class="collapse-item text-dark" href="#&" style="font-family: 'Poppins', sans-serif;font-size: 0.9rem;padding: 5px 15px;">Room 5</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- Database Table -->

                                <div class="col-lg-9 col-md-6">
                                    <!-- DataTales Example -->
                                    <div class="card shadow-sm mb-4">
                                        <!-- <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Assets Name / Serial No</th>
                                                            <th>Assets Tag</th>
                                                            <th>Obsolescence Status</th>
                                                            <th>Under Contract</th>
                                                            <th>Under Warranty</th>
                                                            <!-- <th>Connected</th> -->
                                                        </tr>
                                                    </thead>
                                                    <!-- <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </tfoot> -->
                                                    <tbody>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</a></td>
                                                            <td>APC 1</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 2</td>
                                                            <td class="text-danger"><i class="fas fa-exclamation-circle"></i>&nbsp;Obsolute</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 3</td>
                                                            <td class="text-dark"><i class="fas fa-question-circle"></i>&nbsp;Unknown</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 4</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 5</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 6</td>
                                                            <td class="text-danger"><i class="fas fa-exclamation-circle"></i>&nbsp;Obsolute</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 7</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 8</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 9</td>
                                                            <td class="text-danger"><i class="fas fa-exclamation-circle"></i>&nbsp;Obsolute</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 10</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 11</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 12</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 13</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 14</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 15</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 16</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 17</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 18</td>
                                                            <td class="text-dark"><i class="fas fa-question-circle"></i>&nbsp;unknown</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 19</td>
                                                            <td class="text-danger"><i class="fas fa-exclamation-circle"></i>&nbsp;Obsolute</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 20</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 21</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 22</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 23</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 24</td>
                                                            <td class="text-success"><i class="fas fa-check-circle"></i>&nbsp;Connected</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 25</td>
                                                            <td class="text-dark"><i class="fas fa-question-circle"></i>&nbsp;Unknown</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 26</td>
                                                            <td class="text-danger"><i class="fas fa-exclamation-circle"></i>&nbsp;Obsolute</td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 27</td>
                                                            <td class="text-danger"><i class="fas fa-exclamation-circle"></i>&nbsp;Obsolute</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 28</td>
                                                            <td class="text-dark"><i class="fas fa-question-circle"></i>&nbsp;Unknown</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 29</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-success text-center"><i class="fas fa-check-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-success text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_done</i></td> -->
                                                        </tr>
                                                        <tr>
                                                            <td>APC Symmetra PX Frame 160kW</td>
                                                            <td>APC 30</td>
                                                            <td class="text-warning"><i class="fas fa-exclamation-circle"></i>&nbsp;At risk</td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <td class="text-danger text-center"><i class="fas fa-times-circle" style="font-size: 20px;"></i></td>
                                                            <!-- <td class="text-danger text-center"><i class="material-icons-outlined" style="margin-top: 5px;">cloud_off</i></td> -->
                                                        </tr>
                                                        <!-- <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


               

                    <!-- Content Row -->
                    <!-- <div class="row"> -->

                        <!-- Sites Card Example -->
                        <!-- <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Sites</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-industry fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Assets Card Example -->
                        <!-- <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Assets</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">250</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Contract Card Example -->
                        <!-- <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Contract</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="material-icons-outlined text-gray-300" style="font-size: 48px;">receipt_long</i> -->
                                            <!-- <i class="fas fa-chalkboard fa-2x text-gray-300"></i> -->
                                        <!-- </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Pending Requests Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div> -->

                    <!-- Content Row -->

                    <!-- <div class="row"> -->

                        <!-- Area Chart -->
                        <!-- <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4"> -->
                                <!-- Card Header - Dropdown -->
                                <!-- <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Map Plugin comes here</h6> -->
                                    <!-- <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> -->
                                <!-- </div> -->
                                <!-- Card Body -->
                                <!-- <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Pie Chart -->
                        <!-- <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4"> -->
                                <!-- Card Header - Dropdown -->
                                <!-- <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6> -->
                                    <!-- <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> -->
                                <!-- </div> -->
                                <!-- Card Body -->
                                <!-- <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->




                    <!-- Action Center Section Starts-->
                    <!-- <div class="row mb-3">
                        <div class="col-12">
                            <div class="action-center-title">
                                <h4 class="text-dark" style="font-family: 'Nunito', sans-serif;font-weight: bold;">Action Center</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow h-100 py-2 mb-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="fas fa-tools fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Modernize</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><span class="count">240 &nbsp;</span><span style="font-size: 0.8rem;">&nbsp; Assets</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow h-100 py-2 mb-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="material-icons-outlined text-gray-300" style="font-size: 48px;">inventory</i>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Request Constract</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><span class="count">137 &nbsp;</span><span style="font-size: 0.8rem;">&nbsp; Assets</span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow h-100 py-2 mb-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="material-icons-outlined text-gray-300" style="font-size: 48px;">donut_large</i>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Connect Digitally</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><span class="count">152 &nbsp;</span><span style="font-size: 0.8rem;">&nbsp; Assets</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow h-100 py-2 mb-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="material-icons-outlined text-gray-300" style="font-size: 48px;">today</i>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Renew Contract</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800 text-right count">47</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Action Center Section Ends-->



                    <!-- Updates Section Starts -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="row mb-4" style="justify-content: center;">
                                <div class="col-md-6">
                                    <div class="card shadow h-100" style="justify-content: center;">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body" style="display: flex;justify-content: space-evenly;align-items: center;margin: 0 auto;">
                                                  <i class="material-icons-outlined text-gray-500" style="font-size: 48px;">event_note</i>
                                                  <h6 class="card-subtitle mb-2 text-muted mt-2">Upcoming Service Visits in 4 Weeks</h6>
                                                  <span class="card-text count" style="font-size: 30px;">150</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card shadow h-100" style="justify-content: center;">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body" style="display: flex;justify-content: space-evenly;align-items: center;margin: 0 auto;">
                                                  <i class="material-icons-outlined text-gray-500" style="font-size: 48px;">menu_book</i>
                                                  <h6 class="card-subtitle mb-2 text-muted mt-2">Last Service Visits in 3 Months</h6>
                                                  <span class="card-text count" style="font-size: 30px;">327</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Updates Section Ends -->




                    <!-- Content Row -->
                    <!-- <div class="row"> -->

                        <!-- Content Column -->
                        <!-- <div class="col-lg-6 mb-4"> -->

                            <!-- Project Card Example -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Color System -->
                            <!-- <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> -->

                        <!-- <div class="col-lg-6 mb-4"> -->

                            <!-- Illustrations -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div> -->

                            <!-- Approach -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="font-family: 'Poppins', sans-serif;">&copy; Copyright Vewon Group 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Counter JS Plugin CDN and Directory -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="vendor/counter.js/jquery.counterup.min.js"></script>
    <script>
        $('.count').counterUp();
    </script>

      <script>
        function logou(){
            
            
            $(document).ready(function() {
$('#logout').click(function(event){
	

        var tus = document.getElementById("sess").value;



            
                $.ajax({
                    url: 'logout.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#page-top').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });


});

});
    
    
    window.location.replace='/login.php';
    
            
        }
        
        
        
    </script>


</body>

</html>