<?php
require_once('./../dbhelper.php');
if (isset($_POST['textContent'])) {
    $textContent = $_POST['textContent'];
    if ($textContent == 'BEST - SELLING PRODUCT') {
        $sqlSelling = 'SELECT DATE_FORMAT(NGAYHD, "%m-%Y") AS MONTH, SUM(TONGTIEN) AS TOTAL FROM hoadon GROUP BY DATE_FORMAT(NGAYHD, "%m-%Y")';
        $bestSellingProducts = executeResult($sqlSelling);
        $chartData = '';
    
        foreach ($bestSellingProducts as $selling) {
            $chart_data [] = array(
                "month" => $selling["MONTH"], 
                "total" => $selling["TOTAL"], 
              ); 
        }

        $json = json_encode(array("chart" => $chart_data, "message" => "MONTHLY REVENUE", "type" => "Line"));  //encode the array into a valid JSON object
        echo $json;
    } 
    if ($textContent == 'MONTHLY REVENUE') {
        $sqlSelling = 'SELECT MASP, SLUONG FROM chitiethd ORDER BY SLUONG DESC LIMIT 10';
        $bestSellingProducts = executeResult($sqlSelling);
        $chartData = '';
    
        foreach ($bestSellingProducts as $selling) {
            $chart_data [] = array(
                "month" => $selling["MASP"], 
                "total" => $selling["SLUONG"], 
              ); 
        }

        $json = json_encode(array("chart" => $chart_data, "message" => "BEST - SELLING PRODUCT", "type" => "Bar"));  //encode the array into a valid JSON object
        echo $json;
    }
}
