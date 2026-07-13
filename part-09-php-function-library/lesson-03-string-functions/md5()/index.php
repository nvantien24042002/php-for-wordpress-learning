<?php
/*
Bài tập 1: Băm chuỗi đơn giản
Đề bài: Hãy lấy một chuỗi văn bản bất kỳ và in ra giá trị MD5 của nó.

*/
$originalString = "hello";
$hashedString = md5($originalString);

echo "Chuỗi gốc: " . $originalString . "<br>";
echo "Chuỗi sau khi md5: " . $hashedString;

$userInput = "password";
$storedHash = "5f4dcc3b5aa765d61d8327deb882cf99";

// Băm mật khẩu người dùng nhập vào để so sánh với cái đã lưu
if (md5($userInput) === $storedHash) {
    echo "Đăng nhập thành công!";
} else {
    echo "Sai mật khẩu!";
}
/*
Bài tập 3: Kết hợp md5() và strlen()
Đề bài: Kiểm tra độ dài của một chuỗi. Nếu độ dài > 5, hãy băm chuỗi đó bằng md5(). Nếu không, in ra "Chuỗi quá ngắn".
 */

$secret = "nguyen van tien";

if (strlen($secret) > 5) {
    echo "Mã băm: " . md5($secret);
} else {
    echo "Chuỗi quá ngắn.";
}
?>