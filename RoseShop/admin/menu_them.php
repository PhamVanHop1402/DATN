
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
        <div id="content-box">
            <?php
            $sql = "SELECT * FROM `menu_product`";
            $menu = mysqli_query($con,$sql);
            $menu_pro = mysqli_fetch_all($menu,MYSQLI_ASSOC);
            if (isset($_GET['action']) && ($_GET['action'] == 'add' || $_GET['action'] == 'edit')) {
                if (isset($_POST['name']) && !empty($_POST['name']) ) {
                    if (empty($_POST['name'])) {
                        $error = "Bạn phải nhập tên danh mục";
                    } 
                    if (!isset($error)) {
                        if ($_GET['action'] == 'edit' && !empty($_GET['id'])) { //Cập nhật lại sản phẩm
                            $result = mysqli_query($con, "UPDATE `menu_product` SET `id` = '" . $_POST['id'] . "',`name` = '" . $_POST['name'] . "' WHERE `menu_product`.`id` = " . $_GET['id']);
                        } else { //Thêm sản phẩm
                            $result = mysqli_query($con, "INSERT INTO `menu_product` (`id`, `name`) VALUES (NULL, '" . $_POST['name'] . "');");
                        }
                        if (!$result) { //Nếu có lỗi xảy ra
                            $error = "Danh mục đã tồn tại";
                        } 
                    }
                } else {
                    $error = "Bạn chưa nhập thông tin danh mục.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Thêm danh mục thành công" ?></div>
                    <a href = "menu_product.php">Quay lại danh sách danh mục</a>
                </div>
                <?php
            } 
                ?>
                <form id="product-form" method="POST" action="<?= (!empty($product) && !isset($_GET['task'])) ? "?action=edit&id=" . $_GET['id'] : "?action=add" ?>"  enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td><label>Tên danh mục:</label></td>
                            <td><input type="text" name="name" value="<?= (!empty($product) ? $product['name'] : "") ?>" /></td>
                        </tr>
                        <tr>
                        <td colspan="2">
                            <div class="form-actions">
                                <input type="submit" title="Lưu sản phẩm" value="Lưu sản phẩm" />
                                <input type="button" value="Hủy" class="cancel-button" onclick="window.location.href='menu_product.php'">
                            </div>
                        </td>
                    </tr>
                    </table>
                </form>
                <div class="clear-both"></div>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('product-content');
                </script>
        </div>
    </div>

    <?php
?>
