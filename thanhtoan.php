<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- link thanhtoan.css -->
    <link rel="stylesheet" href="./css/thanhtoan.css" text="text.css" media="all">
    <!-- //for-mobile-apps -->
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="./css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="./js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="./js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="./js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
    <script src="js/jquery.easing.min.js"></script>
</head>

<body>
    <p style="float: right">
        <?php 
            echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'Khách'; 
        ?>
    </p>
    <!-- header -->
    <div class="header">
        <div class="container">
            <ul>
                <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Giao Hàng Nhanh Chóng</li>
                <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Miễn Phí Vận Chuyển Đơn
                    Hàng Nội Địa</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>

                    <!-- <a href="mailto:info@example.com"><p id="report"></a> -->
                </li>
            </ul>
        </div>
    </div>
    <!-- //header -->
    <!-- header-bot -->
    <div class="header-bot">
        <div class="container">
            <div class="col-md-3 header-left">
                <h1>
                    <a href="index.php"><img src="images/logo.jpg"></a>
                </h1>
            </div>
            <div class="col-md-6 header-middle">
                <form>
                    <div class="search">
                        <input type="search" value="Tìm kiếm" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    </div>
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="quanAo.php">Quần áo bảo hộ</option>
                            <option value="null">Giày Bảo Hộ</option>
                            <option value="AX">Găng Tay Bảo Hộ</option>
                            <option value="AX">Nón Bảo Hộ</option>
                            <option value="AX">Mắt Kính Bảo Hộ</option>
                        </select>
                    </div>
                    <div class="sear-sub">
                        <input type="submit" value=" ">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 header-right footer-bottom">
                <ul>
                    <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>ĐĂNG NHẬP</span></a>

                    </li>
                    <li>
                        <a class="fb" href="#"></a>
                    </li>
                    <li>
                        <a class="twi" href="#"></a>
                    </li>
                    <li>
                        <a class="insta" href="#"></a>
                    </li>
                    <li>
                        <a class="you" href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- //header-bot -->
    <!-- banner -->
    <div class="ban-top">
        <div class="container">
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                                <li class="active "><a class="menu__link" href="index.php">Trang Chủ<span class="sr-only">(current)</span></a></li>
                                <li class=" menu__item menu__item menu__item--current"><a class="menu__link" href="quanAo.php">Quần-Áo Bảo Hộ</a></li>
                                <li class=" menu__item"><a class="menu__link" href="gangTay.php">Găng Tay Bảo Hộ</a></li>
                                <li class=" menu__item"><a class="menu__link" href="giay.php">Giày Bảo Hộ</a></li>
                                <li class=" menu__item"><a class="menu__link" href="mu.php">Mũ Bảo Hộ</a></li>
                                <li class=" menu__item "><a class="menu__link" href="contact.php">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="top_nav_right">
                <div class="cart box_1">
                    <a href="checkout.php">
                        <h3>
                            <div class="total">
                                <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> sản phẩm)</div>

                        </h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Giỏ Hàng</a></p>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Phương thức thanh toán - Payment method -->
    <div id="Payment-method">
        <h3>Chọn Phương Thức Thanh Toán</h3>
        <div class="payment-method">
            <label class="payment-option">
                <input type="radio" name="payment" value="momo">
                <div class="method-details">
                    <span class="method-name">Momo</span>
                    <img src="https://img.mservice.io/momo-payment/icon/images/logo512.png" alt="Momo">
                </div>
            </label>
            <label class="payment-option">
                <input type="radio" name="payment" value="vietcombank">
                <div class="method-details">
                    <span class="method-name">Ngân Hàng Vietcombank</span>
                    <img src="https://admin.tamlyvietphap.vn/uploaded/Images/Original/2020/10/16/logo_vietcombank_1610091313.jpg" alt="Vietcombank">
                </div>
            </label>
            <label class="payment-option">
                <input type="radio" name="payment" value="cash">
                <div class="method-details">
                    <span class="method-name">Tiền Mặt</span>
                    <img src="https://th.bing.com/th/id/OIP.7G7V0foSLBACKeMGfcWEtAHaG_?rs=1&pid=ImgDetMain" alt="Tiền Mặt">
                </div>
            </label>
            <label class="payment-option">
                <input type="radio" name="payment" value="zalopay">
                <div class="method-details">
                    <span class="method-name">ZaloPay</span>
                    <img src="https://th.bing.com/th/id/OIP.aFfCcKiTvj2G1ILmDEwIiQAAAA?rs=1&pid=ImgDetMain" alt="ZaloPay">
                </div>
            </label>
            <label class="payment-option">
                <input type="radio" name="payment" value="visa">
                <div class="method-details">
                    <span class="method-name">Visa</span>
                    <img src="https://th.bing.com/th/id/OIP.EToQaql50Fd6v6DSFuZK9gHaEK?rs=1&pid=ImgDetMain" alt="Visa">
                </div>
            </label>
            <label class="payment-option">
                <input type="radio" name="payment" value="paypal">
                <div class="method-details">
                    <span class="method-name">Paypal</span>
                    <img src="https://th.bing.com/th/id/OIP.08pbRxr6BpSE6zsBpVVN_wHaFj?rs=1&pid=ImgDetMain" alt="Paypal">
                </div>
            </label>
        </div>
        <button class="pay-button" onclick="showPaymentMethod()">Thanh Toán</button>
    </div>
    
    
    <script>
        function showPaymentMethod() {
            var selectedPayment = document.querySelector('input[name="payment"]:checked');
            if (selectedPayment) {
                var paymentMethod = selectedPayment.value;
                alert("Bạn đã chọn phương thức thanh toán: " + paymentMethod);
                alert("Thanh toán thành công");
                // Quay trở lại trang chủ sau khi hiển thị cảnh báo
                localStorage.removeItem('cartItems');
                window.location.href = "./";
            } else {
                alert("Vui lòng chọn một phương thức thanh toán trước khi thanh toán");
            }
        }
    </script>

    <div class="coupons">
            <div class="container">
                <div class="coupons-grids text-center">
                    <div class="col-md-3 coupons-gd">
                        <h3>Mua hàng dễ dàng và nhanh chóng qua các bước</h3>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <h4>Đăng Nhập Tài Khoản</h4>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <h4>Lựa Chọn Những Sản Phẩm Bạn Mua</h4>

                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                        <h4>Tiến Hành Thành Toán</h4>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    <footer>
            <!-- footer -->
            <div class="footer">
                <div class="container">
                    <div class="col-md-3 footer-left">
                        <h2>
                            <a href="index.php"><img src="images/logo.jpg" alt=" " /></a>
                        </h2>
                        <p>Dynamic Limitless Defense không những mang lại cho người dùng một thương hiệu uy tín mà còn
                            mang ý nghĩa thể hiện tính bảo hộ năng động trong nhiều trường hợp, giúp cho người dùng an
                            tâm khi dùng nó và cũng mang tính chất lượng
                            cao của sản phẩm.</p>
                    </div>
                    <div class="col-md-9 footer-right">
                        <div class="col-sm-6 newsleft">
                            <h3>ĐĂNG KÝ ĐỂ NHẬN THÔNG TIN MỚI NHẤT!</h3>
                        </div>
                        <div class="col-sm-6 newsright">
                            <form>
                                <input type="text" value="Email" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                <input type="submit" value="GỬI">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="sign-grds">
                            <div class="col-md-4 sign-gd">
                                <h4>Thông Tin Về Các Sản Phẩm</h4>
                                <ul>
                                    <li><a href="x.php">Quần áo bảo hộ</a></li>
                                    <li><a href="xx.php">Giày bảo hộ</a></li>
                                    <li><a href="xxx.php">Găng tay bảo hộ</a></li>
                                    <li><a href="xxxx.php">Nón bảo hộ</a></li>
                                    <li><a href="xxxxx.php">Mắt kính bảo hộ</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 sign-gd-two">
                                <h4>Thông Tin về Chúng Tôi</h4>
                                <ul>
                                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Địa chỉ :
                                        phường Xuân Khánh, quận Ninh Kiều <span>Thành phố Cần Thơ.</span></li>
                                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a
                                            href="mailto:info@example.com">dld_cit2024@gmail.com</a></li>
                                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Điện thoại : 0368
                                        686868</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="copy-right">&copy 2024 Dynamic Limitless Defense Shop. All rights reserved | Design by <a
                            href="http://w3layouts.com/">Vũ Luân_Tiến Đạt_Minh Đức</a></p>
                </div>
            </div>
            <!-- //footer -->
            <!-- login -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-bottom">
                                        <h3>Đăng Ký Tài Khoản Miễn Phí</h3>
                                        <form action="./reg.php" method="post">
                                            <div class="sign-up">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';"
                                                    onblur="if (this.value == '') {this.value = 'Type here';}"
                                                    required="" name="email">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Mật khẩu :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';"
                                                    onblur="if (this.value == '') {this.value = 'Password';}"
                                                    required="" name="password">

                                            </div>
                                            <div class="sign-up">
                                                <h4>Xác nhận mật khẩu :</h4>
                                                <input type="password" value="rePassword" onfocus="this.value = '';"
                                                    onblur="if (this.value == '') {this.value = 'Password';}"
                                                    required="" name="repassword">

                                            </div>
                                            <div class="sign-up">
                                                <input type="submit" value="ĐĂNG KÝ NGAY" name="btnreg">  
                                            </div>

                                        </form>
                                    </div>


                                    <!-- Đăng nhập/Đăng ký  -->
                                    <div class="login-right">
                                        <h3>ĐĂNG NHẬP VỚI TÀI KHOẢN CỦA BẠN</h3>
                                        <form  method="post" action="./login.php">
                                            <div class="sign-in">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';"
                                                    onblur="if (this.value == '') {this.value = 'Type here';}"
                                                    required="" name="email-login">
                                            </div>
                                            <div class="sign-in">
                                                <h4>Mật khẩu :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';"
                                                    onblur="if (this.value == '') {this.value = 'Password';}"
                                                    required="" name="password-login">
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                            <div class="single-bottom">
                                                <input type="checkbox" id="brand" value="">
                                                <label for="brand"><span></span>Ghi nhớ tài khoản</label>
                                            </div>
                                            <div class="sign-in">
                                                <input type="submit" value="SIGNIN">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <p>Bạn đồng ý với<a href="#"> Điều khoản và Điều kiện</a> cũng như <a href="#">Chính
                                        sách quyền riêng tư của chúng tôi</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //login -->
            
        </footer>
</body>