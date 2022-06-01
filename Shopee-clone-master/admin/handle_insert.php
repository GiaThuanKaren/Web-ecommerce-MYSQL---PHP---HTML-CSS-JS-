<?php
include('handle_edit.php');
?>
<?php
if (!empty($_POST)) {
    if (isset($_POST['save'])) {
        $nameProduct = $_POST['name-product'];
        $cateProduct = $_POST['cate-product'];
        $priceProduct = $_POST['price-product'];
        $desProduct = $_POST['des-product'];
        $amountProduct = $_POST['amount-product'];
        $unitProduct = $_POST['unit-product'];
        $flagUpdate = false;
        $fileName = '';
        if (isset($_FILES['image-product'])) {
            if (
                $_FILES['image-product']['type'] == 'image/jpeg' ||
                $_FILES['image-product']['type'] == 'image/jpg' ||
                $_FILES['image-product']['type'] == 'image/png' ||
                $_FILES['image-product']['type'] == 'image/gif'
            ) {
                if ($_FILES['image-product']['error'] == 0) {
                    $fileName = $_FILES['image-product']['name'];
                    $file_tmp_name = $_FILES['image-product']['tmp_name'];  // path file tmp in server
                    $path = 'image/' . $_FILES['image-product']['name'];
                    move_uploaded_file($file_tmp_name, $path);
                } else {
                    echo 'File error!';
                }
            } else {
                echo 'The file is not in the correct format!';
            }
        }
        // require_once('./../dbhelper.php');
        require_once('./../define_connect.php');

        // Create a connect to database phpMyAdmin
        $connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE, 3306);

        $sql = "INSERT INTO sanpham (TENSP, SOLUONG, GIA, DONVITINH, 
        MAHANG, IMG, DESCRIPTION, enable) 
            VALUES ('$nameProduct', $amountProduct, $priceProduct, 
        '$unitProduct', '$cateProduct', '$fileName', '$desProduct', 1)";
        echo 'Insert data: '.$sql;
        mysqli_query($connect, $sql);

        require_once('./../sql_close.php');

        header('Location: admin.php?page=product');

    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nameProduct = $_POST['name-product'];
        $cateProduct = $_POST['cate-product'];
        $priceProduct = $_POST['price-product'];
        $desProduct = $_POST['des-product'];
        $amountProduct = $_POST['amount-product'];
        $unitProduct = $_POST['unit-product'];
        $flagUpdate = false;
        $fileName = '';
        if (isset($_FILES['image-product'])) {
            if (
                $_FILES['image-product']['type'] == 'image/jpeg' ||
                $_FILES['image-product']['type'] == 'image/jpg' ||
                $_FILES['image-product']['type'] == 'image/png' ||
                $_FILES['image-product']['type'] == 'image/gif'
            ) {
                if ($_FILES['image-product']['error'] == 0) {
                    $fileName = $_FILES['image-product']['name'];
                    $file_tmp_name = $_FILES['image-product']['tmp_name'];  // path file tmp in server
                    $path = 'image/' . $_FILES['image-product']['name'];
                    move_uploaded_file($file_tmp_name, $path);
                } else {
                    echo 'File error!';
                }
            } else {
                echo 'The file is not in the correct format!';
            }
        }
 
        $sql = "UPDATE sanpham SET TENSP = '$nameProduct', SOLUONG = $amountProduct, 
            GIA = $priceProduct, DONVITINH = '$unitProduct', MAHANG = '$cateProduct', 
            IMG = '$fileName', DESCRIPTION = '$desProduct' WHERE sanpham.MASP = $id";
        echo 'Update product: ' . $sql;
        require_once('./../dbhelper.php');
        execute($sql);

        header('Location: admin.php?page=product');
    }
}
?>


<!-- --     INSERT INTO loai (MASP, TENLOAI)
            -- VALUES ((SELECT MASP FROM sanpham WHERE TENSP = '$nameProduct'), '$typeProduct');
            --     INSERT INTO hang (MALOAI, TENHANG)
            -- VALUES((SELECT MALOAI FROM loai, sanpham WHERE loai.MASP = sanpham.MASP AND
            --     sanpham.MASP = (SELECT MASP FROM sanpham WHERE TENSP = '$nameProduct')), '$cateProduct'); -->