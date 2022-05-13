<?php
function execute($sql) {
    require('sql_connect.php');
    mysqli_query($connect, $sql);
    require('sql_close.php');
}
function executeResult($sql) {
    include('sql_connect.php');

    $resultSet = mysqli_query($connect, $sql) or die ('Error: '. mysqli_error($connect));
    $list = [];

    while ($row = mysqli_fetch_array($resultSet, 1)) {
        $list[] = $row;
    }

    require_once('sql_close.php');
    return $list;
}
?>