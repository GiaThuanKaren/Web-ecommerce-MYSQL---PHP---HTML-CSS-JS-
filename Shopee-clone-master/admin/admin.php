<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Sweetalert2 library-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <link rel="stylesheet" href="./../assest/css/admin.css">
    <title>Admin page manager</title>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                        <span class="title">
                            <h2>Computer</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?page=home">
                        <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <?php
                if ($_SESSION['role'] == 1) {
                    echo '
                        <li>
                            <a href="admin.php?page=product" id="input-product">
                                <span class="icon"><i class="fa fa-keyboard-o" aria-hidden="true"></i></span>
                                <span class="title">Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin.php?page=bill" >
                                <span class="icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                                <span class="title">Bill</span>
                            </a>
                        </li>
                        <li>
                            <a href="./../handle_logout.php">
                                <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                <span class="title">Sign Out</span>
                            </a>
                        </li>
                    ';
                } else {
                ?>
                <?php
                    echo '
                    <li>
                        <a href="admin.php?page=account">
                            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <span class="title">List Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php?page=statistical">
                            <span class="icon"><i class="fa fa-table" aria-hidden="true"></i></span>
                            <span class="title">Statistical</span>
                        </a>
                    </li>
                
                ';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"></div>
            <div class="search">
                <label for="">
                    <input id="search-input" type="text" placeholder="search here">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </label>
            </div>
            <div class="user">
                <img src="./../assest/img/obito.jpg" alt="obito-avatar">
            </div>
        </div>

        <!-- Detail bill -->

        <div id="order-detail" class="order-detail">
            <div id="order-cart-detail">
                <h3>Order detail</h3>
                <div class="order-detail-title">
                    <div class="order-detail-title__imagine">
                        <span>Imagine</span>
                    </div>

                    <div class="order-detail-title__nameproduct">
                        <span>Name</span>
                    </div>

                    <div class="order-detail-title__quantity">
                        <span>Quantity</span>
                    </div>

                    <div class="order-detail-title__total">
                        <span>Total</span>
                    </div>
                </div>
                <div class="order-details">

                    <!-- +========================================= JS cart item in here =========================================+ -->

                    <!-- <div class="order-detail-menu">
                    <div class="order-detail__imagine">
                        <img src="./resources/img/pexels-photo-1061142.jpg" />
                    </div>
    
                    <div class="order-detail-nameproduct">
                        <span class="order-detail__name">Hungting</span>
                    </div>
    
                    <div class="order-detail__quantity"><span>3</span></div>
    
                    <div class="order-detail__total">$ 250,00</div>
                </div> -->

                    <!-- +========================================= JS cart item in here =========================================+ -->

                </div>

                <div class="order-detai__close" onclick="document.getElementById('order-detail').style.display='none'">
                    <span><i class="fa fa-angle-left" aria-hidden="true"></i> Back to shop</i></span>
                </div>

            </div>
        </div>

        <!-- Detail bill -->

        <!-- ------------------------------------------------------------------- -->
        <!-- ---------------- Insert product in here. THE BEGIN ---------------- -->
        <!-- ------------------------------------------------------------------- -->
        <?php
        // SECTION 1.interface product 
        if (isset($_GET['page'])) {
            if (($_GET['page']) == 'home') {
                require_once('home.php');
            }
            if (($_GET['page']) == 'product') {
                require_once('input_product.php');
            }

            if (($_GET['page']) == 'bill') {
                require_once('handle_bill.php');
            }

            if (($_GET['page']) == 'account') {
                require_once('account.php');
            }

            if (($_GET['page']) == 'statistical') {
                require_once('handle_statistical.php');
            }
        }
        ?>

    </div>

    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>

    <!-- Search -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#search-input').keyup(function() {
                var name = $('#search-input').val();

                $.ajax({
                    type: 'POST',
                    url: 'handle_search.php',
                    data: {
                        search: name
                    },
                    success: function(html) {
                        $('#react-list-product').html(html);
                    }
                });
            })
        })
    </script>

    <script src="./../assest/js/admin.js"></script>
</body>

</html>