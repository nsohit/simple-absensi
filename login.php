<?php
    session_start();
    error_reporting(0);
    $conn = mysqli_connect('localhost','root','','db_testing');
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT optima - Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/absensipegawai/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="http://localhost/absensipegawai/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/absensipegawai/assets/libs/css/style.css">
    <link rel="stylesheet" href="http://localhost/absensipegawai/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <meta name="description" content="Management Karyawan" />
	<meta name="keywords" content="management, karyawan, karyawan management, management karyawan, kantor management" />
	<meta name="author" content="Fansa" />
	<link rel="icon" href="https://cdn2.iconfinder.com/data/icons/science-set-3/512/5-512.png" type="image/gif">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body class="bg-dark">
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header bg-primary text-center"><a class="navbar-brand text-white" href="#">BASO MALANG </a><span class="splash-description">INDONESIA</span></div>
            <div class="card-body bg-dark">
                <form id="sign_in" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="username"  placeholder="username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="password" name="password"  placeholder="password">
                    </div>
                    <button type="submit" name="login" value ="login" class="btn btn-primary btn-lg btn-block">MASUK</button>
                </form>

                    <?php
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $login = $_POST['login'];
                    if($login){
                        $masuk = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
                        $benar = $masuk->num_rows;
                        $data = $masuk->fetch_assoc();
                        if($benar >= 1){
                            session_start();
                            if($data['level'] == 'admin'){
                                $_SESSION['admin'] = $data[id_user];
                                header('location:index.php');
                            }
                        }else{
                            echo "<script>alert('Oops... Anda Gagal Login. Periksa Kembali Username dan Password Anda!')</script>";
                        }
                    }
                ?>


            </div>
            <div class="card-footer bg-white p-0  ">
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
        <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
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