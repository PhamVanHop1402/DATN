<style>
    body {
        font-family: 'Lato', sans-serif;
        background-color: #f4f7f6;
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Canh chỉnh về phía trên */
        height: 100vh; /* Full chiều cao */
        margin: 0;
        padding: 0;
    }

    #edit-notify {
        background-color: #28a745; /* Màu nền xanh lá cây để thể hiện sự thành công */
        color: white; /* Màu chữ trắng để nổi bật trên nền xanh */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Thêm hiệu ứng bóng để làm nổi bật */
        text-align: center;
        max-width: 500px;
        width: 100%; /* Chiếm hết chiều rộng có thể */
        margin: 20px 0; /* Điều chỉnh khoảng cách với form */
        font-family: 'Lato', sans-serif;
        position: relative;
        z-index: 1; /* Đảm bảo thông báo hiển thị trên các phần tử khác */
    }

    #edit-notify h1 {
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    #edit-notify a {
        display: inline-block;
        background-color: #007bff; /* Màu xanh cho nút */
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    #edit-notify a:hover {
        background-color: #0056b3; /* Thay đổi màu khi hover */
    }

    .content {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 500px;
        max-width: 90%;
        text-align: center;
        margin-top: 20px; /* Khoảng cách với thông báo */
    }

    h1, h2 {
        color: #333;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    td {
        padding: 5px;
    }

    h5 {
        margin: 0;
        text-align: left;
        color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="phone"],
    select {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }

    select.gioitinh {
        min-width: 100%;
        height: 40px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        appearance: none;
        cursor: pointer;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .has-error span {
        display: block;
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

</style>

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include './connect_db.php';
    $error = [];
    if(isset($_POST['fullname']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
        $sdt = $_POST['sdt'];
        $gioitinh = $_POST['gioitinh'];

        if(empty($fullname))
        {
            $error['fullname'] ='Bạn chưa nhập tên';
        }
        if(empty($email))
        {
            $error['email'] ='Bạn chưa nhập email';
        }
        if(empty($username))
        {
            $error['username'] ='Bạn chưa nhập tên đăng nhập';
        }
        if(empty($password))
        {
            $error['password'] ='Bạn chưa nhập mật khẩu';
        }
        if($password != $rpassword)
        {
            $error['rpassword'] ='Mật khẩu nhập lại không đúng';
        }
        if(empty($sdt))
        {
            $error['sdt'] ='Bạn chưa nhập sdt';
        }
        if(empty($gioitinh))
        {
            $error['gioitinh'] ='Bạn chưa nhập Giới tính';
        }
        if(empty($error))
        {
        $sql = mysqli_query($con,"INSERT INTO `user`(`fullname`, `email`, `username`, `password`, `sdt`, `gioitinh`, `created_time`, `last_updated`) VALUES ('$fullname','$email', '$username', MD5('$password'),'$sdt', '$gioitinh', " . time() . ", '" . time() . "')");
       
        if($sql)
        {
            ?>
                         <div id="edit-notify" class="box-content">
                                <h1><?=   "Đăng ký tài khoản thành công" ?></h1>
                                <a href="./login.php">Mời bạn đăng nhập</a>
                            </div>
            <?php
        }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="User Register Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="icon" type="logo/png" sizes="32x32" href="logo/logo.png">

</head>
<body>


    <div class="content">
        <div class="main">
            <h2>Đăng ký tài khoản</h2>
            
            <form action="./register.php?action=reg" method="Post" autocomplete="off">
    <table>
        <tr>
            <td><h5>Họ và tên</h5></td>
            <td>
                <input type="text" name="fullname" value="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="has-error">
                <span><?php echo (isset($error['fullname'])) ? $error['fullname'] : '' ?></span>
            </td>
        </tr>

        <tr>
            <td><h5>Email</h5></td>
            <td>
                <input type="email" name="email" value=""/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="has-error">
                <span><?php echo (isset($error['email'])) ? $error['email'] : '' ?></span>
            </td>
        </tr>

        <tr>
            <td><h5>Tài khoản</h5></td>
            <td>
                <input type="text" name="username" value="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="has-error">
                <span><?php echo (isset($error['username'])) ? $error['username'] : '' ?></span>
            </td>
        </tr>

        <tr>
            <td><h5>Mật khẩu</h5></td>
            <td>
                <input type="password" name="password" value=""/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="has-error">
                <span><?php echo (isset($error['password'])) ? $error['password'] : '' ?></span>
            </td>
        </tr>

        <tr>
            <td><h5>Nhập lại mật khẩu</h5></td>
            <td>
                <input type="password" name="rpassword" value=""/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="has-error">
                <span><?php echo (isset($error['rpassword'])) ? $error['rpassword'] : '' ?></span>
            </td>
        </tr>

        <tr>
            <td><h5>SĐT</h5></td>
            <td>
                <input type="phone" name="sdt" value=""/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="has-error">
                <span><?php echo (isset($error['sdt'])) ? $error['sdt'] : '' ?></span>
            </td>
        </tr>

        <tr>
            <td><h5>Giới tính</h5></td>
            <td class="has-error">
                <select name="gioitinh" class="gioitinh">
                    <span>
                        <?php echo (isset($error['gioitinh'])) ? $error['gioitinh']:''?>
                        <option  value="Nam">Nam</option>
                        <option  value="Nữ">Nữ</option>
                    </span>
                    </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Đăng ký">
            </td>
        </tr>
    </table>
</form>

        </div>
    </div>

</body>
</html>
