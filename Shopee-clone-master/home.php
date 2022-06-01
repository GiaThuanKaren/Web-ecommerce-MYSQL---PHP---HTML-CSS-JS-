<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="icon" href="https://logodix.com/logo/2015058.png" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/main.css">
    <link rel="stylesheet" href="./assest/css/home.css">
    <link rel="stylesheet" href="./assest/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="app">
        <!-- <div class="Announce-State-product">
            <h3>Đã thêm vào giỏ hàng</h3>
        </div> -->

        <section class="modal-detail-product">
            <div class="modal-detail-product-body">
                <i class="fas fa-times js-close-btn"></i>
                <div class="modal-detail-product-img" style="background-image: url(https://www.purpicks.com/wp-content/uploads/2018/06/Rejuva-Minerals-Multi-Purpose-Powder-Blush-_-Eye-1.jpg);"></div>
                <div class="modal-detail-product-contend">
                    <h3 class="modal-detail-product-nameProduct">Multi Purpose Powder - Blush & Eye</h3>
                    <p class="modal-detail-product-description">
                        Now this is a blush that deserves to be seen! Gorgeous in the compact, even prettier on cheeks, this petal soft, natural-finish powder shapes, contours and highlights. Streaks? Never. Easy to use? Always. In ultra-flattering shades that you just can’t live without.Features:Real rose petals are crushed and micro-milled into the powder to naturally enhance every skin toneEasy to use, streak-free, shapes & contoursSuitable for all skin typesMade in ItalyStreak-freeApplication: Glide a brush through the color and lightly tap off excess powder. Lightly apply to cheeks, forehead, chin and/or nose and blend well for a soft glow. Ingredients: Talc, Synthetic Wax, Aluminum Starch, Octenylsuccinate, Hydoxylated Lanolin, Isopropyl Lanoate, Petrolatum, Cyclomethicone,, Lanolin Alcohol, Cetyl Actate, Acetylated Lanolin Alcohol, Methylparabne, Proprylparaben. +/- May Contain: Synthetic Flourphlogopite, Mica, Tin Oxide, Titanium Dioxide (CI 77891), Iron Oxides (CI 77491, CI 77492, CI 77499), Yellow 5 (CI 19140), Red 7 (CI 15850), Red 28 (CI 45410), Red 36 (CI 12085), Blue 1 (CI 42090), Carmine (CI 75470), Ultamarines (CI 77007), Ferric Ferrocyanide (CI 77510), Manganese Violet (CI 77742).
                    </p>
                    <div class="modal-detail-product-price">
                        260$
                    </div>
                    <div class="modal-detail-product-btns">
                        <div class="modal-detail-product-addToCart modal-detail-product-btn">Thêm vào giỏ hàng</div>
                        <a href="./Payment.html" class="modal-detail-product-BuyNow modal-detail-product-btn">Mua ngay</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include('header.php'); ?>

        <div class="app__container">
            <div class="section-1">
                <div class="wallpaper">
                    <a href="#" class="wallpaper__link">
                        <div class="wallpaper__slider">
                            <div class="slide__list">
                                <div class="slide active"><img src="https://lh3.googleusercontent.com/zrmeSsYe8Qf3Tln-hHRQ5uEG4ZbCm2ULUBcb1AYkFsB8eWd-AHpuad_m1UM5Xtp22FrRiSvnlyoNt9sKMbwBS-Tu3Yw0AaO1=rw-w1920"></div>
                                <div class="slide"><img src="https://lh3.googleusercontent.com/BBtDusJxkM8GKxoFe1WjHsQaFkiumLV-QTug7bQycPvWPUhCTNJBbiIpJrTtupDg1Bpl6AIpZy4UFIstoBDR21WCACobCS4=rw-w1920"></div>
                                <div class="slide"><img src="https://lh3.googleusercontent.com/ADnxeuhTz9i4HM-vEqDNyR5jfImrz0riNPjJt-rXDIPT76BE6b94sQOztaMwnaWMcKPCa0buABbuExKS7vW9K_pO4tCy9Rlb=rw-w1920"></div>
                                <div class="slide"><img src="https://lh3.googleusercontent.com/NU3Wrx0LtnKdjW5b0RHkK1JpV25VZ59teFQFA3TDKloxCcKtdOeAQXig6N0lIHYklUOtuZBknYTbPoXbCpwTY-NPQ2mfnUu8=rw-w1920"></div>
                            </div>
                            <div class="btn-slide">
                                <span id="btn-prev"><i class="fas fa-chevron-left"></i></span>
                                <span id="btn-next"><i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="section-2">
                <div class="grid wide">
                    <div class="section-2__category">
                        <div class="section-2__category-item">
                            <a href="./index.php" class="section-2__category-item-link">
                                <img class="category-item__img" src="https://cdn.tgdd.vn//content/Laptop-129x129.png" alt="laptop img">
                                <h3 class="section-2__category-item-title">Laptop</h3>
                            </a>
                        </div>
                        <div class="section-2__category-item">
                            <a href="./index.php" class="section-2__category-item-link">
                                <img class="category-item__img" src="https://cdn.tgdd.vn//content/Dienthoai-128x129.png" alt="Điện thoại image">
                                <h3 class="section-2__category-item-title">Điện Thoại</h3>
                            </a>
                        </div>
                        <div class="section-2__category-item">
                            <a href="./index.php" class="section-2__category-item-link">
                                <img class="category-item__img" src="https://cdn.tgdd.vn//content/Tablet-128x129.png" alt="Tablet image">
                                <h3 class="section-2__category-item-title">Tablet</h3>
                            </a>
                        </div>
                        <div class="section-2__category-item">
                            <a href="./index.php" class="section-2__category-item-link">
                                <img class="category-item__img" src="https://cdn.tgdd.vn//content/Phukiengaming-128x129.png" alt="Phụ kiện image">
                                <h3 class="section-2__category-item-title">Phụ Kiện</h3>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="section-2__slide">
                        <span id="section-2__arrow-prev"><i class="fas fa-chevron-left"></i></span>
                        <span id="section-2__arrow-next"><i class="fas fa-chevron-right"></i></span>
                    </div> -->
                </div>
            </div>
            <div class="section-3">
                <div class="grid wide">
                    <div class="section-3__heading">
                        <a href="" class="section-3__heading-link">
                            <img class="section-3__heading-img" src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/img_title.png?1630398243026" alt="Flash Sale image">
                        </a>
                    </div>
                    <div class="timer">

                    </div>

                    <div class="awSlider">
                        <div class="carousel">
                            <?php include('FlashSale.php'); ?>
                            <div>
                                <div class="section-3__arrow-prev">
                                    <div class="prev-btn"><i class="fas fa-chevron-left"></i></div>
                                </div>

                                <div class="section-3__arrow-next">
                                    <div class="next-btn"><i class="fas fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var count = 0;
                            $(document).ready(function() {
                                $('.next-btn').click(function() {
                                    count = count + 1;
                                    $.get('FlashSale.php', {
                                        page: count
                                    }, function(data) {
                                        console.log("🚀 ~ file: home.php ~ line 144 ~ $ ~ data", data)
                                        $('.carousel_list').html(data);
                                    })
                                });
                            });
                            $(document).ready(function() {
                                $('.prev-btn').click(function() {
                                    count = count - 1;
                                    $.get('FlashSale.php', {
                                        page: count
                                    }, function(data) {
                                        $('.carousel_list').html(data);
                                    })
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="section-4">
                <div class="section-4__background">
                    <div class="product-container">
                        <h2 class="product-container__heading">
                            <a href="" class="product-container__heading-link">
                                SẢN PHẨM NỔI BẬT
                                <img class="product-container__heading-img" src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/icon_after_title.png?1630049131390" alt="">
                            </a>
                        </h2>
                        <div class="grid wide">
                            <div class="carousel-2__wrapper">
                                <?php include("highlight.php") ?>
                                <ul>
                                    <li class="active_btn"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <script>
                            var dem = 1;
                            $(document).ready(function() {
                                $('ul li').click(function() {
                                    var pospre = $('.active_btn').index() + 1;
                                    var poscl = $(this).index() + 1;
                                    $(' ul li').removeClass('active_btn');
                                    $(this).addClass('active_btn');
                                    if (poscl > pospre) {
                                        dem = dem + 1;
                                        $.get('highlight.php', {
                                            trang: dem
                                        }, function(data) {
                                            $('.carousel-2').html(data);
                                        })
                                    } else if (poscl < pospre) {
                                        dem = dem - 1;
                                        $.get('highlight.php', {
                                            trang: dem
                                        }, function(data) {
                                            $('.carousel-2').html(data);
                                        })
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="section-5">
                <div class="product-container-section-5">
                    <h2 class="product-container__heading">
                        <a href="" class="product-container__heading-link">
                            Đề Xuất Sản Phẩm
                            <img class="product-container__heading-img" src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/icon_after_title.png?1630049131390" alt="">
                        </a>
                    </h2>
                    <div class="section-5__selection">
                        <?php
                        include("CompanyList.php");
                        ?>
                        <ul class="section-5__selection-list">
                        </ul>
                    </div>
                    <div class="grid wide">
                        <?php
                        include("ProductList.php");
                        ?>
                    </div>
                </div>

            </div>
            <div class="section-6">
                <div class="our-service">
                    <div class="our-service__container grid wide">
                        <div class="row">
                            <div class="col l-6 m-6 c-12">
                                <div class="section-6__left">
                                    <div class="our-service__title">
                                        <h1>DỊCH VỤ CỦA CHÚNG TÔI</h1>
                                    </div>
                                    <ul class="our-service__list">
                                        <li class="our-service__item">
                                            <img src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/icon_service_1.svg?1630398243026" alt="" class="our-service__item-img">
                                            <div class="our-service__item-info">
                                                <h3 class="our-service__item-info-heading">GIAO HÀNG FREE NỘI THÀNH</h3>
                                                <span class="our-service__item-info-desc">Giao free trong nội thành HN và HCM</span>
                                            </div>
                                        </li>
                                        <li class="our-service__item">
                                            <img src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/icon_service_2.svg?1630398243026" alt="" class="our-service__item-img">
                                            <div class="our-service__item-info">
                                                <h3 class="our-service__item-info-heading">TRẢ HÀNG TRONG VÒNG 24H</h3>
                                                <span class="our-service__item-info-desc">Hỗ trợ trả hàng cho khách khi sản phẩm có lỗi</span>
                                            </div>
                                        </li>
                                        <li class="our-service__item">
                                            <img src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/icon_service_3.svg?1630398243026" alt="" class="our-service__item-img">
                                            <div class="our-service__item-info">
                                                <h3 class="our-service__item-info-heading">KIỂM TRA HÀNG KHI NHẬN HÀNG</h3>
                                                <span class="our-service__item-info-desc">Khách hàng kiểm tra hàng trước khi nhận</span>
                                            </div>
                                        </li>
                                        <li class="our-service__item">
                                            <img src="//bizweb.dktcdn.net/100/434/558/themes/831317/assets/icon_service_4.svg?1630398243026" alt="" class="our-service__item-img">
                                            <div class="our-service__item-info">
                                                <h3 class="our-service__item-info-heading">THANH TOÁN COD</h3>
                                                <span class="our-service__item-info-desc">Hỗ trợ khách hàng thanh toán cod</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col l-6 m-6 c-12">
                                <div class="section-6__block-service">
                                    <img src="https://w.ladicdn.com/s750x600/5bf3dc7edc60303c34e4991f/chinh-sach-giao-hang-08-20210128085147.png" alt="" class="section-6__img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <!-- <script src="./assest/js/mainjs.js"></script> -->
    <script src="./assest/js/home2.js"></script>
    <script src="./assest/js/main1js.js"></script>
</body>

</html>