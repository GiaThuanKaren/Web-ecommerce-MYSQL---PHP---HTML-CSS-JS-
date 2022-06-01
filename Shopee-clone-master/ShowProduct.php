<?php

function ShowProduct($id=102){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $sql="SELECT sanpham.* FROM sanpham,hang WHERE hang.MAHANG = sanpham.MAHANG and hang.MALOAI='$id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $js=array();
        while($row = mysqli_fetch_assoc($result))
            $js[]=$row;
        echo json_encode(['result'=>$js]);
    }
}

function GetAllProduct(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $sql="SELECT sanpham.*,hang.TENHANG FROM sanpham,hang where sanpham.MAHANG = hang.MAHANG";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $js=array();
        while($row = mysqli_fetch_assoc($result))
            $js[]=$row;
        echo json_encode(['result'=>$js]);
    }
}

function ShowCatologe(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $sql="SELECT * FROM loai";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $js=array();
        while($row = mysqli_fetch_assoc($result))
            $js[]=$row;
        echo json_encode(['result'=>$js]);
    }
}
if(isset($_GET['tab'])){
    $res=$_GET['tab'];
    
    switch($res){
        case 'shctl':{
            ShowCatologe();
            break;
        }
        case 'shpr':{
            $id=$_GET['id'];
            ShowProduct($id);
            break;
        }
        case 'searchItem':{
            GetAllProduct();
            break;
        }
    }
}

?>