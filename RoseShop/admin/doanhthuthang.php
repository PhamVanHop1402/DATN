<?php
include 'connect_db.php';

// Nhận giá trị tháng và năm từ người dùng
$month = isset($_GET['month']) ? intval($_GET['month']) : date('m'); // Mặc định là tháng hiện tại
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');   // Mặc định là năm hiện tại

// Tính khoảng thời gian theo Unix timestamp
$start_of_month = strtotime("{$year}-{$month}-01 00:00:00"); // Đầu tháng
$end_of_month = strtotime("{$year}-{$month}-01 00:00:00 +1 month -1 second"); // Cuối tháng

$totaltt=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê Doanh Thu</title>
    <style>
    /* Tổng quan body */
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
        color: #333;
        line-height: 1.6;
    }

    /* Tiêu đề chính */
    h1 {
        text-align: center;
        color: #4CAF50;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    /* Form chọn tháng/năm */
    form {
        text-align: center;
        margin-bottom: 20px;
    }

    form label {
        font-weight: bold;
        margin-right: 10px;
    }

    form select {
        padding: 5px 10px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    form button {
        padding: 8px 15px;
        font-size: 1rem;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    form button:hover {
        background-color: #45a049;
    }

    /* Bảng dữ liệu */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    table th,
    table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    table th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #ddd;
    }
    .table td img {
    width: 120px; /* Increase width for better visibility */
    height: auto; /* Maintain aspect ratio */
    border-radius: 5px;
    object-fit: contain;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

    /* Tổng doanh thu */
    table tr:last-child td {
        font-weight: bold;
        color: #4CAF50;
        font-size: 1.2rem;
    }

    /* Liên kết "Quay lại" */
    a {
        display: block;
        text-align: center;
        margin-top: 20px;
        text-decoration: none;
        color: #4CAF50;
        font-weight: bold;
        font-size: 1rem;
        transition: color 0.3s;
    }

    a:hover {
        color: #45a049;
    }
</style>

</head>
<body>
    <h1>Thống Kê Doanh Thu</h1>
    <form method="GET" action="">
        <label for="month">Chọn tháng:</label>
        <select name="month" id="month">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?= $i ?>" <?= $i == $month ? 'selected' : '' ?>><?= $i ?></option>
            <?php endfor; ?>
        </select>
        <label for="year">Chọn năm:</label>
        <select name="year" id="year">
            <?php for ($y = 2020; $y <= date('Y'); $y++): ?>
                <option value="<?= $y ?>" <?= $y == $year ? 'selected' : '' ?>><?= $y ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit">Xem thống kê</button>
    </form>
<?php
    $category = mysqli_query($con, "SELECT * FROM `orders` WHERE `status` = 2 AND `last_updated` BETWEEN $start_of_month AND $end_of_month");
                if ($category && mysqli_num_rows($category) > 0) 

                {
    
?>
    <h2>Doanh thu tháng <?= $month ?>/<?= $year ?>:</h2>
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <tr>
            <td>Mã đơn hàng</td>
            <td>Họ tên</td>
            <td>Sản phẩm</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
            <td>Thời gian</td>
            <td>Số tiền</td>
        </tr>
        <?php
                
                while($thongke = mysqli_fetch_assoc($category)){
           
                // Truy vấn chi tiết đơn hàng dựa trên id đơn hàng
                $category_tk = mysqli_query($con, "SELECT * FROM `orders_detail` WHERE `order_id` = '{$thongke['id']}'");
                
                // Kiểm tra có dữ liệu chi tiết đơn hàng không
                
                    while ($row_tk = mysqli_fetch_assoc($category_tk)) {
                        $tien=$row_tk['quantity']*$row_tk['price'];
                        $totaltt= $totaltt+ $tien;
                        ?>
                        
                            <tr>
                                <td><?php echo $thongke['id']; ?></td>
                                <td><?php echo $thongke['name']; ?></td>
                                <td><?php echo $row_tk['product_name']; ?></td>
                                <td><img src="../<?php echo $row_tk['image']; ?>"/> </td>
                                <td><?php echo $row_tk['quantity']; ?></td>
                                <td><?php echo date('d/m/Y H:i:s', $row_tk['time']); ?></td> <!-- Đổi timestamp thành định dạng ngày giờ -->
                                <td><?php echo $tien; ?></td>
                            </tr>
                            <?php
                        
                    }
                }
                
            
            
        ?>
        <tr>
                <td colspan="6">Tổng Doanh Thu</td>
                <td><?php echo $totaltt; ?></td>
        </tr>
           <?php
     }
      else { echo "<tr><td colspan='1' >Không có dữ liệu!!!!!</td></tr>";}?>     
    </table>
    <a href="./index.php">Quay lại</a>
</body>
</html>
