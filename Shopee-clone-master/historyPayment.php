<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
 <link
      rel="icon"
      href="https://logodix.com/logo/2015058.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/main.css">
    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/historyPayment.css">
    <link rel="stylesheet" href="./assest/css/responsive.css">


</head>
<body>
    <div class="app">
        <?php include('header.php'); ?>
        <div class="Main-container grid wide">
            <h3 style="text-align: center;font-size: 3rem;">Lịch sử các đơn hàng</h3>
            <!-- <ul class="List-product"> -->
            <div class="HiPa">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="datafinal9";
            $conn = new mysqli($servername, $username, $password,$dbname, 3306);
            if (isset($_SESSION['IDCustomer'])) {
                $MaKH = $_SESSION['IDCustomer'];
            }
            else{
                $MaKH = '';
            }
                $sql_hoadon= mysqli_query($conn,"SELECT * FROM hoadon WHERE hoadon.MAKH = $MaKH ") ;
            ?>
            <div class= "info_user">
                <span>
                    <?php if (isset($_SESSION['nameUser']) ) : ?>
                        User: <?php echo $_SESSION['nameUser']; ?>
                        <?php endif ?>
                </span>
            </div>
            <table class="List-product">          
                <tr>
                    <th>STT</th>
                    <th>Mã hóa đơn</th>
                    <th>Ngày hóa đơn</th>
                    <th>Tổng tiền</th>
                    <th>Tình trạng</th>
                    <th>Chi tiết</th>
                </tr>
                <?php 
                $i=0;
                while ($row_hoadon = mysqli_fetch_array($sql_hoadon)){ 
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row_hoadon['MAHD'];?></td>
                        <td><?php echo $row_hoadon['NGAYHD'];?></td>
                        <td><?php echo $row_hoadon['TONGTIEN'];?>$</td>
                        <td><?php echo $row_hoadon['TINHTRANG'];?></td>
                        <td><a href="?MaHD=<?php echo $row_hoadon['MAHD'];?>">Xem chi tiết</td>
                    </tr>
                <?php
                    }
                ?>
            </table>
            </div>
            <br>
            <div class= "info_product">
                <span>
                    Chi tiết đơn hàng
                </span>
            </div>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="datafinal9";
                $conn = new mysqli($servername, $username, $password,$dbname, 3306);
                if (isset($_GET['MaHD'])) {
                    $MaHD = $_GET['MaHD'];
                }
                else{
                    $MaHD = '';
                }

                    $sql_cthd= mysqli_query($conn,"SELECT * FROM chitiethd, sanpham, hoadon WHERE hoadon.MAHD= chitiethd.MAHD AND 
                    sanpham.MASP = chitiethd.MASP AND chitiethd.MAHD = '$MaHD' ORDER BY chitiethd.MAHD DESC ") ;
                ?>
                <table class="List-product">          
                    <tr>
                        <th>STT</th>
                        <th>Mã hóa đơn</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn Giá</th>
                    </tr>
                    <?php 
                    $i=0;
                    while ($row_cthd = mysqli_fetch_array($sql_cthd)){ 
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row_cthd['MAHD'];?></td>
                            <td><?php echo $row_cthd['TENSP'];?></td>
                            <td><?php echo $row_cthd['SLUONG'];?></td>
                            <td><?php echo $row_cthd['DONGIA'];?>$</td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            
        </div>
    </div>            

    <script src="./assest/js/historypayment.js"></script>
    <script src="./assest/js/main1js.js"></script>
</body>
</html>