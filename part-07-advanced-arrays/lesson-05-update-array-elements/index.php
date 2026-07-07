<?php
$infor = array(
    'id'=>1,
    'fullname'=>"Nguyen Van Lui",
    'email'=>"nguyenvantienthuanan12b3@gmail.com",
);
echo "<pre>";
print_r($infor);
echo "</pre>";
$infor['fullname'] = "Nguyen Van Tien";
echo "<pre>";
print_r($infor);
echo "</pre>";

?>