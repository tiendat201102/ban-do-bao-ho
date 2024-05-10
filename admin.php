<!DOCTYPE html>
<html>
<head>
    <title>DANH MỤC QUẢN LÝ SẢN PHẨM</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>

<?php
// Kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nien_luan_nganh";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn ->connect_error) {
    die("Ket noi khong thanh cong".$conn ->connect_error);
}
//echo "Ket noi thanh cong"

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý form thêm sản phẩm
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_loaisp = $_POST['id_loaisp'];
    $tensanpham = $_POST['tensanpham'];
    $giaban = $_POST['giaban'];
    $soluongtonkho = $_POST['soluongtonkho'];
    $motachitiet = $_POST['motachitiet'];
    $image = $_POST['image'];

    // Query thêm hoặc cập nhật thông tin sản phẩm vào cơ sở dữ liệu
    $sql = "INSERT INTO sanpham (id_loaisp, tensanpham, giaban, soluongtonkho, motachitiet, image) 
            VALUES ('$id_loaisp', '$tensanpham', '$giaban', '$soluongtonkho', '$motachitiet', '$image')
            ON DUPLICATE KEY UPDATE 
            id_loaisp='$id_loaisp', tensanpham='$tensanpham', giaban='$giaban', soluongtonkho='$soluongtonkho', motachitiet='$motachitiet', image='$image'";

    if ($conn->query($sql) === TRUE) {
        echo "Thông tin sản phẩm đã được lưu thành công.";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}


// Xử lý form xóa sản phẩm
if (isset($_GET['delete'])) {
    $id_sanpham = $_GET['delete'];

    // Query xóa sản phẩm khỏi cơ sở dữ liệu
    $sql_delete = "DELETE FROM sanpham WHERE id_sanpham='$id_sanpham'";

    if ($conn->query($sql_delete) === TRUE) {
        $delete_success_message = "Bạn đã xóa sản phẩm thành công.";

        // Cập nhật lại ID của sản phẩm sau khi xóa
        $sql_update_id = "SET @count = 0";
        $conn->query($sql_update_id);
        $sql_update_id = "UPDATE sanpham SET sanpham.id_sanpham = @count:= @count + 1";
        $conn->query($sql_update_id);
    } else {
        echo "Lỗi: " . $sql_delete . "<br>" . $conn->error;
    }
}
?>
<h1>QUẢN TRỊ VIÊN WEBSITE KINH DOANH THIẾT BỊ BẢO HỘ LAO ĐỘNG</h1>
<!-- Hiển thị form thêm sản phẩm -->
<div>
   <table class="product-table">
    <tr>
        <th>ID</th>
        <th>Tên Phân Loại Sản Phẩm</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Quần Áo</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Găng Tay</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Giày</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Mũ</td>
    </tr>
</table>
</div>
<h2>Thêm Sản Phẩm</h2>
<form method="post" action="">
    
    <label for="id_loaisp">ID Loại Sản Phẩm (sử dụng ID trong bảng trên): </label>
    <input type="text" id="id_loaisp" name="id_loaisp">
    
    <label for="tensanpham">Tên Sản Phẩm:</label>
    <input type="text" id="tensanpham" name="tensanpham">
    
    <label for="giaban">Giá Bán:</label>
    <input type="number" id="giaban" name="giaban">
    
    <label for="soluongtonkho">Số Lượng Tồn Kho:</label>
    <input type="number" id="soluongtonkho" name="soluongtonkho">
    
    <label for="motachitiet">Mô Tả Chi Tiết:</label>
    <textarea id="motachitiet" name="motachitiet"></textarea>
    
    <label for="image">Link Ảnh:</label>
    <input type="text" id="image" name="image">
    
    <input type="submit" value="Thêm">
</form>

<br>
<label for="filter">Danh sách theo loại sản phẩm:</label>
<select id="filter">
    <option value="">Tất cả</option>
    <option value="Quần Áo">Quần Áo</option>
    <option value="Mũ">Mũ</option>
    <option value="Găng Tay">Găng Tay</option>
    <option value="Giày">Giày</option>
</select>
<!-- hiển thị dnah sách sản phẩm -->
<div id="printArea">
<h2>Danh Sách Sản Phẩm</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Bán (đồng)</th>
        <th>Số Lượng Tồn Kho</th>
        <th>Mô Tả Chi Tiết</th>
        <th>Link Ảnh</th>
        <th>Chức năng</th>
    </tr>
    <?php
    // Query danh sách sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT * FROM sanpham";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_sanpham'] . "</td>";
            echo "<td>" . $row['tensanpham'] . "</td>";
            echo "<td>" . $row['giaban'] . "</td>";
            echo "<td>" . $row['soluongtonkho'] . "</td>";
            echo "<td>" . $row['motachitiet'] . "</td>";
            echo "<td>" . $row['image'] . "</td>";
            echo "<td><a href='javascript:void(0);' onclick='deleteProduct(" . $row['id_sanpham'] . ");'>Xóa</a></td>";


            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Không có sản phẩm nào trong cơ sở dữ liệu.</td></tr>";
    }

    ?>
</table>
</div>

<button onclick="printPage()">In Danh Sách Sản Phẩm</button> <!-- Thêm nút Print -->
<div class="admin-back-btn">
    <a href="index.php">Quay về Trang Chủ</a>
</div>


<!-- JavaScript -->
<script>
    function confirmDelete() {  
        if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")) {
            return true;
        } else {
            return false;
        }
    }

    // Thêm hàm để chuyển về trang admin.php sau khi xóa
    function deleteProduct(id) {
        if (confirmDelete()) {
            window.location.href = 'admin.php?delete=' + id;
        }
    }
    function printPage() {
        var printContents = document.getElementById("printArea").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents; // Khôi phục nội dung ban đầu sau khi in
    }
    document.getElementById('filter').addEventListener('change', function() {
    var selectedType = this.value.trim().toLowerCase();
    var rows = document.querySelectorAll('table tr');

    rows.forEach(function(row) {
        var type = row.cells[1].textContent.toLowerCase(); // Thay [1] bằng vị trí cột tên loại sản phẩm trong bảng

        if (selectedType === '' || type.includes(selectedType)) {
            row.style.display = ''; // Hiển thị hàng nếu loại sản phẩm khớp hoặc chưa chọn
        } else {
            row.style.display = 'none'; // Ẩn hàng nếu loại sản phẩm không khớp
        }
    });
});

</script>

</body>
</html>

<?php
// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
