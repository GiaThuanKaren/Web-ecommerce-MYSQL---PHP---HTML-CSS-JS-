<?php
session_start();

require('dbhelper.php');

if (isset($_GET['checkout']) && isset($_GET['uuid'])) {
    $productInCart = json_decode(json_decode($_GET['checkout']));
    $uuid = $_GET['uuid'];

    $date = date('Y-m-d H:i:s');
    $total = 0;

    var_dump($productInCart);

    for ($i = 0; $i < count($productInCart); $i++) {
        $total += $productInCart[$i]->SL * $productInCart[$i]->GIA;
    }


    $sql = "INSERT INTO hoadon(MAHD, MAKH, TINHTRANG, NGAYHD, TONGTIEN)
        VALUES ('$uuid', ".$_SESSION['IDCustomer'].", 'ĐANG XỬ LÝ', '$date', ".$total.")";
    execute($sql);

    for ($i = 0; $i < count($productInCart); $i++) {
        $sqlcthd = "INSERT INTO chitiethd(MAHD, MASP, SLUONG, DONGIA) 
            VALUES ('$uuid', '" . $productInCart[$i]->MASP . "', 
        '" .$productInCart[$i]->SL. "', '" .$productInCart[$i]->GIA. "'
                )";
        execute($sqlcthd);
    }
}
