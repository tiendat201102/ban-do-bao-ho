<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nien_luan_nganh";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn ->connect_error) {
        die("Ket noi khong thanh cong".$conn ->connect_error);
    }
    //echo "Ket noi thanh cong"

?>