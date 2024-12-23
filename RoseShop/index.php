<?php
if (!isset($_SESSION)) 
{
        session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Rose Shop</title>
    <meta name="description"
        content="Chuyên cung cấp đầy đủ linh kiện điện tử đáp ứng theo nhu cầu của khách hàng">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">
    <link rel="stylesheet" href="css/sach-moi-tuyen-chon.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="icon" type="logo/png" sizes="32x32" href="">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>img[alt="www.000webhost.com"]{display: none;}
   body {
    position: relative;
    overflow-x: hidden;
}

.snowflake {
    position: absolute;
    top: -50px;  /* Bắt đầu ở trên cùng */
    z-index: 9999;
    color: #ADD8E6;  /* Màu xanh dương nhạt */
    font-size: 24px;
    user-select: none;
    pointer-events: none;
    opacity: 0.9;
    animation: fall 10s linear infinite;
}

@keyframes fall {
    to {
        transform: translateY(100vh);  /* Tuyết rơi xuống dưới */
    }
}



</style>
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
   
    <?php
    include 'main/header/pre-header.php'
    ?>

    <!-- form dang ky khi click vao button tren header-->
   

    <!-- form dang nhap khi click vao button tren header-->



    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->

    <!-- noi dung danh muc sach(categories) + banner slider -->
    <?php
    include 'main/header/danhmuc.php';
    ?>
    <!-- body1  -->
    <?php
    include 'main/body/body1.php';
    ?>
    <!--  cac dich vu :mien phi giao hang, qua tang mien phi ........ -->


    <!-- footer  -->
    <?php
    include 'main/footer/footer.php';
    ?>
    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>
<script type="text/javascript">
   function createSnowflakes() {
    let numberOfSnowflakes = 50;  // Số lượng bông tuyết
    let snowflakesContainer = document.body;

    // Lấy vị trí của phần tử footer
    let footer = document.querySelector('footer');
    let footerTop = footer ? footer.offsetTop : document.body.scrollHeight;

    for (let i = 0; i < numberOfSnowflakes; i++) {
        let snowflake = document.createElement('div');
        snowflake.classList.add('snowflake');
        snowflake.innerHTML = '❄'; // Biểu tượng bông tuyết

        let xPosition = Math.random() * 100; // Vị trí x ngẫu nhiên
        let animationDuration = Math.random() * 3 + 7; // Thời gian rơi ngẫu nhiên (từ 7 đến 10 giây)
        
        snowflake.style.left = `${xPosition}vw`;
        snowflake.style.animationDuration = `${animationDuration}s`;

        // Tính toán vị trí dừng bông tuyết khi đến footer
        let snowflakeFallDistance = footerTop - 100;  // Dừng cách footer một chút (100px)
        snowflake.style.top = `${Math.random() * snowflakeFallDistance}px`;  // Bắt đầu rơi từ vị trí ngẫu nhiên trong khoảng này

        snowflake.style.fontSize = `${Math.random() * 10 + 15}px`; // Kích thước ngẫu nhiên cho bông tuyết

        snowflakesContainer.appendChild(snowflake);
    }
}

window.onload = function() {
    createSnowflakes();
};

</script>


</html>
