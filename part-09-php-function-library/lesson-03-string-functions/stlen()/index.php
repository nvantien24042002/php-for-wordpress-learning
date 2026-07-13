<?php
// Bài tập 1
$password = "12345678";
if(strlen($password) < 8){
    echo "Mật khẩu quá ngắn, vui lòng nhập ít nhất 8 ký tự!";
}else {
    echo "Mật khẩu hợp lệ";
}
// Bài tập 2 
$string = "Chào mừng bạn đến với lập trình PHP";
echo "<br>Chuỗi của bạn có độ dài là ". strlen($string);
// Bài tập 3 Trích xuất tên người dùng
$email = "nguyenvantien@gmail.com";
echo "<br>";
// Hàm strpos giúp tìm kiếm một từ bên trong một câu dài 
$position_mark = strpos($email,"@");
echo $position_mark;
$username = substr($email,0,$position_mark);
echo "<br>";
$username2 = substr($email,$position_mark + 1);
echo "<br>";
echo strlen($username);
echo "<br>";
echo $username;
echo "<br>";
echo $username2;
// Bài tập 4 : Kiểm tra chuỗi đối xứng
$input = "radar";
$doDai = strlen($input);
echo "<br>";
if ($doDai > 1) {
    // Đảo ngược chuỗi
    $daoNguoc = strrev($input);
    
    // So sánh
    if ($input == $daoNguoc) {
        echo "'$input' là chuỗi đối xứng.";
    } else {
        echo "'$input' KHÔNG phải là chuỗi đối xứng.";
    }
} else {
    echo "Chuỗi quá ngắn để kiểm tra.";
}
?>