<?php
// Thêm phần tử có key xác định
$infor = array(
    'id'=>1,
    'fullname'=>"Nguyen Van Tien",
    'email'=>"nguyenvantienthuanan12b3@gmail.com",
);

// Lưu trữ thêm số điện thoại
// Số điện thoại => tell

$infor['phone'] = '0787731781';

// Thêm phần tử có key mặc định 

$list_prime = array(1,3,5,7);

$list_prime[] = 11;


echo "<pre>";
print_r($infor);
echo "</pre>";

echo "<pre>";
print_r($list_prime);
echo "</pre>";

?>