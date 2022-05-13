<?php
require_once('./../dbhelper.php');
$sql = "SELECT * FROM sanpham, hang WHERE sanpham.MAHANG = hang.MAHANG";
$render_product = executeResult($sql);
foreach ($render_product as $product) {
    echo '
        <div class="product-list__admin">
        <div class="product product-list">
            <img src="./image/'.$product['IMG'].'" alt="">
            <div class="name-des">
                <h5>'.$product['TENSP'].'</h5>
                <p>'.$product['DESCRIPTION'].'</p>
            </div>
        </div>
        <p class="category">'.$product['TENHANG'].'</p>
        <p class="amount">'.$product['SOLUONG'].'</p>
        <p class="price">'.$product['GIA'].'.00</p>
        <p class="unit">'.$product['DONVITINH'].'</p>
        <div class="action">
            <a href="?page=product&edit='.$product['MASP'].'">
                <button
                    class="btn btn-warning" 
                >
                    Edit
            </button>
            </a>
            <button class="btn btn-danger" onclick="handleDelete('.$product['MASP'].')">Delete</button>
        </div>
        </div>
    ';
}

?>