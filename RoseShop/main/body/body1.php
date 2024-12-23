<style>
    .btn-chitiet{
            color: #fff;
    background-color: #ffc107;
    border-color: #ffc107;
    }
/* General Styling */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
}

._1khoi {
    padding: 2rem 0;
    background-color: #fff;
}

.wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin: 0;
}

.abc {
    width: 20%;
    position: sticky; /* Giữ vị trí cố định khi cuộn */
    top: 0; /* Vị trí từ trên cùng */
    height: 100%; /* Chiều cao đầy đủ */
    display: flex;
    align-items: stretch;
}

.abc img {
    width: 100%;
    height: auto; /* Đảm bảo ảnh giữ đúng tỷ lệ */
}

/* Styling cho container */
.container {
    width: 60%; /* Phần giữa */
    padding-left: 0;
}

.khoisanpham {
    padding-bottom: 2rem;
}

.card-item {
    margin-bottom: 1rem;
}

</style>
<section class="_1khoi sachmoi bg-white">
    <div class="wrapper">
    <div style="width: 20%; height:450px;" class="abc">
        <img src="images/banner/logotrai3.jpg" style="width: 100%; height: 100%;">
    </div>
        <div class="container" style="padding-left: 0;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-left pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">Các sản phẩm được ưa chuộng nhiều nhất </h1>
                        <a href="tongsp.php" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                <?php
                                $sql = "SELECT * FROM product WHERE menu_id=18 ORDER BY sldb DESC LIMIT 8";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                       <div class="card-item">
                           <a href="chitietsp.php?id= <?php echo $row['id'] ?>" class="motsanpham"
                               style="text-decoration: none; color: black;" data-toggle="tooltip"
                               data-placement="bottom" title="">
                               <img class="card-img-top anh" src="<?php echo $row['image'];?>" >
                               <div class="card-body noidungsp mt-3">
                                   <h6 class="card-title ten"><?php echo $row['name']; ?></h6>
                                   <a href="chitietsp.php?id= <?php echo $row['id'] ?>  " class="btn btn-success" role="button">Chi tiết</a>
                                   <div class="gia d-flex align-items-baseline">
                                   <div class="giamoi"> <?php  echo number_format ($row['price'])  ?> đ</div> 
                                   </div>
                               </div>
                           </a>
                       </div>
                     </div>
                            <?php
                                }
                            ?>
                </div>
        </div>
        <div style="width:20%; height:450px" class="abc">
            <img src="images/banner/logophai.jpg" style="width:100%; height: 100%;">
        </div>
    </div>

    <div class="wrapper">
    <div style="width: 20%; height:100%;" class="abc">
        <img src="images/banner/logotrai2.jpg" style="width: 100%; height: 400px;">
    </div>
        <div class="container" style="padding-left: 0;">
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                <?php
                                $sql = "SELECT * FROM product WHERE menu_id=2 ORDER BY sldb DESC LIMIT 8";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                       <div class="card-item">
                           <a href="chitietsp.php?id= <?php echo $row['id'] ?>" class="motsanpham"
                               style="text-decoration: none; color: black;" data-toggle="tooltip"
                               data-placement="bottom" title="">
                               <img class="card-img-top anh" src="<?php echo $row['image'];?>" >
                               <div class="card-body noidungsp mt-3">
                                   <h6 class="card-title ten"><?php echo $row['name']; ?></h6>
                                   <a href="chitietsp.php?id= <?php echo $row['id'] ?>  " class="btn btn-success" role="button">Chi tiết</a>
                                   <div class="gia d-flex align-items-baseline">
                                   <div class="giamoi"> <?php  echo number_format ($row['price']) ; ?> VNĐ</div> 
                                   </div>
                               </div>
                           </a>
                       </div>
                     </div>
                            <?php
                                }
                            ?>
                </div>
        </div>
        <div style="width:20%; height:100%" class="abc">
            <img src="images/banner/logophai2.jpg" style="width:100%; height: 400px;">
        </div>
    </div>
    <div class="wrapper">
    <div style="width: 20%; height:100%;" class="abc">
        <img src="images/banner/logotrai4.jpg" style="width: 100%; height: 400px;">
    </div>
        <div class="container">
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                <?php
                                $sql = "SELECT * FROM product WHERE menu_id=1 ORDER BY sldb DESC LIMIT 8";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                       <div class="card-item">
                           <a href="chitietsp.php?id= <?php echo $row['id'] ?>" class="motsanpham"
                               style="text-decoration: none; color: black;" data-toggle="tooltip"
                               data-placement="bottom" title="">
                               <img class="card-img-top anh" src="<?php echo $row['image'];?>" >
                               <div class="card-body noidungsp mt-3">
                                   <h6 class="card-title ten"><?php echo $row['name']; ?></h6>
                                   <a href="chitietsp.php?id= <?php echo $row['id'] ?>  " class="btn btn-success" role="button">Chi tiết</a>
                                   <div class="gia d-flex align-items-baseline">
                                   <div class="giamoi"> <?php  echo number_format ($row['price']) ; ?> VNĐ</div> 
                                   </div>
                               </div>
                           </a>
                       </div>
                     </div>
                            <?php
                                }
                            ?>
                </div>
        </div>
        <div style="width:20%; height:100%" class="abc">
            <img src="images/banner/logophai3.jpg" style="width:100%; height: 400px;">
        </div>
    </div>
    
    </section>
   