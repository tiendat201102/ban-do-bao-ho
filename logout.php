<?php
    session_start(); // Bắt đầu session
    // Unset các session
    $_SESSION['logged_in'] = false;
    $_SESSION['user_email'] = "Khách";
    // Xóa toàn bộ dữ liệu session
    session_unset();
    // Hủy session
    session_destroy();
    // Chuyển hướng người dùng về trang chính hoặc trang nào bạn muốn
    header("Location: index.php");
    exit();
?>