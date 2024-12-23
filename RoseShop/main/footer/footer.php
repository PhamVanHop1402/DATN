<footer style="background: linear-gradient(135deg, #2c3e50, #34495e);">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="gioithieu">
                    <h3 class="header text-uppercase font-weight-bold">Về Rose Shop</h3>
                    <a href="#" class="white-link">Giới thiệu về Rose Shop</a>
                    <a href="#" class="white-link">Thông tin liên hệ</a>
                    <a href="#" class="white-link">Tin tức</a>
                    <a href="#" class="white-link">Tuyển dụng</a>
                    <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                        data-width="300px" data-layout="button" data-action="like" data-size="small"
                        data-share="true"></div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="hotrokh">
                    <h3 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h3>
                    <a href="cs_baohanh.php" class="white-link">Chính sách bảo hành</a>
                    <a href="#" class="white-link">Hướng dẫn mua hàng trực tuyến</a>
                    <a href="#" class="white-link">Phương thức thanh toán</a>
                    <a href="#" class="white-link">Góp ý, Khiếu Nại</a>
                    
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="lienket">
                    <h3 class="header text-uppercase font-weight-bold">CHÍNH SÁCH CHUNG</h3>
                    <a href="#" class="white-link">Chính sách quy định chung</a>
                    <a href="#" class="white-link">Chính sách vận chuyển</a>
                    <a href="#" class="white-link">Dịch vụ tính phí</a>
                    <a href="#" class="white-link">Bảo mật thông tin khách hàng</a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="ptthanhtoan">
                    <h3 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h3>
                    <img src="images/dichvu/visa-payment.jpg" alt="visa-payment">
                    <img src="images/dichvu/cod-payment.jpg" alt="cod-payment">
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        background: linear-gradient(135deg, #2c3e50, #34495e); /* Gradient màu xanh đậm */
        color: white;
    }

    footer .container {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    footer .header {
        font-size: 18px;
        margin-bottom: 15px;
    }

    footer a {
        display: block;
        margin: 5px 0;
        color: #f39c12;
        text-decoration: none;
        font-size: 14px;
    }

    footer a.white-link {
        color: #ffffff; /* Màu trắng cho các liên kết trong phần hỗ trợ khách hàng */
    }

    footer a:hover {
        color: #f1c40f;
        text-decoration: underline;
    }

    footer .fb-like {
        margin-top: 10px;
    }

    footer .gioithieu, footer .hotrokh, footer .lienket, footer .ptthanhtoan {
        margin-bottom: 20px;
    }

    footer img {
        width: 100%;
        max-width: 120px;
        margin-top: 10px;
        display: block;
    }

    footer img + img {
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        footer .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        footer .col-md-3 {
            margin-bottom: 20px;
        }
    }
</style>
