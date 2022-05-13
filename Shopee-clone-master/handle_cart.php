<?php
session_start();

// if (isset($_GET['cartnumber'])) {
//     $cartNumber = $_GET['cartnumber'];
//     $cartNumber++;
//     $_SESSION['cartNumber'] = $cartNumber;
//     echo $cartNumber;
// }

// if (isset($_GET['cart'])) {

//     $_SESSION['total'] = 0;

//     if (isset($_SESSION['cart'])) {
//         $_SESSION['cart'] == null ? array() : $_SESSION['cart'];    // nếu tồn tại $_SESSION['cart'] (lúc đăng nhập mới tồn tại)
//     } 

//     array_push($_SESSION['cart'], json_decode($_GET['cart']));

//     $_SESSION['cart'][count($_SESSION['cart']) - 1]->CARTPRODUCT = 1;

//     for ($i = 0; $i < count($_SESSION['cart']); $i++) {
//         if ($i != (count($_SESSION['cart']) - 1)) {
//             if ($_SESSION['cart'][$i]->MASP == $_SESSION['cart'][count($_SESSION['cart']) - 1]->MASP) {
//                 $_SESSION['cart'][$i]->CARTPRODUCT = $_SESSION['cart'][$i]->CARTPRODUCT + 1;
//                 unset($_SESSION['cart'][count($_SESSION['cart']) - 1]);
//             }
//         }
//         print_r(
//             '                
//         <li class="header__cart-item">
//             <img src="./admin/image/' . $_SESSION['cart'][$i]->IMG . '" alt="" class="header__cart-img">
//             <div class="header__cart-item-info">
//                 <div class="header__cart-item-head">
//                     <h5 class="header__cart-item-name">' . $_SESSION['cart'][$i]->TENSP . '</h5>
//                     <span class="header__cart-item-description">
//                         Phân Loại Hàng: ' . $_SESSION['cart'][$i]->MAHANG . '
//                     </span>

//                 </div>

//                 <div class="header__cart-item-quantity">
//                     <i class="fas fa-chevron-up"></i>
//                         <span class="countOfProduct">'.$_SESSION['cart'][$i]->CARTPRODUCT.'</span>
//                     <i class="fas fa-chevron-down"></i>
//                 </div>

//                 <div class="header__cart-item-body">
//                     <div class="header__cart-item-price-wrap">
//                         <span class="header__cart-item-price">₫' . $_SESSION['cart'][$i]->GIA . '</span>
//                         <span class="header__cart-item-multiply">x</span>
//                         <span class="header__cart-item-qnt">' . $_SESSION['cart'][$i]->CARTPRODUCT . '</span>
//                     </div>
//                     <span class="header__cart-item-remove">Xoá</span>
//                 </div>
//             </div>
//         </li>
//             '
//         );

//         $_SESSION['total'] += $_SESSION['cart'][$i]->GIA * $_SESSION['cart'][$i]->CARTPRODUCT;

//     }
// }

// if (!isset($_SESSION['nameUser'])) {
//     echo 'Bạn chưa đăng nhập để mua hàng';
// }

?>
