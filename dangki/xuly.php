<?php
header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'dangki') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['submit'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$address = trim($_POST['address']);
$phonenumber = trim($_POST['phonenumber']);


if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($address)) {
array_push($errors, "address is required"); 
}
if (empty($phonenumber)) {
array_push($errors, "phone is required"); 
}
if (empty($password)) {
array_push($errors, "Two password do not match"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM users WHERE username = '$username' OR address = '$address'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="dangki.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO users (username, password, address, phonenumber) VALUES ('$username','$password','$address','$phonenumber')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="../login/login.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "dia chi: ".$_POST['address']."<br/>";
echo "Số điện thoại: ".$_POST['phonenumber']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangki.php";</script>';
}
}
}
?>