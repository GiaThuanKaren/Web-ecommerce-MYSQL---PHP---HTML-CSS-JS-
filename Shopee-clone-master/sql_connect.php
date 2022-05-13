<?php 
    require_once('define_connect.php');

    // Create a connect to database phpMyAdmin
    $connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE, 3306);

    // Allow PHP to save unicode (utf8) - database
    mysqli_set_charset($connect, "utf8");

    // Check a connect to successfull?
    if ($connect->connect_error) {
        var_dump($connect->connect_error);
        die();
    }
?>