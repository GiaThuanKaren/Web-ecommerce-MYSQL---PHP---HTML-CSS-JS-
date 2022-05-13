<?php
session_start();
require_once('./../dbhelper.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sqlStatus = 'UPDATE hoadon SET TINHTRANG = "ĐÃ XỬ LÝ", MANV = ' . $_SESSION['IDStaff'] . ' WHERE MAHD = "' . $id . '"';
    echo $sqlStatus;
    execute($sqlStatus);
}

if (isset($_POST['idb'])) {
    $idb = $_POST['idb'];

    $sql = 'SELECT * FROM chitiethd, sanpham WHERE chitiethd.MASP = sanpham.MASP AND MAHD = "'.$idb.'"';
    $render_detailbill = executeResult($sql);

    foreach ($render_detailbill as $detail_bill) {
        echo '
        <div class="order-detail-menu">
            <div class="order-detail__imagine">
                <img src="./image/'.$detail_bill['IMG'].'" />
            </div>
    
            <div class="order-detail-nameproduct">
                <span class="order-detail__name">'.$detail_bill['TENSP'].'</span>
            </div>
    
            <div class="order-detail__quantity"><span>'.$detail_bill['SLUONG'].'</span></div>
    
            <div class="order-detail__total">'.$detail_bill['DONGIA'].'</div>
        </div>
        ';
    }
}
