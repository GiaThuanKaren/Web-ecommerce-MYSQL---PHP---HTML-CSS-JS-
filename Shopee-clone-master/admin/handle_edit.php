<?php
require_once('./../dbhelper.php');
$nameProduct = $cateProduct = $idcateProduct = $priceProduct
             = $desProduct = $amountProduct = $unitProduct
             = $imgProduct = '';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];    // Take id by use get server edit

    $flagUpdate = true; // Flag HTML DOM save product -> update

    // $sql = 'SELECT * FROM sanpham WHERE MASP = '.$id.'';
    $query = 'SELECT * FROM sanpham, hang WHERE 
        sanpham.MAHANG = hang.MAHANG AND
        sanpham.MASP = '.$id.'';
    // echo 'Query: '.$query;
    $itemRender = executeResult($query);
    
    foreach ($itemRender as $item) {
        $nameProduct = $item['TENSP'];
        $idcateProduct = $item['MAHANG'];
        $cateProduct = $item['TENHANG'];
        $priceProduct = $item['GIA'];
        $desProduct = $item['DESCRIPTION'];
        $amountProduct = $item['SOLUONG'];
        $unitProduct = $item['DONVITINH'];
        $imgProduct = $item['IMG'];
    }
}

?>
