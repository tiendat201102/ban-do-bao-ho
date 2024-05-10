<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quần Áo DLD</title>
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
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="./css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/Menu.css">
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
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery.easing.min.js"></script>
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
                        <a class="you" href="logout.php"><span>Đăng xuất</span></a>
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
    <!-- banner -->
    
        <script type="text/javascript" src="js/pignose.layerslider.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() {
                $('#visual').pignoseLayerSlider({
                    play: '.btn-play',
                    pause: '.btn-pause',
                    next: '.btn-next',
                    prev: '.btn-prev'
                });
            });
            //]]>
        </script>

    </div>
    <!-- //banner -->
    
<!-- Menu -->
    <!-- Menu Start -->
    <div class="product-easy">
        <div class="container">

            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true // 100% fit in a container
                    });
                });
            </script>
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>SẢN PHẨM BẠN TÌM KIẾM</span></li>
                        
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        <?php
                            // Kết nối đến cơ sở dữ liệu
                            include "db/connect.php";


                            $search_query = isset($_GET['searchInput']) ? $_GET['searchInput'] : ''; // Lấy từ khóa tìm kiếm từ URL
                            
                                $sql = "SELECT * FROM sanpham WHERE tensanpham LIKE '%$search_query%'"; // Sử dụng điều kiện LIKE để tìm các sản phẩm có tên chứa từ khóa tìm kiếm
                            $result = mysqli_query($conn, $sql);

                            // Truy vấn cơ sở dữ liệu để lấy thông tin về sản phẩm
                            // $sql = "SELECT * FROM sanpham";
                            // $result = mysqli_query($conn, $sql);

                            // Kiểm tra xem có sản phẩm nào hay không
                            if (mysqli_num_rows($result) > 0) {
                                // Hiển thị thông tin về sản phẩm
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="<?php echo $row["image"]; ?>" alt="" class="pro-image-front">
                                                <img src="<?php echo $row["image"]; ?>" alt="" class="pro-image-back">
                                                <!-- <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.php" class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div> -->
                                                <span class="product-new-top">Mới</span>

                                        </div>
                                    <div class="item-info-product">
                                        <p hidden class="id-product"><?php echo $row["id_sanpham"]; ?></p>
                                        <h4><a><?php echo $row["tensanpham"]; ?></a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price"><?php echo number_format($row["giaban"]); ?></span>
                                            <del>469 000 VND</del>
                                        </div>
                                        <a class="item_add single-item hvr-outline-out button2">Thêm Vào Giỏ Hàng</a>
                                    </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }else {
                                echo "<h3>Sản phầm bạn tìm kiếm không có.</h3>";
                            }

                            // Đóng kết nối đến cơ sở dữ liệu
                            mysqli_close($conn);
                        ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                                <a href="updateAccount.php">Quên mật khẩu?</a>
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
                            <p>Bạn đồng ý với<a href="#"> Điều khoản và Điều kiện</a> cũng như <a href="#">Chính sách quyền riêng tư của chúng tôi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
    </footer>
    <script>
        var userEmail = "<?php echo $userEmail; ?>";
    </script>
    <script src="js/cart.js"></script>
        <script>
            window.addEventListener('load', loadShoppingCart, false);
        </script>
</body>

</html>