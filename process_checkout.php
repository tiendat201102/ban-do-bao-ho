<?php
// Kết nối đến cơ sở dữ liệu MySQL
include "db/connect.php";

// Lấy dữ liệu được gửi từ trình duyệt
$data = json_decode(file_get_contents('php://input'), true);
$totalNumber = 0;
$totalPrice = 0;
$emailCustomer = "";
// Xử lý dữ liệu và đưa vào cơ sở dữ liệu
if (!empty($data)) { 
    foreach ($data as $item) {
        // Thực hiện truy vấn để lấy ID của khách hàng
        $emailCustomer = $item[3];
        $idCustomerQuery = "SELECT id FROM customer WHERE email = '" . $conn->real_escape_string($emailCustomer) . "'";
        $result = $conn->query($idCustomerQuery);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idCustomer = $row['id'];
        } else {
            echo "Không tìm thấy khách hàng có email: $emailCustomer";
            continue; // Bỏ qua và chuyển đến mục tiếp theo trong vòng lặp
        }

        // $productID = $conn->real_escape_string($item[0]); // id sản phẩm
        $totalNumber += $item[1]; // số lượng
        for($i=1; $i<=$item[1]; $i++)
            $totalPrice += $item[2]; // đơn giá 1 sản phẩm
    }
    session_start();
    $_SESSION['totalPrice'] = $totalPrice;
    // header("Location: xulythanhtoanmomoATM.php");

    $currentDate = date("Y-m-d");
    $sql = " INSERT INTO `donhang` (`id_khachhang`, `soluongsanpham`, `tongtien`, `ngaydathang`) VALUES ('$idCustomer', '$totalNumber', '$totalPrice', '$currentDate'); ";
    if ($conn->query($sql) !== TRUE) {
        echo "Lỗi khi chèn dữ liệu: " . $conn->error;
    }

    // Lấy ID của hóa đơn vừa được tạo
    $donhangId = $conn->insert_id;
    // echo "<script>alert('ID của hóa đơn vừa được tạo là: $donhangId');</script>";
    foreach ($data as $item) {
        $productId = $conn->real_escape_string($item[0]); // id sản phẩm
        $quantity = intval($item[1]); // Số lượng
        // Thực hiện truy vấn để chèn dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO `chitietphieuxuat` (`id_sanpham`, `id_donhang`, `soluongban`) VALUES ('$productId', '$donhangId', '$quantity')";
        
        if ($conn->query($sql) !== TRUE) {
            echo "Lỗi khi chèn dữ liệu: " . $conn->error;
        }
    }
}
// Đóng kết nối
$conn->close();exit();
?>

<script>
// Đoạn mã JavaScript để hiển thị giá trị của biến $idCustomer
    var idCustomer = "<?php echo $idCustomer; ?>";
    console.log(idCustomer);
</script>
