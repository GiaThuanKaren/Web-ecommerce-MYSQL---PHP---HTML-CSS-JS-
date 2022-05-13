<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="content-area_admin">
    <h2>Bill manager</h2>
    <div id="content-list-admin">
        <div id="react-list-product">
            <div class="product-header__admin">
                <h5 class="bill">ID BILL</h5>
                <h5 class="customer-bill">ID CUSTOMER</h5>
                <h5 class="staff-bill">ID STAFF</h5>
                <h5 class="status-bill">STATUS</h5>
                <h5 class="date-bill">DATE</h5>
                <h5 class="total-bill">TOTAL</h5>
            </div>
            <div id="container-product__admin">
                <!-- Bill list -->
                <?php
                    require_once('./../dbhelper.php');
                    $sql = "SELECT * FROM hoadon";
                    $render_bill = executeResult($sql);
                    foreach ($render_bill as $bill) {
                ?>
                        <div class="product-list__admin">
                            <p class="bill" onclick="handleDetailBill('<?php echo ''.$bill['MAHD'].'' ?>')"><?php echo $bill['MAHD']; ?></p>
                            <p class="customer-bill"><?php echo $bill['MAKH']; ?></p>
                            <p class="staff-bill"><?php echo $bill['MANV']; ?></p>
                            <div class="status-bill">
                                <?php 
                                    if ($bill['TINHTRANG'] == 'ĐÃ XỬ LÝ') {
                                        echo '
                                            <i class="fa fa-check" aria-hidden="true">
                                                <span>ĐÃ XỬ LÝ</span>
                                            </i>
                                        ';
                                    } else {
                                        echo '
                                            <button 
                                                type="submit" 
                                                class="btn btn-warning btn-status" 
                                                value="'.$bill['TINHTRANG'].'" 
                                                onclick="handleStatusBill(\''.$bill['MAHD'].'\')" 
                                            >
                                                ĐANG XỬ LÝ
                                            </button>
                                        ';
                                    }
                                ?>
                            </div>
                            <p class="date-bill"><?php echo $bill['NGAYHD']; ?></p>
                            <p class="total-bill"><?php echo $bill['TONGTIEN']; ?></p>
                        </div>
                    <?php } ?>
                <!-- Bill list -->
            </div>
        </div>
    </div>
</div>

<script>
    const handleStatusBill = (id) => {
        $(document).ready(function() {
                console.log(id);
                $.ajax({
                    type: 'POST',
                    url: 'checkStatus.php',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        window.location.reload();
                    }
                });
        })
    }

    const handleDetailBill = (IDBill) => {
        var buttonDisplayDetail = $('.order-details');
        var buttonDisplayBlock = $('.order-detail');

        buttonDisplayBlock.css("display", "block");
        $(document).ready(function() {
                $.ajax({
                    type: 'POST',
                    url: 'checkStatus.php',
                    data: {
                        idb: IDBill
                    },
                    success: function(data) {
                        buttonDisplayDetail.html(data);
                    }
                });
        })
    }
</script>
