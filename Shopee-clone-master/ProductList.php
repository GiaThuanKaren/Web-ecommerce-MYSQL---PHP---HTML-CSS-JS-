<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
    } else {
        $id = 20008;
    }
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $sql_sanpham="SELECT * FROM hang, sanpham WHERE sanpham.MAHANG=hang.MAHANG AND sanpham.MAHANG='$id' ORDER BY sanpham.MASP DESC" ;
    $query_sanpham = mysqli_query($conn, $sql_sanpham);
?>
<div class="gridwide">
    <?php
    while ($row_sanpham = mysqli_fetch_array($query_sanpham)){
    ?>                
    <div class="section-5__tab-1 section-5__tab-current">
        <div class="carousel-3">
            <div class="product-item">
                <div class="product-action">
                    <a href="#" class="product-action__link">
                        <i class="far fa-heart"></i>
                        <!-- <i class="fas fa-heart product-action__icon--liked"></i> -->
                    </a>
                </div>
                <a href="#" class="product-item__link">
                    <!--<img src="#" class="product-item__img">-->
                    <?php echo '<img src="./admin/image/'.$row_sanpham['IMG'].' "class="product-item__img" />';?>
                </a>
                <div class="product-item__info product-item__info-action">
                    <a href="#" class="product-item__name"><?php echo $row_sanpham['TENSP'];?></a>
                    <div class="product-item__price">
                        <span style="color: var(--primary-color);" class="product-item__price-current"><?php echo $row_sanpham['GIA'];?>₫</span>
                        <span class="product-item__price-old">20000000₫</span>
                    </div>
                </div>
                <!-- <button style="background-color: var(--primary-color);" class="add-to-cart__btn add-to-cart__action">
                    <i class="add-to-cart__icon ti-shopping-cart"></i>
                    <span class="add-to-cart__text" >Thêm vào giỏ</span>
                </button> -->
            </div>    
        </div>        
    </div>
    <?php
    }
    ?>
</div>