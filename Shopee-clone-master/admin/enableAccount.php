<?php 
require('./../dbhelper.php');

if (isset($_POST['userid']) && isset($_POST['enable'])) {
    $userId = $_POST['userid'];
    $enable = $_POST['enable'];

    if ($enable == 1) {
        $sql = "UPDATE taikhoan SET enable = 0 WHERE USERID = $userId";
        execute($sql);
    } else {
        $sql = "UPDATE taikhoan SET enable = 1 WHERE USERID = $userId";
        execute($sql);
    }
}
?>