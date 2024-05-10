<?php
// Kết nối đến cơ sở dữ liệu MySQL
include "db/connect.php";

// Lấy productId từ dữ liệu gửi đến từ AJAX
if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    // Lấy số lượng tồn kho hiện tại của sản phẩm
    $sql = "SELECT soluongtonkho FROM sanpham WHERE id_sanpham = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $soLuongTonKho = $row['soluongtonkho'];

        if ($soLuongTonKho == 0) {
            // Nếu số lượng tồn kho bằng 0, hiển thị thông báo "Sản phẩm hết hàng"
            echo "hetHang";
        } else {
            // Nếu số lượng tồn kho lớn hơn 0, trừ đi 1 từ số lượng tồn kho và cập nhật vào cơ sở dữ liệu
            $soLuongTonKho--;
            // Cập nhật số lượng tồn kho mới vào cơ sở dữ liệu
            $sql = "UPDATE sanpham SET soluongtonkho = $soLuongTonKho WHERE id_sanpham = $productId";
            if ($conn->query($sql) === TRUE) {
                echo "Cập nhật số lượng tồn kho thành công.";
            } else {
                echo "Lỗi khi cập nhật số lượng tồn kho: " . $conn->error;
            }
        }
    } else {
        echo "Không tìm thấy sản phẩm có id: $productId";
    }
} elseif (isset($_POST['removeProductId']) && isset($_POST['numberProducId'])) {
    $removeProductId = $_POST['removeProductId'];
    $numberProducId = $_POST['numberProducId'];
    // Tăng số lượng tồn kho của sản phẩm lên 1 và cập nhật vào cơ sở dữ liệu
    $sql_update_stock = "UPDATE sanpham SET soluongtonkho = soluongtonkho + $numberProducId WHERE id_sanpham = $removeProductId";
    if ($conn->query($sql_update_stock) === TRUE) {
        echo "Xóa sản phẩm khỏi giỏ hàng thành công.";

    } else {
        echo "Lỗi khi cập nhật số lượng tồn kho: " . $conn->error;
    }

} elseif(isset($_POST['productIDAdd']) && isset($_POST['numberIdAdd'])){
    $productId = $_POST['productIDAdd'];
    $numberid = $_POST['numberIdAdd'];
    // Lấy số lượng tồn kho hiện tại của sản phẩm
    $sql = "SELECT soluongtonkho FROM sanpham WHERE id_sanpham = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $soLuongTonKho = $row['soluongtonkho'];

        if ($soLuongTonKho == 0) {
            // Nếu số lượng tồn kho bằng 0, hiển thị thông báo "Sản phẩm hết hàng"
            echo "hetHang";
        } else {
            // Nếu số lượng tồn kho lớn hơn 0, trừ đi 1 từ số lượng tồn kho và cập nhật vào cơ sở dữ liệu
            $soLuongTonKho--;
            // Cập nhật số lượng tồn kho mới vào cơ sở dữ liệu
            $sql = "UPDATE sanpham SET soluongtonkho = $soLuongTonKho WHERE id_sanpham = $productId";
            if ($conn->query($sql) === TRUE) {
                echo "Cập nhật số lượng tồn kho thành công...";
            } else {
                echo "Lỗi khi cập nhật số lượng tồn kho:::" . $conn->error;
            }
        }
    } else {
        echo "Không tìm thấy sản phẩm có id::: $productId";
    }
}elseif(isset($_POST['productIDSub']) && isset($_POST['numberIdSub'])){
    $productId = $_POST['productIDSub'];
    $numberid = $_POST['numberIdSub'];
    // Lấy số lượng tồn kho hiện tại của sản phẩm
    $sql = "SELECT soluongtonkho FROM sanpham WHERE id_sanpham = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $soLuongTonKho = $row['soluongtonkho'];
        // Nếu số lượng tồn kho lớn hơn 0, trừ đi 1 từ số lượng tồn kho và cập nhật vào cơ sở dữ liệu
        $soLuongTonKho++;
        // Cập nhật số lượng tồn kho mới vào cơ sở dữ liệu
        $sql = "UPDATE sanpham SET soluongtonkho = $soLuongTonKho WHERE id_sanpham = $productId";
        if ($conn->query($sql) === TRUE) {
            echo "Cập nhật số lượng tồn kho thành công.";
        } else {
            echo "Lỗi khi cập nhật số lượng tồn kho:" . $conn->error;
        }
    } else {
        echo "Không tìm thấy sản phẩm có id: $productId";
    }
}

$conn->close();
?>
