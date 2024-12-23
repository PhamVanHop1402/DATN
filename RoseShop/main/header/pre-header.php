<style type="text/css">
    /* Reset margin và padding cho toàn bộ trang */
body, html {
    margin: 0;
    padding: 0;
}

/* Đặt margin, padding cho nav và các thành phần bên trong */
nav.navbar {
    margin: 0;
    padding: 0;
}

nav.navbar .container {
    padding: 0;
    margin: 0;
    width: 100%; /* Đảm bảo container chiếm toàn bộ chiều rộng */
}

nav.navbar .abc {
    margin: 0;
    padding: 0;
}

nav .form-inline {
    margin: 0;
    padding: 0;
}

/* Căn chỉnh logo */
.navbar-brand {
    margin: 0;
    padding: 0;
}

/* Reset margin và padding cho các nút và input */
nav .input-group {
    margin: 0;
    padding: 0;
}

nav .input-group .form-control {
    margin: 0;
    padding: 5px; /* Nếu muốn nhỏ gọn hơn */
}

nav .btn {
    margin: 0;
    padding: 5px 10px; /* Tùy chỉnh khoảng cách bên trong nút */
}

/* Đảm bảo hai phần đỏ không bị khoảng cách */
.abc {
    flex-shrink: 0;
}

</style>
<nav class="navbar navbar-expand-md bg-white navbar-light">
    <div style="width: 20%; height: 71px; background-color:#0F5B99;" class="abc">
    </div>
        <div class="container"style="background-color: #0F5B99;">
            <!-- logo  -->
           <div>
           <a class="navbar-brand" href="./index.php" style="color: #CF111A;">
           <img src="logo/logo.png" width="70px">
           <b>Rose Shop</b></img></a>
           </div>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form action="tongsp.php" class="form-inline ml-auto my-2 my-lg-0 mr-3" method="GET">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            name="search"  placeholder="Nhập sách cần tìm kiếm..." value = "<?php if(isset($_GET["search"])) { echo $_GET["search"]; } ?>">
                        <div class="input-group-append">
                            <button type="submit" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
               <?php
                include 'taikhoan.php';
               ?>
                <?php
                include 'giohang.php';
               ?>
            </div>
            
        </div>
        <div style="width: 20%; height: 71px; background-color:#0F5B99;" class="abc">
    </div>
    </nav>