
<script src="resources/ckeditor/ckeditor.js"></script>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f6f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.main-content {
    width: 70%;
    max-width: 1000px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 10px;
    margin-top: 20px;
}

h1 {
    font-size: 32px;
    color: #333;
    margin-bottom: 30px;
    text-align: center;
}

form table {
    width: 100%;
}

form table tr td {
    padding: 12px 8px;
}

form table tr td label {
    font-size: 16px;
    font-weight: 600;
    color: #444;
}

input[type="text"],
input[type="file"],
textarea,
select {
    width: 100%;
    padding: 14px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 15px;
    margin-top: 8px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

textarea {
    height: 120px;
    resize: vertical;
}

input[type="text"]:focus,
textarea:focus,
select:focus {
    border-color: #5b9bd5;
    box-shadow: 0 0 10px rgba(91, 155, 213, 0.4);
    outline: none;
}

.danhmuc {
    height: 48px;
}

.form-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

input[type="submit"],
input[type="button"].cancel-button {
    padding: 14px 32px;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

input[type="submit"] {
    background-color: #5b9bd5;
    color: white;
}

input[type="submit"]:hover {
    background-color: #4178a9;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(65, 120, 169, 0.3);
}

input[type="button"].cancel-button {
    background-color: #d9534f;
    color: white;
}

input[type="button"].cancel-button:hover {
    background-color: #c9302c;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(201, 48, 44, 0.3);
}

img {
    max-width: 150px;
    border-radius: 10px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    margin-top: 15px;
}

.error {
    color: #d9534f;
    font-size: 16px;
    margin-bottom: 24px;
    text-align: center;
}

.container a {
    display: inline-block;
    color: #5b9bd5;
    text-decoration: none;
    font-size: 16px;
    margin-top: 30px;
    transition: color 0.3s, transform 0.2s;
}

.container a:hover {
    color: #4178a9;
    transform: translateY(-2px);
    text-decoration: underline;
}

ul li {
    list-style-type: none;
    margin: 10px 0;
}

ul li img {
    margin-right: 10px;
}


</style>
<?php
include 'connect_db.php';
include 'function.php';

?>
<div class="main-content">
    <h1><?= !empty($_GET['id']) ? ((!empty($_GET['task']) && $_GET['task'] == "copy") ? "Copy sản phẩm" : "Sửa sản phẩm") : "Thêm sản phẩm" ?></h1>
    <div id="content-box">
        <?php
        $sql = "SELECT * FROM `menu_product` order by id ASC";
        $menu = mysqli_query($con, $sql);
        $menu_pro = mysqli_fetch_all($menu, MYSQLI_ASSOC);
        // echo"<pre>";
        // print_R($menu_pro);
        if (isset($_GET['action']) && ($_GET['action'] == 'add' || $_GET['action'] == 'edit')) {
            if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['price']) && !empty($_POST['price'])) {
                $galleryImages = array();
                if (empty($_POST['name'])) {
                    $error = "Bạn phải nhập tên sản phẩm";
                } elseif (empty($_POST['price'])) {
                    $error = "Bạn phải nhập giá sản phẩm";
                } elseif (!empty($_POST['price']) && is_numeric(str_replace('.', '', $_POST['price'])) == false) {
                    $error = "Giá nhập không hợp lệ";
                } 
                if (isset($_FILES['image']) && !empty($_FILES['image']['name'][0])) {
                    $uploadedFiles = $_FILES['image'];
                    $result = uploadFiles($uploadedFiles);
                    if (!empty($result['errors'])) {
                        $error = $result['errors'];
                    } else {
                        $image = $result['path'];
                    }
                }
                if (!isset($image) && !empty($_POST['image'])) {
                    $image = $_POST['image'];
                }
                if (isset($_FILES['gallery']) && !empty($_FILES['gallery']['name'][0])) {
                    $uploadedFiles = $_FILES['gallery'];
                    $result = uploadFiles($uploadedFiles);
                    if (!empty($result['errors'])) {
                        $error = $result['errors'];
                    } else {
                        $galleryImages = $result['uploaded_files'];
                    }
                }
                if (!empty($_POST['gallery_image'])) {
                    $galleryImages = array_merge($galleryImages, $_POST['gallery_image']);
                }
                if (!isset($error)) {
                    if ($_GET['action'] == 'edit' && !empty($_GET['id'])) { //Cập nhật lại sản phẩm
                        $result = mysqli_query($con, "UPDATE `product` SET `menu_id` = '" . $_POST['menu_id'] . "',`name` = '" . $_POST['name'] . "',`image` =  '" . $image . "', `price` = " . str_replace('.', '', $_POST['price']) . ", `content` = '" . $_POST['content'] . "', `last_updated` = " . time() . " ,`sltk` = '" . $_POST['number_pro'] . "'WHERE `product`.`id` = " . $_GET['id']);
                    } else { //Thêm sản phẩm
                        $result = mysqli_query($con, "INSERT INTO `product` (`id`,`menu_id`, `name`, `image`, `price`, `content`, `created_time`, `last_updated`,`sltk`) VALUES (NULL, '" . $_POST['menu_id'] . "','" . $_POST['name'] . "','" . $image . "', " . str_replace('.', '', $_POST['price']) . ",'" . $_POST['content'] . "', " . time() . ", " . time() . ",'". $_POST['number_pro'] ."')");
                    }
                    if (!$result) { //Nếu có lỗi xảy ra
                        $error = "Có lỗi xảy ra trong quá trình thực hiện.";
                    } else { //Nếu thành công
                        if (!empty($galleryImages)) {
                            $product_id = ($_GET['action'] == 'edit' && !empty($_GET['id'])) ? $_GET['id'] : $con->insert_id;
                            $insertValues = "";
                            foreach ($galleryImages as $path) {
                                if (empty($insertValues)) {
                                    $insertValues = "(NULL, " . $product_id . ", '" . $path . "', " . time() . ", " . time() . ")";
                                } else {
                                    $insertValues .= ",(NULL, " . $product_id . ", '" . $path . "', " . time() . ", " . time() . ")";
                                }
                            }
                            $result = mysqli_query($con, "INSERT INTO `image_library` (`id`, `product_id`, `path`, `created_time`, `last_updated`) VALUES " . $insertValues . ";");
                        }
                    }
                }
            } else {
                $error = "Bạn chưa nhập thông tin sản phẩm.";
            }
        ?>
            <div class="container">
                <div class="error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                <a href="sanpham.php">Quay lại danh sách sản phẩm</a>
            </div>
        <?php
        } else {
            if (!empty($_GET['id'])) {
                $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = " . $_GET['id']);
                $product = $result->fetch_assoc();
                $gallery = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = " . $_GET['id']);
                if (!empty($gallery) && !empty($gallery->num_rows)) {
                    while ($row = mysqli_fetch_array($gallery)) {
                        $product['gallery'][] = array(
                            'id' => $row['id'],
                            'path' => $row['path']
                        );
                    }
                }
            }
        ?>
            <form id="product-form" method="POST" action="<?= (!empty($product) && !isset($_GET['task'])) ? "?action=edit&id=" . $_GET['id'] : "?action=add" ?>" enctype="multipart/form-data">
    <table>
        
        <tr>
            <td><label>Tên sản phẩm:</label></td>
            <td><input type="text" name="name" value="<?= (!empty($product) ? $product['name'] : "") ?>" /></td>
        </tr>
        <tr>
            <td><label>Đơn giá:</label></td>
            <td><input type="text" name="price" value="<?= (!empty($product) ? number_format($product['price'], 0, ",", ".") : "") ?>" /></td>
        </tr>
        <tr>
            <td><label>Số lượng:</label></td>
            <td><input type="text" name="number_pro" value="<?= (!empty($product) ? $product['sltk'] : "") ?>" /></td>
        </tr>
        <tr>
            <td><label>Ảnh đại diện:</label></td>
            <td>
                <?php if (!empty($product['image'])) { ?>
                    <img src="../<?= $product['image'] ?>" /><br />
                    <input type="hidden" name="image" value="<?= $product['image'] ?>" />
                <?php } ?>
                <input type="file" name="image" />
            </td>
        </tr>
        <tr>
            <td><label>Thư viện ảnh:</label></td>
            <td>
                <?php if (!empty($product['gallery'])) { ?>
                    <ul>
                        <?php foreach ($product['gallery'] as $image) { ?>
                            <li>
                                <img src="../<?= $image['path'] ?>" />
                                <a href="gallery_delete.php?id=<?= $image['id'] ?>">Xóa</a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <input multiple type="file" name="gallery[]" />
            </td>
        </tr>
        <tr>
            <td><label>Nội dung:</label></td>
            <td>
                <textarea name="content" id="product-content"> <?= (!empty($product) ? $product['content'] : "") ?></textarea>
            </td>
        </tr>
        <tr>
            <td><label>Danh mục:</label></td>
            <td>
                <select name="menu_id" class="danhmuc">
                    <?php foreach ($menu_pro as $value) { ?>
                        <option value="<?php echo $value['id'] ?>"> <?php echo $value['name'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="form-actions">
                    <input type="submit" title="Lưu sản phẩm" value="Lưu sản phẩm" />
                    <input type="button" value="Hủy" class="cancel-button" onclick="window.location.href='sanpham.php'">
                </div>
            </td>
        </tr>
    </table>
</form>
            <div class="clear-both"></div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                // Phuchuu
                CKEDITOR.replace('product-content');
            </script>
        <?php } ?>
    </div>
</div>

<?php
?>