<?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        require_once('./../dbhelper.php');

        // $sql = "DELETE loai, sanpham, hang FROM loai INNER JOIN sanpham 
        //             ON sanpham.MASP = loai.MASP INNER JOIN hang 
        //             ON loai.MALOAI = hang.MALOAI WHERE sanpham.MASP = $id";
        $sql = "DELETE FROM sanpham WHERE sanpham.MASP = $id";
        echo $sql;
        execute($sql);
    }
?>