<?php
session_start();
if (!empty($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM taikhoan 
                LEFT JOIN khachhang
                    ON taikhoan.USERID = khachhang.USERID_KH
                LEFT JOIN nhanvien
                    ON taikhoan.USERID = nhanvien.USERID_NV
            ";
    require('dbhelper.php');

    $login = executeResult($sql);

    foreach ($login as $log) {
        if ($log['USERNAME'] == $user && $log['PASSWORD'] != $pass) {
            echo 'fail-pass';
        } else if ($log['USERNAME'] == $user && $log['PASSWORD'] == $pass && $log['MAQUYEN'] == 0 && $log['enable'] == 1) {
            $_SESSION['nameUser'] = $log['USERNAME'];
            $_SESSION['IDCustomer'] = $log['MAKH'];
            // $_SESSION['cart'] = array();
            // $_SESSION['cartNumber'] = 0;
            echo 'success-user';
            break;
        } else if ($log['USERNAME'] == $user && $log['PASSWORD'] == $pass && ($log['MAQUYEN'] == 1 || $log['MAQUYEN'] == 2) && $log['enable'] == 1) {
            $_SESSION['nameUser'] = $log['USERNAME'];
            $_SESSION['role'] = $log['MAQUYEN'];
            $_SESSION['IDStaff'] = $log['MANV'];
            echo 'success-admin';
            break;
        } else if ($log['USERNAME'] != $user) {
            echo '';
        }
    }
}

