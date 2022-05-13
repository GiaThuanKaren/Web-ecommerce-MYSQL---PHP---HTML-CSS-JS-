<?php 
require_once('./../dbhelper.php');

if (isset($_POST['search'])) {
    $name = $_POST['search'];
    $sql = "SELECT * FROM sanpham, hang WHERE 
        sanpham.MAHANG = hang.MAHANG AND
        TENSP LIKE '%$name%'";
    $select_item = executeResult($sql);

    foreach($select_item as $item) {
        echo '
            <div class="product-list__admin">
            <div class="product product-list">
                <img src="./image/'.$item['IMG'].'" alt="">
                <div class="name-des">
                    <h5>'.$item['TENSP'].'</h5>
                    <p>'.$item['DESCRIPTION'].'</p>
                </div>
            </div>
            <p class="category">'.$item['TENHANG'].'</p>
            <p class="amount">'.$item['SOLUONG'].'</p>
            <p class="price">'.$item['GIA'].'.00</p>
            <p class="unit">'.$item['DONVITINH'].'</p>
            <div class="action">
                <a href="?page=product&edit='.$item['MASP'].'">
                    <button
                        class="btn btn-warning" 
                    >
                        Edit
                </button>
                </a>
                <button class="btn btn-danger" onclick="handleDelete('.$item['MASP'].')">Delete</button>
            </div>
            </div>
        ';
    }
}
?>