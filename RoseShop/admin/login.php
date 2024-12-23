<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    background: linear-gradient(135deg, #6dd5ed, #2193b0);
    font-family: 'Nunito', sans-serif;
}
.card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    overflow: hidden;
}

.bg-login-image {
    background: url('https://source.unsplash.com/600x800/?technology,login') center center;
    background-size: cover;
    border-radius: 15px 0 0 15px;
}

.text-center h1 {
    font-size: 2rem;
    color: #4e73df;
    font-weight: 700;
}

.form-group input {
    width: 100%; /* Chiều rộng bằng với phần tử cha */
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px 15px;
    font-size: 1rem;
    transition: border-color 0.3s, box-shadow 0.3s;
    box-sizing: border-box; /* Đảm bảo padding không làm thay đổi kích thước */
}



.form-group input:focus {
    outline: none;
    border-color: #4e73df;
    box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
}

button[type='submit'] {
    width: 100%; /* Chiều rộng bằng với phần tử cha */
    background: #4e73df;
    color: #fff;
    border: none;
    border-radius: 25px;
    padding: 10px 15px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s;
    box-sizing: border-box; /* Giữ kích thước chuẩn */
}

button[type='submit']:hover {
    background: #2e59d9;
}

.error {
    color: red;
    font-size: 0.9rem;
    margin-bottom: 10px;
}
  </style>
</head>
<body>
    <?php
          include './connect_db.php';

          $error = ""; // Biến chứa thông báo lỗi
          $redirectURL = ""; // Biến để điều hướng dựa trên chức vụ nhân viên

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra xem người dùng đã nhập đủ thông tin chưa
          if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
          } else {
        // Lấy thông tin từ form
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

        // Sử dụng prepared statement để bảo mật
            $query = "SELECT `id`, `username`, `password`, `cvnv` FROM `admin` WHERE `username` = ?";
        // Chuẩn bị câu truy vấn
            $statement = mysqli_prepare($con, $query);

        // Kiểm tra nếu prepared statement đã được tạo thành công
            if ($statement === false) {
              die('Lỗi khi chuẩn bị truy vấn: ' . mysqli_error($con));
            }

        // Liên kết các tham số vào prepared statement
            mysqli_stmt_bind_param($statement, "s", $username);

        // Thực thi câu truy vấn
            mysqli_stmt_execute($statement);

        // Lấy kết quả
            $result = mysqli_stmt_get_result($statement);

            if (mysqli_num_rows($result) > 0) {
              $admin = mysqli_fetch_assoc($result);            
              if ( $username ==$admin['username']&& $password== $admin['password']) {
                // Đăng nhập thành công, lưu thông tin vào session
                $_SESSION['admin'] = $admin;

                // Kiểm tra chức vụ nhân viên và điều hướng
                switch ($admin['cvnv']) {
                    case 1: // Nhân viên bán hàng
                        $redirectURL = "indexnv.php";
                        break;
                    case 2: // Nhân viên kho
                        $redirectURL = "indexnvk.php";
                        break;
                    case 0: // Admin
                        $redirectURL = "index.php";
                        break;
                    default:
                        $error = "Chức vụ không hợp lệ.";
                        break;
                }
            } else {
                // Mật khẩu không chính xác
                $error = "Mật khẩu không chính xác.";
            }
        } else {
            // Không tìm thấy tài khoản
            $error = "Tên đăng nhập không tồn tại.";
        }

        // Đóng prepared statement
        mysqli_stmt_close($statement);
    }

    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($con);

    // Nếu có URL điều hướng, thực hiện điều hướng
    if (!empty($redirectURL)) {
        header("Location: $redirectURL");
        exit;
    }
}
?> 
</body>
<body class="bg-gradient-primary">

    <?php
    if(empty($_SESSION['admin'])){ ?>
        <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="https://t4.ftcdn.net/jpg/03/08/33/75/360_F_308337583_CahQnaQMDdhkNnAY7Q0k7dhZZFCEmj7p.jpg" style="height: 500px; width: 500px;" />
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php 
                                    // Hiển thị lỗi nếu có
                                    if (!empty($error)) { ?>
                                        <div class="error" style="color: red; width: 100%;"><?= htmlspecialchars($error) ?></div>
                                    <?php } ?>
                                    <form class="col s12" action="" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <input class='validate' type='text' name='username' placeholder="Nhập username" />
                                        </div>
                                        <div class="form-group">
                                            <input class='validate' type='password' name='password' placeholder="Nhập password"/>
                                        </div>
                                       
                                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Đăng nhập</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?php } else { 
        // Nếu đã đăng nhập, điều hướng đến trang phù hợp với chức vụ
        header("Location: $redirectURL");
        exit;
    } ?> 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>