<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Limitless Defense Shop | Home</title>
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
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" href="./css/thanhtoan.css" text="text.css" media="all">
    <!-- //pignose css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <!-- <script src="js/simpleCart.min.js"></script> -->
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <!-- <script src="js/jquery.easing.min.js"></script> -->
</head>

<body>
    <!-- ///// -->
    <?php
        // Kiểm tra nếu session đã đăng nhập, thêm thuộc tính disabled cho nút đăng nhập
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            $use1_disabled = 'none';
        } else {
            $use1_disabled = '';
        }
    ?>
    <p id="status" style="float: right; padding-right: 20px">
        <?php 
            echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'Khách';
            $userEmail = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'Khách';; 
        ?>
    </p>
    <br>
    <!-- ///// -->

    <!-- header -->
    <div class="header">
        <div class="container">
            <ul>
                <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Giao Hàng Nhanh Chóng</li>
                <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Miễn Phí Vận Chuyển Đơn Hàng Nội Địa</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">dld_cit2024@gmail.com</a></li>
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
                <form action="searchProduct.php" method="GET">
                    <div class="search">
                        <input id="searchInput" type="search" name="searchInput" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    </div>

                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="" selected disabled>Chọn đồ bạn muốn tìm</option>
                            <option value="quanAo.php">Quần áo bảo hộ</option>
                            <option value="gangTay.php">Găng Tay Bảo Hộ</option>
                            <option value="giay.php">Giày Bảo Hộ</option>     
                            <option value="mu.php">Nón Bảo Hộ</option>
                            <!-- <option value="">Mắt Kính Bảo Hộ</option> -->
                        </select>
                    </div>
                    <script src="js/script.js"></script>
                    <div class="sear-sub" >
                        <input type="submit" value=" " onclick="searchProduct()">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 header-right footer-bottom">
                <ul>
                    <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4" style="display: <?php echo $use1_disabled; ?>"><span>ĐĂNG NHẬP</span></a>
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
                        <a class="you" href="logout.php"><span>Đăng Xuất</span></a>
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
                                <li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Trang Chủ<span class="sr-only">(current)</span></a></li>
                                <li class=" menu__item "><a class="menu__link" href="quanAo.php">Quần-Áo Bảo Hộ</a></li>
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
                                <p style="color:white;">Giỏ Hàng</p>
                                <div class="number-items">
                                    <p style="color:white;"simpleCart_quantity" class="ordered-items simpleCart_quantity"> </p>
                                </div>
                                
                            </div>

                        </h3>
                    </a>
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //banner-top -->

    <!-- //banner -->
    <!-- check out -->
    <div class="checkout">
        <div class="container">
            <h3>GIỎ HÀNG CỦA BẠN</h3>
            <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">

                <table class="timetable_sub list-items" id="list-items">
                    <thead class="list-head"></thead>
                    <tbody class="list-body"></tbody>
                    <tfoot class="list-foot"></tfoot>
                </table>
            </div>
            

            <!-- Phương thức thanh toán - Payment method -->
            <div id="Payment-method">
                <h3>Chọn Phương Thức Thanh Toán</h3>
                <div class="payment-method">
                <form class="" method="POST" target="_self" enctype="application/x-www-form-urlencoded"action="xulythanhtoanmomoQR.php">
                    <label class="payment-option">
                        <!-- <input type="radio" name="payment" value="momo"> -->
                        <div class="method-details">
                            <!-- <span class="method-name">Momo</span> -->
                            <img src="https://img.mservice.io/momo-payment/icon/images/logo512.png" alt="Momo">
                            <input id="payQR" type="submit" name="momo" value="Thanh toán bằng momo QR" style="margin-left: 10px;">
                        </div>
                    </label>
                </form>
                <form class="" method="POST" target="_self" enctype="application/x-www-form-urlencoded"action="xulythanhtoanmomoATM.php">
                    <label class="payment-option">
                        <!-- <input type="radio" name="payment" value="vietcombank"> -->
                        <div class="method-details">
                                
                            <img src="https://img.mservice.io/momo-payment/icon/images/logo512.png" alt="Momo">
                            <input id="payATM" type="submit" name="momo" value="Thanh toán bằng momo ATM" style="margin-left: 10px;">
                        </div>
                    </label>
                </form>
                </div>
    </div>

            <div class="checkout-left">

                <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua hàng</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //check out -->
    <!-- //product-nav -->
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

    <!-- //footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="col-md-3 footer-left">
                    <h2>
                        <a href="index.php"><img src="images/logo.jpg" alt=" " /></a>
                    </h2>
                    <p>Dynamic Limitless Defense không những mang lại cho người dùng một thương hiệu uy tín mà còn mang ý nghĩa thể hiện tính bảo hộ năng động trong nhiều trường hợp, giúp cho người dùng an tâm khi dùng nó và cũng mang tính chất lượng cao
                        của sản phẩm.</p>
                </div>
                <div class="col-md-9 footer-right">
                    <div class="col-sm-6 newsleft">
                        <h3>ĐĂNG KÝ ĐỂ NHẬN THÔNG TIN MỚI NHẤT!!</h3>
                    </div>
                    <div class="col-sm-6 newsright">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <input type="submit" value="Submit">
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
                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Địa chỉ : phường Xuân Khánh, quận Ninh Kiều <span>Thành phố Cần Thơ.</span></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">dld_cit2024@gmail.com</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Điện thoại : 0368 686868</li>
                            </ul>
                        </div>
                        <div class="col-md-4 sign-gd flickr-post">
                        <h4>Flickr Posts</h4>
                        <ul>
                            <li>
                                <a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                            <li>
                                <a href="single.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a>
                            </li>
                        </ul>
                    </div> 
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p class="copy-right">&copy 2024 Dynamic Limitless Defense Shop. All rights reserved | Design by <a href="http://w3layouts.com/">Vũ Luân_Tiến Đạt_Minh Đức</a></p>
            </div>
        </div>
        <!-- //footer -->
        <!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa"> 
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-bottom">
                                    <h3>Sign up for free</h3>
                                    <form>
                                        <div class="sign-up">
                                            <h4>Email :</h4>
                                            <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                        </div>
                                        <div class="sign-up">
                                            <h4>Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                        </div>
                                        <div class="sign-up">
                                            <h4>Re-type Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                        </div>
                                        <div class="sign-up">
                                            <input type="submit" value="REGISTER NOW">
                                        </div>

                                    </form>
                                </div>
                                <div class="login-right">
                                    <h3>Sign in with your account</h3>
                                    <form>
                                        <div class="sign-in">
                                            <h4>Email :</h4>
                                            <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                        </div>
                                        <div class="sign-in">
                                            <h4>Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="single-bottom">
                                            <input type="checkbox" id="brand" value="">
                                            <label for="brand"><span></span>Remember Me.</label>
                                        </div>
                                        <div class="sign-in">
                                            <input type="submit" value="SIGNIN">
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
    </body>
    <script>
        var userEmail = "<?php echo $userEmail; ?>";
        // Thiết lập biến JavaScript từ giá trị PHP
    </script>
    <script src="js/cart.js"></script>
        <!-- <button onclick="exportToExcel()">Excel</button> -->
    <script>
        window.addEventListener('load', showCart, false);
        // window.onload = loadShopingCart;
    </script>

    <script>
    
        document.addEventListener("DOMContentLoaded", function() {
            var checkoutButtonATM = document.getElementById('payATM');
            var checkoutButtonQR = document.getElementById('payQR');
            
            checkoutButtonQR.addEventListener('click', function() {

                // Lấy dữ liệu từ bảng
                var tbody = document.getElementById('list-items').getElementsByTagName('tbody')[0];
                var data = [];
                var userEmail = "<?php echo $userEmail; ?>";
                for (var i = 0; i < tbody.rows.length; i++) {
                    var row = tbody.rows[i];
                    var rowData = [];
                    var str = "";
                    rowData.push(row.cells[1].innerText.trim()); //1 ma
                    rowData.push(row.cells[3].querySelector('span').innerText.trim()); // so luong
                    console.log(rowData);
                    debugger;
                    str = row.cells[4].innerText.trim(); // dongia
                    str = str.replace("₫", "");
                    str = str.replace(/\s/g, "");
                    let price = parseFloat(str.replace(/\./g, ''));

                    rowData.push(price);
                    rowData.push(userEmail);
                    // alert(userEmail);
                    data.push(rowData);
                }
                
                localStorage.removeItem('cartItems_' + userEmail);

                // Chuyển đổi mảng data thành chuỗi JSON
                var jsonData = JSON.stringify(data);
                // console.log(jsonData);
                // Gửi dữ liệu lên máy chủ bằng AJAX
                // Tạo một đối tượng XMLHttpRequest
                // Gửi dữ liệu lên máy chủ bằng AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'process_checkout.php', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.send(jsonData);
                
                // Xử lý phản hồi từ máy chủ
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        if (xhr.status == 200) {
                            // Xử lý phản hồi thành công từ máy chủ
                            console.log("Dữ liệu đã được gửi thành công!");
                        } else {
                            // Xử lý lỗi nếu có
                            console.log("Đã có lỗi xảy ra: " + xhr.status);
                        }
                    }
                };
                
                // alert("Thanh toán thành công");
                // Quay trở lại trang chủ sau khi hiển thị cảnh báo
                
                // window.location.href = "./";

            });

            
            checkoutButtonATM.addEventListener('click', function() {

                // Lấy dữ liệu từ bảng
                var tbody = document.getElementById('list-items').getElementsByTagName('tbody')[0];
                var data = [];
                var userEmail = "<?php echo $userEmail; ?>";
                for (var i = 0; i < tbody.rows.length; i++) {
                    var row = tbody.rows[i];
                    var rowData = [];
                    var str = "";
                    rowData.push(row.cells[1].innerText.trim());
                    rowData.push(row.cells[3].querySelector('span').innerText.trim()); // so luong
                    
                    str = row.cells[4].innerText.trim();
                    str = str.replace("₫", "");
                    str = str.replace(/\s/g, "");
                    let price = parseFloat(str.replace(/\./g, ''));

                    rowData.push(price);
                    rowData.push(userEmail);
                    
                    
                    // alert(userEmail);
                    data.push(rowData);
                    console.log(data);
                    debugger;
                }
                localStorage.removeItem('cartItems_' + userEmail);

                // Chuyển đổi mảng data thành chuỗi JSON
                var jsonData = JSON.stringify(data);
                // console.log(jsonData);
                // Gửi dữ liệu lên máy chủ bằng AJAX
                // Tạo một đối tượng XMLHttpRequest
                // Gửi dữ liệu lên máy chủ bằng AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'process_checkout.php', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.send(jsonData);
                
                // Xử lý phản hồi từ máy chủ
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        if (xhr.status == 200) {
                            // Xử lý phản hồi thành công từ máy chủ
                            console.log("Dữ liệu đã được gửi thành công!");
                        } else {
                            // Xử lý lỗi nếu có
                            console.log("Đã có lỗi xảy ra: " + xhr.status);
                        }
                    }
                };
                
                // alert("Thanh toán thành công");
                // Quay trở lại trang chủ sau khi hiển thị cảnh báo
                
                // window.location.href = "./";

            });;
            
        });

    </script>

</html>

<?php


?>

