<?php 
  session_start();
  require 'db/connect.php';

    if(isset($_POST['email']) && isset($_POST['password'])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $repassword = $_POST["repassword"];
      
      if (!empty($email) && preg_match('/@gmail.com$/', $email)) {
        // Kiểm tra email không được trùng
        $check_email_sql = "SELECT * FROM `customer` WHERE `email` = '$email'";
        $check_email_result = $conn->query($check_email_sql);
        if ($check_email_result->num_rows > 0) {
          echo "<script>alert(\"Email đã tồn tại trong cơ sở dữ liệu.\"); window.location.href = 'index.php';</script>";
          exit();
        } else {
          if (!empty($password) && strlen($password) >= 8 && preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[^a-zA-Z0-9]/', $password)) {
            $hashed_password = sha1($password);
            if ($password == $repassword) {
              $sql = "INSERT INTO `customer` (`email`, `password`) VALUES('$email', '$hashed_password' ) ";
      
              if($conn->query($sql) === TRUE) {
                echo "<script>alert(\"Đăng ký thành công.\"); window.location.href = 'index.php';</script>";
              } else {
                echo "<script>alert(\"Tạo tài khoản thất bại.\"); window.location.href = 'index.php';</script>";
              }
            } else {
              echo "<script>alert(\"Mật khẩu nhập lại không đúng.\"); window.location.href = 'index.php';</script>"; 
              exit();
            }
          } else {
            echo "<script>alert(\"Mật khẩu phải có ít nhất 1 chữ in hoa, 1 chữ số, 1 ký tự đặc biệt và phải dài trên 8 ký tự.\"); window.location.href = 'index.php';</script>";
            exit();
          }
        }

      } else {
        echo "<script>alert(\"Email đã nhâp không hợp lệ.\"); window.location.href = 'index.php';</script>";
        exit();
      }
    }
    
?>
