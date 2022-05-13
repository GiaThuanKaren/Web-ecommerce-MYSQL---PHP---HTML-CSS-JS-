<?php
$flagUpdate = false;
require_once('handle_edit.php');
require_once('handle_insert.php');
?>

<div id="content-area_admin">
    <h2>Products manager</h2>
    <div id="content-admin">
        <form enctype="multipart/form-data" method="POST" action="handle_insert.php" id="form-products" name="form-products">
            <div class="import-product">
                <ul id="form-products__01">
                    <li>Name product</li>
                    <li>Category product</li>
                    <li>Price</li>
                    <li>Description</li>
                    <li>Amount</li>
                    <li>Unit</li>
                    <li>
                        <?php if ($flagUpdate == false) : ?>
                            <button type="submit" name="save" id="save_btn" class="btn btn-success">
                                Add products
                            </button>
                        <?php else : ?>
                            <button type="submit" name="update" id="update" class="btn btn-success">
                                Update
                            </button>
                        <?php endif ?>

                    </li>
                </ul>
                <ul id="form-products__02">
                    <li><input type="hidden" name="id" value="<?php echo $id ?>"></li>
                    <li><input type="text" id="name-product" name="name-product" value="<?php echo $nameProduct ?>"></li>
                    <li>
                        <select name="cate-product" id="cate-product">
                            <option value="<?php echo $idcateProduct != '' ? $idcateProduct : ' '; ?>">
                                <?php echo $cateProduct != '' ? $cateProduct : '--- Select category ---'; ?>
                            </option>
                            <?php
                                $sql = "SELECT * FROM hang";
                                require_once('./../dbhelper.php');
                                $itemCategory = executeResult($sql);
                                foreach ($itemCategory as $item) {
                                    echo '<option value="'.$item['MAHANG'].'">' . $item['TENHANG'] . '</option>';
                                }
                            ?>

                        </select>
                    </li>
                    <li><input type="text" id="price-product" name="price-product" value="<?php echo $priceProduct ?>"></li>
                    <li><input type="text" id="des-product" name="des-product" value="<?php echo $desProduct ?>" maxlength="200"></li>
                    <li><input type="text" id="amount-product" name="amount-product" value="<?php echo $amountProduct ?>"></li>
                    <li>
                        <select name="unit-product" id="unit-product">
                            <option value="<?php echo $unitProduct != '' ? $unitProduct : ' '; ?>">
                                <?php echo $unitProduct != '' ? $unitProduct : '--- Select unit ---'; ?>
                            </option>
                            <!-- <option value="">--- Select unit ---</option> -->
                            <option value="Dollar">Dollar</option>
                            <option value="Euro">Euro</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="import-image">
                <p><i>Upload picture with preview for product</i></p>
                <p><b>--- Please press button below! ---</b></p>
                <div class="center">
                    <div class="form-input">
                        <div class="preview">
                            <img src="<?php echo $imgProduct != '' ? './image/' . $imgProduct : './image/upload.jpg' ?>" id="file-ip-1-preview">
                        </div>
                        <label for="file-ip-1">Upload Image</label>
                        <input name="image-product" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- ----------------------------------------------------------------- -->
    <!-- ---------------- Insert product in here. THE END ---------------- -->
    <!-- ----------------------------------------------------------------- -->

</div>
<div id="content-list-admin">
    <div id="react-list-product">
        <div class="product-header__admin">
            <h5 class="product product-header">PRODUCT</h5>
            <h5 class="category category-header">CATEGORY</h5>
            <h5 class="amount amount-header">AMOUNT</h5>
            <h5 class="price price-header">PRICE</h5>
            <h5 class="unit unit-header">UNIT</h5>
            <h5 class="action action-header">ACTION</h5>
        </div>
        <div id="container-product__admin">
            <?php
            include('render_product.php');
            ?>
        </div>


        <!-- <div class="product product-list">
                        <img src="./assest/img/mb318-ss-pch.jpg" alt="">
                        <div class="name-des">
                            <h5>MACBOOK AIR 13IN</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate accusamus eligendi veniam laboriosam</p>
                        </div>
                    </div>
                    <p class="category">MSI</p>
                    <p class="amount">2</p>
                    <p class="price">24.00</p>
                    <p class="unit">Dollar</p>
                    <div class="action">
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </div> -->
    </div>
</div>