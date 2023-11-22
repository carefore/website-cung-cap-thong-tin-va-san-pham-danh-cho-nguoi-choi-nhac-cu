<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username"; // Thay bằng tên người dùng MySQL của bạn
$password = "password"; // Thay bằng mật khẩu MySQL của bạn
$dbname = "music_store";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$productName = $_POST['productName'];
$description = $_POST['description'];
$price = $_POST['price'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO products (product_name, description, price) VALUES ('$productName', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
