<?php
// Exercise 1: Remove spaces

/**
 * Hàm trim() là gì?
 * Hàm trim() có tác dụng loại bỏ các khoảng trắng (hoặc các ký tự đặc biệt khác) ở đầu và cuối của một chuỗi.
 */
$username = "   Nguyen      Van Tien  ";
echo $username;
echo "<br>";
echo strlen($username);
echo "<br>";
echo trim($username);
/*
Bài tập 2: Kết hợp trim() và ucwords()
    Đề bài: Bạn có một biến $rawInput = "   nguyen van a   ";. Hãy thực hiện:

    Dùng trim() để làm sạch chuỗi.

    Dùng ucwords() để viết hoa chữ cái đầu của mỗi từ.

    In ra kết quả cuối cùng.
*/
$rawInput = "   nguyen van a   ";
$result = trim($rawInput);
echo ucwords($result);

/*
    Thử thách:
    Cho chuỗi $userEntry = "   nguyen.van.a@gmail.com   ";.
    Hãy viết một đoạn code để:

    Làm sạch chuỗi (trim).

    Tách lấy phần tên trước dấu @ (strpos + substr).

    Thay các dấu chấm . bằng khoảng trắng (str_replace).

    Viết hoa chữ cái đầu của mỗi từ (ucwords).

    Cuối cùng, in ra kết quả: Nguyen Van A.
 */
$userEntry = "   nguyen.van.a@gmail.com   ";
$cleanString = trim($userEntry);
$position = strpos($cleanString, "@");
$rawUsername = substr($cleanString,0,$position);
echo "<br>";
echo $rawUsername;
echo "<br>";
$replacedName = str_replace(".", " ", $rawUsername);
echo $replacedName;
echo "<br>";
$finalName = ucwords($replacedName);
echo $finalName;
?>