<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="icon" href="https://logodix.com/logo/2015058.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/register.css">
    <link rel="stylesheet" href="./assest/css/responsive.css">
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            Vào cửa hàng trên ứng dụng Shopee

                            <!-- Header QR code -->
                            <div class="header__qr">
                                <img src="./assest/img/qr_code.png" alt="QR code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link">
                                        <img src="./assest/img/app_store.png" alt="App Store" class="header__qr-download-img">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.shopee.vn&hl=vi&gl=US" class="header__qr-link">
                                        <img src="./assest/img/google_play.png" alt="Google Play" class="header__qr-download-img">
                                    </a>
                                    <a href="https://apps.apple.com/vn/app/shopee-11-11-si%C3%AAu-sale/id959841449" class="header__qr-link">
                                        <img src="./assest/img/app_gallery.png" alt="App Gallery" class="header__qr-download-img">
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-tittle--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cf.shopee.vn/file/35ed15aa87367f34b8993bb78418c62c_tn" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Săn Voucher 100K từ
                                                    #shopxuhuong</span>
                                                <span class="header__notify-description">✨ Chỉ từ 1K mua hàng thả ga
                                                    ⏰ Đồng giá 7K vào 9H, 12H, 21H
                                                    ️🛒 Ở nhà an toàn! Mua sắm an tâm</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cf.shopee.vn/file/565277eec233892490bc426672ab6165_tn" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Chỉ 3 phút để hiểu nhau hơn!</span>
                                                <span class="header__notify-description">😍Quảng cáo của Shopee đã để
                                                    lại cho bạn những ấn tượng gì? Hãy chia sẻ ý kiến của bạn với Shopee
                                                    ngay TẠI ĐÂY nhé!</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cf.shopee.vn/file/9196fa5244971a370a52f6e6dd48f8cf_tn" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Bí kíp x4 lần ưu đãi từ Shop
                                                    Xtra</span>
                                                <span class="header__notify-description">🔥Mã Freeship Xtra giảm đến 70K
                                                    ⚡Voucher hoàn 100K xu
                                                    ☄️Deal hot giảm đến 50%
                                                    💥 Click vào săn ngay ưu đãi!!!</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li> -->
                        <li class="header__navbar-item header__navbar-user">
                            <img src="https://scontent.fsgn5-7.fna.fbcdn.net/v/t1.6435-9/152166689_1042345229628482_6610616176652861660_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=N7DBDFmC-OUAX-FkVqB&_nc_ht=scontent.fsgn5-7.fna&oh=b2f9391e783679ab5350fd83e665308e&oe=61D140C9" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name">Gia Thuận</span>

                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài Khoản Của Tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Địa Chỉ Của Tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đơn Mua</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate">
                                    <a href="">Đăng Xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>


                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__mobile-btn">
                        <label for="mobile-list-checkbox" class="header__mobile-list">
                            <i class="header__mobile-list-icon fas fa-bars"></i>
                        </label>
                        <label for="mobile-search-checkbox" class="header__mobile-search">
                            <i class="header__mobile-search-icon fas fa-search"></i>
                        </label>
                    </div>
                    <div class="header__logo hide-on-tablet">
                        <a href="./index.html" class="header__logo-link">
                            <svg viewBox="0 0 192 65" class="header__logo-img">
                                <g fill-rule="evenodd">
                                    <path fill="#fff" d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <input type="checkbox" hidden id="mobile-search-checkbox" class="header__search-checkbox">


                    <input type="checkbox" hidden name="" class="nav__input" id="mobile-list-checkbox">


                    <label for="mobile-list-checkbox" class="header__nav-overlay"></label>
                    <nav class="nav__mobile">
                        <label for="mobile-list-checkbox" class="nav__mobile-close">
                            <i class="fas fa-times"></i>
                        </label>
                        <ul class="nav__mobile-list">
                            <li>
                                <a href="" class="nav__mobile-link">
                                    <i class="fas fa-home"></i>
                                    Trang chủ
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav__mobile-link">
                                    <i class="far fa-user-circle"></i>
                                    Tài khoản của tôi
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav__mobile-link">
                                    <i class="fas fa-box-open"></i>
                                    Đơn mua
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav__mobile-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <h3 class="heading-header-search">Đăng ký</h3>
                    <!-- Cart layout -->

                </div>
            </div>
            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Phổ biến</a>
                </li>
                <li class="header__sort-item header__sort-link--active">
                    <a href="" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">
                        Giá
                        <svg width="8px" height="10px" viewBox="0 0 8 10" class="header__sort-price">
                            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g id="upfront_filter_specs" transform="translate(-345.000000, -97.000000)">
                                    <g id="icon_grey" transform="translate(343.000000, 96.000000)">
                                        <g id="Group-12" stroke-width="1" transform="translate(2.500000, 1.000000)">
                                            <g id="Group-11" fill-rule="nonzero">
                                                <path d="M3.13751228,3.74264069 L0.150147331,0.853553391 C-0.0500491103,0.658291245 -0.0500491103,0.341708755 0.150147331,0.146446609 C0.350343772,-0.0488155365 0.674926335,-0.0488155365 0.875122776,0.146446609 L3.5,2.68497122 L6.12487722,0.146446609 C6.32507367,-0.0488155365 6.64965623,-0.0488155365 6.84985267,0.146446609 C7.05004911,0.341708755 7.05004911,0.658291245 6.84985267,0.853553391 L3.86248772,3.74264069 C3.66229128,3.93790283 3.33770872,3.93790283 3.13751228,3.74264069 Z" transform="translate(3.500000, 1.944544) scale(1, -1) translate(-3.500000, -1.944544) ">
                                                </path>
                                            </g>
                                            <g transform="translate(3.500000, 8.000000) scale(1, -1) translate(-3.500000, -8.000000) translate(0.000000, 6.000000)" fill-rule="nonzero">
                                                <path d="M3.13751228,3.74264069 L0.150147331,0.853553391 C-0.0500491103,0.658291245 -0.0500491103,0.341708755 0.150147331,0.146446609 C0.350343772,-0.0488155365 0.674926335,-0.0488155365 0.875122776,0.146446609 L3.5,2.68497122 L6.12487722,0.146446609 C6.32507367,-0.0488155365 6.64965623,-0.0488155365 6.84985267,0.146446609 C7.05004911,0.341708755 7.05004911,0.658291245 6.84985267,0.853553391 L3.86248772,3.74264069 C3.66229128,3.93790283 3.33770872,3.93790283 3.13751228,3.74264069 Z" transform="translate(3.500000, 1.944544) scale(1, -1) translate(-3.500000, -1.944544) ">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </header>

        <!-- <img 
        src="data:image/jpeg;base64,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"
        style="width: 50vh;height: 50vh;"
        alt=""> -->
        <div class="regis-container">
            <div id="toast"></div>
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auto-form__heading">Đăng ký</h3>
                        <a href="./login.php" class="auth-form__switch-btn">Đăng nhập</a>
                    </div>

                    <!-- Start form register -->
                    <form method="POST" id="form-regis">
                        <div class="auth-form__group">
                            <input id="username-register" type="text" name="username-register" class="auth-form__input" placeholder="Tài khoản của bạn">
                            <label for="username-register" class="error error-name"></label>
                        </div>

                        <div class="auth-form__group">
                            <input id="email-register" type="email" name="email-register" class="auth-form__input" placeholder="Email của bạn">
                            <label for="" class="error error-email"></label>
                        </div>

                        <div class="auth-form__group">
                            <input id="password-register" type="password" name="password-register" class="auth-form__input " placeholder="Mật khẩu của bạn">
                            <label for="" class="error error-password"></label>
                        </div>

                        <div class="auth-form__group">
                            <input type="password" id="re-password-register" class="auth-form__input passInput" placeholder="Nhập lại mật khẩu">
                            <label for="" class="error error-repassword"></label>
                        </div>

                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                                <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                            </p>
                        </div>
                        <div class="auth-form__controls">
                            <button type="submit" id="btn-register" class="btn btn--primary active">ĐĂNG KÝ</button>
                        </div>
                    </form>
                    <!-- End form register -->

                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>


            </div>
        </div>

    </div>
    <script type="text/javascript">
        function showSuccessToast() {
            toast({
                title: "Successfull",
                message: "Đăng ký thành công tài khoản tại HawkStar Shop",
                type: "success",
                duration: 5000
            });
        }

        $(document).ready(function() {
            $("#form-regis").submit(function(e) {
                e.preventDefault(); // --- Prevent submit server ---

                // - Take value to form
                var username = $("input[type='text']").val();
                var email = $("input[type='email']").val();
                var password = $("#password-register").val();
                var re_password = $("#re-password-register").val();       

                // --- Check value to form ---

                //  - Flag variable -
                var flag = true;

                //  - Check username -
                if (username == '') {
                    $('.error-name').html('Username field must be at least 4 characters');
                    flag = false;
                } else {
                    $('.error-name').html('');
                }

                //  - Check email -
                if (email == '') {
                    $('.error-email').html('Email field can not be empty');
                    flag = false;
                } else {
                    $('.error-email').html('');
                }

                // - Check password -
                if (password == '') {
                    $('.error-password').html('Password field can not be empty');
                    flag = false;
                } else {
                    $('.error-password').html('');
                }

                // - Check re-password -
                if (re_password == '') {
                    $('.error-repassword').html('Re-password field can not be empty');
                    flag = false;
                } else {
                    $('.error-repassword').html('');
                }

                // - Check re-password -
                if (re_password != password) {
                    $('.error-repassword').html('Re-password different password. Please re-check');
                    flag = false;
                } else {
                    $('.error-repassword').html('');
                }

                if (username != '' &&
                    email != '' &&
                    password != '' &&
                    re_password != ''
                ) {
                    $.ajax({
                        type: 'POST',
                        url: 'handle_register.php',
                        data: {
                            username: username,
                            email: email,
                            password: password
                        },
                        success: function(data) {
                            var data = JSON.parse(data);
                            if (data.statusCode == 200) {
                                showSuccessToast();
                            } else {
                                $('.error-name').html('Account already exitst. Please enter another account');
                            }
                        }
                    })
                }
            })
        })
    </script>
    <script src="./assest/js/regis.js"></script>
</body>

</html>