<?php
require('dbhelper.php');

if (!empty($_POST)) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sqlCheckAccount = "SELECT * FROM taikhoan";
    $checkAccount = executeResult($sqlCheckAccount);

    $flagCheckAccount = true;

    foreach ($checkAccount as $account) {
        if ($username != $account['USERNAME']) {
            $flagCheckAccount = true;
        } else {
            echo json_encode(array("statusCode" => 201));
            $flagCheckAccount = false;
            break;
        }
    }

    if ($flagCheckAccount) {
        $sqlInsert = "INSERT INTO taikhoan(USERNAME, PASSWORD, EMAIL, MAQUYEN, enable)
        VALUES ('$username', '$password', '$email', 0, 1)";
        execute($sqlInsert);
        echo json_encode(array("statusCode" => 200));
    }
}
?>
