<?php 

require_once('./../dbhelper.php');

if (isset($_POST['from_date']) && isset($_POST['to_date']) && isset($_POST['chooseSta'])) {

    $select = $_POST['chooseSta'];
    $fromDate = $_POST['from_date'];
    $toDate = $_POST['to_date'];

    if ($select == 'staff') {
        $sql = "SELECT * FROM hoadon, nhanvien WHERE hoadon.MANV = nhanvien.MANV AND NGAYHD BETWEEN '$fromDate' AND '$toDate'";

        $render_filter = executeResult($sql);
        foreach ($render_filter as $filter) {
            echo '
                <div class="product-list__admin">
                    <p class="statistical-idbill">'.$filter['MAHD'].'</p>
                    <p class="statistical-name">'.$filter['HONV']." ".$filter['TENNV'].'</p>
                    <p class="statistical-sdt">'.$filter['SDT'].'</p>
                    <p class="statistical-total">'.$filter['TONGTIEN'].'</p>
                    <p class="statistical-date">'.$filter['NGAYHD'].'</p>
                </div>
            ';
        }
    } else {
        $sql = "SELECT MAHD, NGAYHD, COUNT(MAHD) AS CHD, MAKH, TONGTIEN FROM hoadon ORDER BY CHD DESC";
        $render_filter = executeResult($sql);
        foreach ($render_filter as $filter) {
            echo '
                <div class="product-list__admin">
                    <p class="statistical-idbill">'.$filter['MAHD'].'</p>
                    <p class="statistical-name">'.$filter['MAKH'].'</p>
                    <p class="statistical-sdt">'.$filter['CHD'].'</p>
                    <p class="statistical-total">'.$filter['TONGTIEN'].'</p>
                    <p class="statistical-date">'.$filter['NGAYHD'].'</p>
                </div>
           ';
        }
    }
}
