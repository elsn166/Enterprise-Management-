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
    <link href="css/current.css" rel="stylesheet">

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
                        <a class="collapse-item active-item" href="./current.php" style="font-family: 'Poppins', sans-serif;font-weight: 500;"><i class="material-icons-outlined" style="margin-left: -5px;">fact_check</i>&nbsp;&nbsp;Current</a>
                        <a class="collapse-item" href="./expired.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">cancel</i>&nbsp; Expired</a>
                        <!--<a class="collapse-item" href="./renewal.php" style="font-family: 'Poppins', sans-serif;"><i class="material-icons-outlined" style="margin-left: -5px;">autorenew</i>&nbsp; Renewal</a>-->
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
                        <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Nunito', sans-serif;font-weight: bold;">Asset Details</h1>
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
                               

                                <!-- Database Table -->

                                <div class="col-lg-12 col-md-6">
                                    <!-- DataTales Example -->
                                    <div class="card shadow-sm mb-4">
                                        <!-- <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered display" id="mytable" width="100%" cellspacing="0">
                                                    <thead> 
                                                        <tr>
                                                            <th>Assets Name</th>
                                                            <th>Assets No</th>
                                                            <th>installed Date</th>
                                                            <th>End Date</th>
                                                            <th>Difference Year</th></th>
                                                        </tr>
                                                    </thead>
                                                   
                                                    <tbody>

                                                    <tr>
                                                          <?php 
    
                                                            $servername = "localhost";
                                                            $username = "vewon_website";
                                                            $password = "vewon@2021";
                                                            $dbname = "vewon_website";
                                                            
                                                            
                                                            
                                                            // $date1=date('Y/m/d');
                                                            // $time1=date('h:i:sa');
                                                            
                                                            
                                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                                            // Check connection
                                                            if ($conn->connect_error) {
                                                            die("Connection failed: " . $conn->connect_error);
                                                            }
                                                            
                                                                                                        
                                                            
                                                            $sql = "SELECT name_of_asset, asset_no,installed_date,end_date,diff_old FROM register_asset ";
                                                            $result = $conn->query($sql);
                                                            
                                                            
                                                            
                                                            if ($result->num_rows > 0) {
                                                                // output data of each row
                                                                while($row = $result->fetch_assoc()) {
                                                            
                                                            
                                                            echo '<tr>
                                                                    
                                                            <td> '.$row["name_of_asset"] .'</td>
                                                            <td>' . $row["asset_no"] .'</td>
                                                            <td>' . $row["installed_date"] .'</td>
                                                            <td>' . $row["end_date"] .'</td>
                                                            <td>' . $row["diff_old"] .'</td>
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
                                
                                <div class="pagination-container">
                                    <nav>
                                        <ul class="pagination"></ul>
                                    </nav>
                                </div>
                                
                            </div>
                        </div>
                    </div>


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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

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
            $('#dataTable1').dataTable({
                "scrollX": true,
                // "pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": "server1.php"
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
    
    
    <!--For Pagination and sorting-->
    <script>
        var table = '#mytable'
        $('#maxRows').on('change', function(){
            $('.pagination').html('')
            var trnum = 0
            var maxRows = parseInt($(this).val())
            var totalRows = $(table+' tbody tr').length
            $(table+' tr:gt(0)').each(function(){
               trnum++
               if(trnum >maxRows){
                   $(this).hide()
               }
               if(trnum <= maxRows){
                   $(this).show()
               }
            });
            if(totalRows > maxRows){
                var pagenum = Math.ceil(totalRows/maxRows)
                for(var i=1;i<=pagenum;){
                    $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
                }
            }
            $('.pagination li:first-child').addClass('active')
            $('.pagination li').on('click', function(){
                var pageNum = $(this).attr('data-page')
                var trIndex = 0;
                $('.pagination li').removeClass('active')
                $(this).addClass('active')
                $(table+ 'tr:gt(0)').each(function(){
                    trIndex++
                    if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum) - maxRows)){
                        $(this).hide()
                    } else{
                        $(this).show()
                    }
                })
            })
        });
        
        $(function(){
            $('table tr:eq(0)').prepend('<th>Contract Name</th>')
            var contractName = 0
            $('table tr:gt(0)').each(function({
                contractName++
                $(this).prepend('<td>'+contractName+'</td>')
            }));
        })
    </script>
    
    
    
    

</body>

</html>
