<?php
// Duyệt mảng 1 chiều
$List_prime = array(2,3,7,11);
$t = 0;
foreach($List_prime as $item){
    echo $item. "<br>";
    $t+=$item;
}
echo "Total: {$t}";
// Duyệt mảng đa chiều
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Văn Cương',
        'email' => 'phancuong.qt@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Hoàng Anh',
        'email' => 'hoanganh@gmail.com'
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Nguyễn Văn Tiến',
        'email' => 'nguyenvantienthuaan@gmail.com'
    )
);

foreach($list_users as $item){
    show_array($item);
}
foreach($list_users as $item){
    echo $item['id']."<br>";
    echo $item['fullname']."<br>";
    echo $item['email']."<br>";
    echo "<br>------------------------<br>";
}

?>