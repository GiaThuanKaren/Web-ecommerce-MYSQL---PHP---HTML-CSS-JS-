<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $numonepage=4;
    if (isset($_GET["page"])) {
        $trang=$_GET["trang"];
    } else {
        $trang = 1;
    }
    settype($trang,"int");
    $FROM = ($trang-1)*$numonepage;
    $sql_sanpham="SELECT * FROM sanpham WHERE sanpham.GIA> 3000000 ORDER BY sanpham.MASP DESC limit $FROM,$numonepage" ;
    $query_sanpham = mysqli_query($conn, $sql_sanpham);
?>
             
<div class="carousel-2" >
<?php
    while ($row_sanpham = mysqli_fetch_array($query_sanpham)){
    ?>    
    <div class="carousel-2-item">
        <div class="product-item">
            <div class="product-action">
                <a href="" class="product-action__link">
                    <i class="far fa-heart"></i>
                    <!-- <i class="fas fa-heart product-action__icon--liked"></i> -->
                </a>
            </div>
            <a href="" class="product-item__link">
            <?php echo '<img src="./admin/image/'.$row_sanpham['IMG'].' "class="product-item__img" />';?>
            </a>
            <div class="product-item__info product-item__info-action">
                <a href="" class="product-item__name" ><?php echo $row_sanpham['TENSP'];?></a>
                <div class="product-item__price">
                    <span class="product-item__price-current" style="font-size: 24px;"><?php echo $row_sanpham['GIA'];?>₫</span>
                    <span class="product-item__price-old" style="font-size: 14px;">41.000₫</span>
                </div>
            </div>
            <!-- <a href="" class="add-to-cart__link add-to-cart__action">
                <button class="add-to-cart__btn">
                    <i class="add-to-cart__icon ti-shopping-cart"></i>
                    <span class="add-to-cart__text">Thêm vào giỏ</span>
                </button>
            </a> -->
        </div>
    </div>
    <?php
    }
    ?>   
</div>
    