<?php
include 'connect_db.php';

$category = mysqli_query($con, "SELECT * FROM `product` ORDER BY `sldb` ASC LIMIT 10 ");
//B1: tính tổng số bản ghi

$total_p = mysqli_num_rows($category);



?>
<!DOCTYPE html>
<html>

<head>
    <style>
/* Global Styling */
body {
    font-family: 'Nunito', sans-serif;
    background-color: #f8f9fc;
    color: #5a5c69;
    margin: 0;
    padding: 0;
}

h2 {
    font-size: 24px;
    font-weight: bold;
    color: #4e73df;
    margin-bottom: 20px;
}

/* Table Styling */
.table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

.table th {
    background-color: #4e73df;
    text-align: center;
    color: white;
    font-weight: bold;
    padding: 15px;
    text-transform: uppercase;
    border-bottom: 3px solid #ddd;
}

.table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

.table tr:hover {
    background-color: #f2f2f2;
}

/* Image Styling */
.table td img {
    width: 120px; /* Increase width for better visibility */
    height: auto; /* Maintain aspect ratio */
    border-radius: 5px;
    object-fit: contain;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

/* Buttons Styling */
.buttons {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
}

.buttons a {
    padding: 10px 15px;
    color: #ffffff;
    background-color: #4e73df;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.buttons a:hover {
    background-color: #3751aa;
}

/* Action Buttons */
.btn {
    padding: 8px 12px;
    font-size: 12px;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-danger {
    background-color: #e74a3b;
}

.btn-danger:hover {
    background-color: #c9302c;
}

/* Pagination Styling */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    list-style: none;
    padding: 0;
}

.pagination li {
    margin: 0 5px;
}

.pagination a {
    display: block;
    padding: 8px 12px;
    color: #4e73df;
    background: #ffffff;
    text-decoration: none;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.pagination a:hover, .pagination .active a {
    background-color: #4e73df;
    color: white;
    border-color: #4e73df;
}

    </style>
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
    <link href="css/admin_style.css" rel="stylesheet">

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
                    <i class="fas fa-fw fa-table"></i>
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
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                            </a>
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
        <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>10 sản phẩm bán chậm nhất</b>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng tồn kho</th>
                                            <th>Số lượng đã bán</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    date_default_timezone_set('Asia/Saigon');
                                    while ($row = mysqli_fetch_array($category)) { 
                                    ?>
                                
                                        <tr> 
                                            <td><img src="../<?= $row['image'] ?>" width="300" height="200"/></td>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= number_format ($row['price']) ?> đ</td>
                                            <td><?=$row['sltk']?></td>
                                            <td><?=$row['sldb']?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                     
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
        <?php
        ?>
    </section>
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

</body>

</html>