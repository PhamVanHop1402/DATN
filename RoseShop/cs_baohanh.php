<?php
// Đảm bảo rằng phiên làm việc đã bắt đầu
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chính Sách Bảo Hành | Rose Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">
    <style>
        /* CSS cho phần thân trang */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 30px;
        }

        .policy-content h3 {
            color: #CF111A;
            margin-top: 20px;
        }

        .policy-content p {
            font-size: 16px;
            line-height: 1.5;
        }

        ul {
            list-style-type: square;
            margin-left: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        header {
            background-color: #343a40;
            padding: 10px 0;
        }

        header .navbar {
            margin-bottom: 0;
        }

        header .navbar-brand {
            color: white;
        }

        header .navbar-nav .nav-link {
            color: white;
        }

        header .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php">ROSE SHOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center my-4">Chính Sách Bảo Hành - Rose Shop</h1>

                <div class="policy-content">
                    <h3>1. Thời gian bảo hành</h3>
                    <p>Tất cả các sản phẩm điện tử, máy tính tại Rose Shop đều được bảo hành từ 12 tháng đến 36 tháng, tùy thuộc vào từng loại sản phẩm. Sản phẩm sẽ được bảo hành miễn phí trong suốt thời gian bảo hành nếu có sự cố do lỗi nhà sản xuất.</p>

                    <h3>2. Điều kiện bảo hành</h3>
                    <p>Để được bảo hành, sản phẩm cần đáp ứng các điều kiện sau:</p>
                    <ul>
                        <li>Sản phẩm còn trong thời gian bảo hành.</li>
                        <li>Có hóa đơn mua hàng của Rose Shop.</li>
                        <li>Sản phẩm không bị hư hại do tác động từ bên ngoài (va đập, rơi vỡ, thấm nước, cháy nổ...).</li>
                    </ul>

                    <h3>3. Quy trình bảo hành</h3>
                    <p>Để yêu cầu bảo hành, quý khách cần thực hiện các bước sau:</p>
                    <ol>
                        <li>Liên hệ với bộ phận chăm sóc khách hàng của Rose Shop qua số điện thoại hoặc email.</li>
                        <li>Cung cấp hóa đơn mua hàng và thông tin sản phẩm cần bảo hành.</li>
                        <li>Gửi sản phẩm tới cửa hàng hoặc gửi theo dịch vụ vận chuyển do chúng tôi chỉ định.</li>
                        <li>Chờ nhân viên kỹ thuật kiểm tra và thông báo kết quả.</li>
                    </ol>

                    <h3>4. Các trường hợp không được bảo hành</h3>
                    <p>Sản phẩm sẽ không được bảo hành trong các trường hợp sau:</p>
                    <ul>
                        <li>Sản phẩm đã hết thời gian bảo hành.</li>
                        <li>Sản phẩm bị hư hại do tác động vật lý từ khách hàng (va đập, làm rơi, thấm nước...)</li>
                        <li>Sản phẩm bị thay đổi, sửa chữa không chính thức từ bên ngoài (tháo rời, thay linh kiện không chính hãng...)</li>
                    </ul>

                    <h3>5. Chính sách đổi trả</h3>
                    <p>Chúng tôi chấp nhận đổi trả sản phẩm trong vòng 7 ngày kể từ ngày mua hàng nếu sản phẩm gặp lỗi từ nhà sản xuất, hoặc nếu khách hàng không hài lòng về sản phẩm (chưa sử dụng, còn nguyên bao bì). Quý khách vui lòng liên hệ với chúng tôi để được hướng dẫn chi tiết về quy trình đổi trả.</p>

                    <h3>6. Liên hệ</h3>
                    <p>Để biết thêm chi tiết về chính sách bảo hành, vui lòng liên hệ:</p>
                    <ul>
                        <li>Email: support@roseshop.com</li>
                        <li>Hotline: 1800-1234</li>
                        <li>Địa chỉ: 123 Đường ABC, Quận XYZ, TP.HCM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Rose Shop - Chuyên cung cấp các sản phẩm điện tử chính hãng</p>
        <p>Email: support@roseshop.com | Hotline: 1800-1234</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
