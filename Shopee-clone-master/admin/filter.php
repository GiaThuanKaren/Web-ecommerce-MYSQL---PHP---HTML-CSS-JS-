<?php 

require_once('./../dbhelper.php');

if (isset($_POST['from-date']) && isset($_POST['to-date']) && isset($_POST['selectRole'])) {

    $select = $_POST['selectRole'];

    if ($select = 'staff') {
        $sql = "SELECT * FROM hoadon, nhanvien WHERE hoadon.MANV = nhanvien.MANV AND NGAYHD BETWEEN '".$_POST['from-date']."' AND '".$_POST['to-date']."'";
    
        $render_filter = executeResult($sql);
        foreach ($render_filter as $filter) {
            echo '
                <div class="product-list__admin">
                    <p class="product product-list">'.$filter['MAHD'].'</p>
                    <p class="category">'.$filter['HONV']." ".$filter['TENNV'].'</p>
                    <p class="amount">'.$filter['SDT'].'</p>
                    <p class="price">'.$filter['TONGTIEN'].'</p>
                    <p class="unit">'.$item['NGAYHD'].'</p>
                </div>
            ';
        }
    } else {
        $sql = "SELECT MAHD, NGAYHD, COUNT(MAHD) AS CHD, MAKH, TONGTIEN FROM hoadon ORDER BY CHD DESC";
        $render_filter = executeResult($sql);
        foreach ($render_filter as $filter) {
            echo '
                <div class="product-list__admin">
                    <p class="product product-list">'.$filter['MAHD'].'</p>
                    <p class="category">'.$filter['MAKH'].'</p>
                    <p class="amount">'.$filter['CHD'].'</p>
                    <p class="price">'.$filter['TONGTIEN'].'</p>
                    <p class="unit">'.$item['NGAYHD'].'</p>
                </div>
           ';
        }
    }
}
