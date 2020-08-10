<?php
    session_start();
    error_reporting(0);
        $conn = mysqli_connect('localhost','root','','db_testing');
    if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="http://localhost/danang3/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/danang3/assets/libs/css/style.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="http://localhost/danang3/assets/vendor/bootstrap-select/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/danang3/assets/vendor/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/danang3/assets/vendor/datatables/css/buttons.dataTables.min.css">
    <meta name="description" content="Management Karyawan" />
    <meta name="keywords" content="management, karyawan, karyawan management, management karyawan, kantor management" />
    <meta name="author" content="Fansa" />
    <link rel="icon" href="http://localhost/danang3/assets/images/favicon.png" type="image/gif"><title>Dashboard Pegawai</title>
</head>
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
                <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar bg-dark navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href=""><img src="http://localhost/danang3/image/optima.png" width="45px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </nav>
        </div>

<!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar bg-dark sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Budget Gadget</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                optima menu
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="?views=user"><i class="fa fa-fw fa-home"></i>Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="keluar.php"><i class="fa fa-fw fa-power-off"></i>Keluar </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>            
        </div>


<!-- wraper  -->

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">PT. OPtima </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $views = $_GET['views'];
                        
                        if($views == 'user' || $views ==''){
                                include 'views/user.php';
                            
                        }
                        

                    ?>
                    
                </div>

            </div>
</div>    

<!-- end left sidebar -->
       
            

    <script src="http://localhost/absensipegawai/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="http://localhost/absensipegawai/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="http://localhost/absensipegawai/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="http://localhost/absensipegawai/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="http://localhost/absensipegawai/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="http://localhost/absensipegawai/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="http://localhost/absensipegawai/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="http://localhost/absensipegawai/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="http://localhost/absensipegawai/assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/buttons.flash.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/jszip.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/pdfmake.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/buttons.html5.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/buttons.print.min.js"></script>
    <script src="http://localhost/absensipegawai/assets/vendor/datatables/js/sweetAlert.min.js"></script>    <script>
        </script>
</body>
 
</html>