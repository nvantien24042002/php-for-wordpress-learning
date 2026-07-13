<?php 
// Bài tập 1
$total_rum = 10;
$num_per_page = 4;

$num_pages = ceil($total_rum / $num_per_page);
echo $num_pages;
// Bài tập 2
$number = array(1,2,3,4,5,6,7,8,9,10);
$list_even = array();
foreach($number as $item){
    if($item %2 == 0){
        $list_even[] = $item;
    }
}
// return $list_even;
echo "<pre>";
print_r($list_even);
echo "</pre>";
// Bài tập 3: Hiển thị mảng danh mục theo đa cấp 
// Giáo dục 
// -- Khuyến học
// -- Du học
// Thể thao
// --Châu Âu
// --Châu Á
$list_post_cat = array(
    1 =>array(
        'id'=>1,
        'cat_title'=>'Giáo dục',
        'level'=>0,
    ),
    2 =>array(
        'id'=>2,
        'cat_title'=>'Khuyến học',
        'level'=>1,
    ),
    3 =>array(
        'id'=>3,
        'cat_title'=>'Du học',
        'level'=>1,
    ),
    4 =>array(
        'id'=>4,
        'cat_title'=>'Thể thao',
        'level'=>0,
    ),
    5 =>array(
        'id'=>5,
        'cat_title'=>'Châu Âu',
        'level'=>1,
    ),
    6 =>array(
        'id'=>6,
        'cat_title'=>'Ngoại Hạng Anh',
        'level'=>2,
    ),
    7 =>array(
        'id'=>7,
        'cat_title'=>'Châu Á',
        'level'=>1,
    ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập về thư viện hàm</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($list_post_cat)){ 
                $t = 0;
                foreach($list_post_cat as $item){
                    $t++;
            ?>
                <tr>
                    <td><?php echo $t; ?></td>
                    <td><?php echo str_repeat("--",$item['level'])." ". $item['cat_title']; ?></td>
                </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</body>
</html>