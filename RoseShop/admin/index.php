<?php
if (!isset($_SESSION)) 
{
        session_start();
}
if(!isset($_SESSION['admin'])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>
    /* General Styles */
body {
    font-family: 'Nunito', sans-serif;
    background-color: #f8f9fc;
    color: #5a5c69;
}

/* Sidebar */
.sidebar {
    background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.sidebar .nav-item .nav-link {
    color: #fff;
    font-weight: bold;
    padding: 10px 15px;
    transition: all 0.3s ease-in-out;
}

.sidebar .nav-item .nav-link:hover {
    background-color: #2e59d9;
    color: #fff;
    text-decoration: none;
}

.sidebar .sidebar-brand {
    font-size: 1.2rem;
    color: #fff;
    text-transform: uppercase;
}

.sidebar-divider {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

/* Navbar */
.navbar {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
}

.navbar .nav-item .nav-link {
    color: #5a5c69;
    transition: all 0.3s ease-in-out;
}

.navbar .nav-item .nav-link:hover {
    color: #2e59d9;
}

.navbar .dropdown-menu {
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Cards */
.card {
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.03);
}

.card .card-body {
    padding: 20px;
}

.card .text-primary {
    color: #4e73df !important;
}

.card .text-success {
    color: #1cc88a !important;
}

.card .text-warning {
    color: #f6c23e !important;
}

.card .text-info {
    color: #36b9cc !important;
}

/* Buttons */
.btn-primary {
    background-color: #4e73df;
    border-color: #4e73df;
}

.btn-primary:hover {
    background-color: #2e59d9;
    border-color: #2653d4;
}

/* Miscellaneous */
.scroll-to-top {
    background-color: #4e73df;
    color: #fff;
    transition: all 0.3s ease-in-out;
}

.scroll-to-top:hover {
    background-color: #2e59d9;
    color: #fff;
}

.img-fluid {
    border-radius: 15px;
    margin-top: 20px;
}

</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagement"
                    aria-expanded="false" aria-controls="collapseManagement">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Quản lý</span>
                </a>
                <div id="collapseManagement" class="collapse" aria-labelledby="headingManagement">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="menu_product.php">Quản lý danh mục</a>
                        <a class="collapse-item" href="sanpham.php">Quản lý sản phẩm</a>
                        <a class="collapse-item" href="producer.php">Quản lý nhà cung cấp</a>
                        <a class="collapse-item" href="dathang.php">Quản lý đơn hàng</a>
                        <a class="collapse-item" href="khachhang.php">Quản lý khách hàng</a>
                        <a class="collapse-item" href="nhanvien.php">Quản lý nhân viên</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStatistics"
                    aria-expanded="false" aria-controls="collapseStatistics">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Thống kê</span>
                </a>
                <div id="collapseStatistics" class="collapse" aria-labelledby="headingStatistics">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="spbanchay.php">Sản phẩm bán chạy</a>
                        <a class="collapse-item" href="spbancham.php">Sản phẩm bán chậm</a>
                        <a class="collapse-item" href="doanhthuthang.php">Doanh thu theo tháng</a>
                    </div>
                </div>
            </li>


           
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-history"></i>
                    <span>Về trang user</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                               
                            </a>
                            
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                
                            </a>
                            <!-- Dropdown - Messages -->
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
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
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <?php
                    include'connect_db.php';
                    $result = mysqli_query($con, "SELECT count(*) as total from product");
                    $row = mysqli_fetch_assoc($result);
                    $total = $row['total'];

                    ?>
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <a href="sanpham.php">Quản lý sản phẩm</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-window-maximize"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php

                    $result_order = mysqli_query($con, "SELECT count(*) as total_order from orders");
                    $row_order = mysqli_fetch_assoc($result_order);
                    $total_order = $row_order['total_order'];
                    ?>
                        <!-- Earnings (Monthly) Card Example -->
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <a href="dathang.php">Quản lý đơn hàng</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_order;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-window-restore"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $result_dm=mysqli_query($con,"SELECT count(*) as dm from menu_product");
                        $row_dm= mysqli_fetch_assoc($result_dm);
                        $total_dm=$row_dm['dm'];
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <a href="menu_product.php">Quản lý danh mục</a>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php echo $total_dm;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $result_kh=mysqli_query($con,"SELECT count(*) as kh from user");
                        $row_kh=mysqli_fetch_assoc($result_kh);
                        $total_kh=$row_kh['kh'];
                        ?>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <a href="khachhang.php">Quản lý khách hàng</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_kh;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="../images/banner/banner7.jpg" class="img-fluid" style="height: 600px; width: 1800px;">
         </div>
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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

</body>

</html>