<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $numonepage=5;  // số sản phẩm trên 1 trang

    $sql_records = "SELECT count(MASP) as total FROM sanpham WHERE sanpham.GIA < 10000";
    $query_records = mysqli_query($conn, $sql_records);
    $row = mysqli_fetch_assoc($query_records);
    $total_records = $row['total'];

    if (isset($_GET["page"])) {
        $page=$_GET["page"];
    } else {
        $page = 1;
    }

    $total_page = ceil($total_records / $numonepage);

    if ($page > $total_page) {
        $page = $total_page;
    }
    else if ($page < 1) {
        $page = 1;
    } 
    
    settype($page,"int");
    $FROM = ($page-1)*$numonepage;
    $sql_sanpham="SELECT * FROM sanpham WHERE sanpham.GIA < 10000 ORDER BY sanpham.MASP DESC limit $FROM,$numonepage" ;
    $query_sanpham = mysqli_query($conn, $sql_sanpham);
?>
<div class="carousel_list">
    <?php
    while ($row_sanpham = mysqli_fetch_array($query_sanpham)){
    ?>    
    <div class="carousel-item">
        <div class="product-item">
            <div class="product-action">
                <a href="#" class="product-action__link" >
                    <i class="far fa-heart"></i>
                    <!-- <i class="fas fa-heart product-action__icon--liked"></i> -->
                </a>
            </div>
            <a href="#" class="product-item__link" >
            <?php echo '<img src="./admin/image/'.$row_sanpham['IMG'].' "class="product-item__img" />';?>
            </a>
            <div class="product-item__info">
                <a href="#" class="product-item__name"><?php echo $row_sanpham['TENSP'];?></a>
                <div class="product-item__price">
                    <span class="product-item__price-current"><?php echo $row_sanpham['GIA'];?>₫</span>
                    <span class="product-item__price-old"><?php echo $row_sanpham['GIA']*10;?>₫</span>
                </div>
            </div>
            <!-- <span  class="add-to-cart__link">
                <button type="button" class="add-to-cart__btn">
                    <i class="add-to-cart__icon ti-shopping-cart"></i>
                    <span class="add-to-cart__text">Thêm vào giỏ</span>
                </button>
            </span> -->
        </div>
    </div>
    <?php
    }
    ?>
</div>