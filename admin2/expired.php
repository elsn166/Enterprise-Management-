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
    <link href="css/expired.css" rel="stylesheet">
    
        <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.html">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo" style="font-family: 'Poppins', sans-serif;">
                    <i class="far fa-building" id="icons"></i>
                    <span>Installed Base</span>
                </a>

                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="./site-overview.php" style="font-family: 'Poppins', sans-serif;font-weight: 500;"><i class="material-icons-outlined" style="margin-left: -5px;">grid_view</i>&nbsp;&nbsp;Site Overview</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">add_location_alt</i>&nbsp; Create Location</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">supervisor_account</i>&nbsp;&nbsp;Monitor</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">account_box</i>&nbsp;&nbsp;Manage</a>
                        <a class="collapse-item" href="javascript:void(0);" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">psychology</i>&nbsp;&nbsp;Strategize</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Contract-->
            <li class="nav-item active" id="active">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-family: 'Poppins', sans-serif;">
                    <i class="fas fa-receipt" id="icons"></i>
                    <span>Contract</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="./current.php" style="font-family: 'Poppins', sans-serif;font-weight: 500;"><i class="material-icons-outlined" style="margin-left: -5px;">fact_check</i>&nbsp;&nbsp;Current</a>
                        <a class="collapse-item active-item" href="./expired.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">cancel</i>&nbsp; Expired</a>
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
                    <!--<form-->
                    <!--    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                    <!--    <div class="input-group">-->
                    <!--        <input type="text" class="form-control bg-light border-0 small" placeholder="Search Contract"-->
                    <!--            aria-label="Search" aria-describedby="basic-addon2">-->
                    <!--        <div class="input-group-append">-->
                    <!--            <button class="btn btn-primary" type="button">-->
                    <!--                <i class="fas fa-search fa-sm"></i>-->
                    <!--            </button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</form>-->

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
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Nunito', sans-serif;font-weight: bold;">Expired</h1>
                        <!-- <a href="vendor/login-form/form.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="font-family: 'Poppins', sans-serif; font-weight: bold;"><i class="fas fa-scroll fa-sm text-white-50"></i>&nbsp; Register Asset</a> -->
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
                                <!--<div class="col-lg-3 c/ol-md-6">-->
                                    <!-- Card Section 1 -->
                                    <!-- <div class="card shadow-sm mb-3">
                                        <div class="card-header">
                                            <h4 style="font-size: 1.1rem;">Status</h4>
                                        </div>

                                        <div class="card-body collapse-item">
                                            <form action="" class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Current" id="current">
                                                    <label class="form-check-label" for="current">Current</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Expired" id="expired">
                                                    <label class="form-check-label" for="expired">Expired</label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Renewal requested" id="renewal-request">
                                                    <label class="form-check-label" for="renewal-request">Renewal requested</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->


                                    <!-- Card section 2 -->
                                <!--    <div class="card shadow-sm mb-3">-->
                                <!--        <div class="card-header">-->
                                <!--            <h4 style="font-size: 1.1rem;">Date Range</h4>-->
                                <!--        </div>-->

                                <!--        <div class="card-body">-->
                                <!--            <form action="" class="form-group">-->
                                <!--                <div class="form-group">-->
                                <!--                    <label class="form-label" for="starting-date">Starting Date</label>-->
                                <!--                    <input class="form-input" type="date" value="Starting Date" id="starting-date" style="width: 100%;">-->
                                <!--                </div>-->

                                <!--                <div class="form-group">-->
                                <!--                    <label class="form-label" for="ending-date">Ending-date</label>-->
                                <!--                    <input class="form-input" type="date" value="ending-date" id="ending-date" style="width: 100%;">-->
                                <!--                </div>-->

                                <!--                <button class="btn btn-block btn-outline-primary" type="submit">Submit</button>-->
                                <!--            </form>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>                                -->


                                <!-- Database Table -->

                                <div class="col-lg-12 col-md-6">
                                    <!-- DataTales Example -->
                                    <div class="card shadow-sm mb-4">
                                        <!-- <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered display" id="dataTable2" width="100%" cellspacing="0">
                                                    <thead> 
                                                        <tr>
                                                            <th>Contract Name</th>  <!-- Getting the Asset Name data -->
                                                            <th>Site Name</th>  <!-- Getting the Site Name data -->
                                                            <th>Product Quantity</th>
                                                            <th>Start Date</th> <!-- Getting the installed_date data -->
                                                            <th>End Date</th>   <!-- Getting the Current data -->
                                                            <!-- <th>Status</th> -->
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
                                                        <?php 

                                                        $servername = "localhost";
                                                        $username = "u309950752_vewon";
                                                        $password = "Vewon@123";
                                                        $dbname = "u309950752_vewon";

                                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                                        // Check connection
                                                        if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        // $sql = "SELECT * FROM register_asset";
                                                        $sql = "SELECT * FROM register_asset WHERE diff_old BETWEEN 6 AND 10";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while($row = $result->fetch_assoc()) {

                                                        echo '<tr>
                                                                
                                                        <td> '.$row["name_of_asset"] .'</td>
                                                        <td>' . $row["site_name"] .'</td>
                                                        <td class="text-center">' . $row["quantity"] .'</td>
                                                        <td>' . $row["installed_date"] .'</td>
                                                        <td>' . $row["end_date"] .'</td>

                                                        </tr>';

                                                        }
                                                        } else {
                                                        echo "0 results";
                                                        } 

                                                        ?>
                                                    </tr>
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

    <!-- Page level plugins -->
    <!--<script src="vendor/datatables/jquery.dataTables.min.js"></script>-->
    <!--<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>-->

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level custom scripts -->
    <!--<script src="js/demo/datatables-demo.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.fancytable/dist/fancyTable.min.js"></script>
    

    <!-- Counter JS Plugin CDN and Directory -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="vendor/counter.js/jquery.counterup.min.js"></script>
    <script>
        $('.count').counterUp();
    </script>
    
    
    <script type="text/javascript">
    	$(document).ready(function() {
    		$(".display").fancyTable({
    			sortColumn:0,
    			pagination: true,
    			perPage:10,
    			globalSearch:false
    		});		
    	});
    </script>
    
    
   <script>
        $(document).ready(function() {
            $('#dataTable2').dataTable({
                "scrollX": true,
                // "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": "server2.php"
            } );
        } );
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