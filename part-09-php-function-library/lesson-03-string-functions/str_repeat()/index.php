<?php
/*
Bài tập 1:   Tạo thanh phân cách (Cơ bản)
            Đề bài: Trong giao diện web, đôi khi bạn cần một thanh gạch ngang để chia cắt nội dung 
            Hãy sử dụng str_repeat() để tạo ra một chuỗi gồm 30 dấu gạch ngang (-).
 */
$separator = str_repeat("-",30);
// echo $separator;
echo $separator. "<br>";
echo "Tiêu đề bài viết";
echo "<br>".$separator;
/*
Bài tập 2: "Mã hóa" thông tin (Trung bình)
Đề bài: Để ẩn bớt một phần của số thẻ tín dụng hoặc số điện thoại, người ta thường dùng ký tự *.
    Cho biến $phone = "0901234567";.
Yêu cầu: Hãy giữ lại 3 số cuối, còn các số phía trước thay bằng dấu *.
 */
$phone = "0901234567";
$length = strlen($phone);
echo "<br>";
echo $length;
echo "<br>";
$hidden = $length - 3;
echo $hidden;
$hiddenPart = str_repeat("*", $hidden);
$lastThree = substr($phone, -3);
echo $lastThree;
echo "<br>";
echo $hiddenPart . $lastThree;
/*
Bài tập 3: Vẽ hình tam giác đơn giản (Nâng cao)
Đề bài: Sử dụng str_repeat() và vòng lặp for để vẽ một tam giác ký tự * như sau:
*/
echo "<br>";

for($i = 1;$i <= 4;$i++){
    echo str_repeat("*", $i) . "<br>";
}
?>