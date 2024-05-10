<?php 
session_start();
require 'db/connect.php';

// if(isset($_POST['email-login']) || isset($_POST['password-login'])) {
//         //echo "<script>alert(\"Không được để trống, vui lòng nhập đầy đủ thông tin\"); window.location.href = 'index.php';</script>";
//         $email_login = htmlspecialchars($_POST['email-login']);
//         echo "<script>alert(\"$email_login\");</script>";
//         exit();
//     }



if(isset($_POST['email-login']) && isset($_POST['password-login'])) {
    //khai bao bien customer
    $email = $_POST['email-login'];
    $password = $_POST['password-login'];
    $password = sha1($password);
    //khai bao bien admin
    $password1 = $_POST['password-login']; 
    //Đăng nhập admin
    $sql1 = "SELECT * FROM `admin` WHERE `usernameAD` = '$email'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        if($password1 == $row1["passwordAD"]) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_email'] = $email;
            header("Location: admin.php");
        } 
        else {
            echo "<script>alert(\"Sai mật khẩu tài khoản admin\"); window.location.href = 'index.php';</script>";
        }
    }  
    else {

        
        //Đăng nhập bằng tài khoản người dùng
        $sql = "SELECT * FROM `customer` WHERE `email` = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            if ($password == $row['password']) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_email'] = $email; 
                echo "<script>alert(\"Đăng nhập thành công\"); window.location.href = 'index.php';</script>";
                exit();
            } else {
                echo "<script>alert(\"Sai mật khẩu, vui lòng nhập lại mật khẩu\"); window.location.href = 'index.php';</script>";
                exit();       
            }
        } else {
            // Email không tồn tại trong cơ sở dữ liệu
            echo "<script>alert(\"Chưa có tài khoản, vui lòng đăng ký\"); window.location.href = 'index.php';</script>";
            exit();
            
        }
    }
    }

    
    

?>