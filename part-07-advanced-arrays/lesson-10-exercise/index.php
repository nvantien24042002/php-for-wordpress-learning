<?php
$num_odd = array();
for ($i = 3; $i <= 150; $i++) {
    if ($i % 2 != 0) {
        $num_odd[] = $i;
    }
}
echo "<pre>";
print_r($num_odd);
echo "</pre>";
// Danh sách bài viết 
$list_posts = array(
    array('id' => 1, 'title' => 'Cách học PHP hiệu quả', 'author' => 'Admin'),
    array('id' => 2, 'title' => 'Lập trình hướng đối tượng trong PHP', 'author' => 'User1'),
    array('id' => 3, 'title' => 'Tại sao nên dùng Framework?', 'author' => 'Admin')
);
// Danh sách sản phẩm
$list_products = array(
    array('id' => 'SP01', 'name' => 'Điện thoại iPhone 15', 'price' => '25.000.000đ'),
    array('id' => 'SP02', 'name' => 'Laptop Dell XPS', 'price' => '32.000.000đ'),
    array('id' => 'SP03', 'name' => 'Tai nghe Sony', 'price' => '2.500.000đ')
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
</head>
<body>
    <h1>Danh sách bài viết</h1>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stt = 0;
                foreach ($list_posts as $post) { 
                    $stt++;
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['author']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h2>Danh sách sản phẩm</h2>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stt = 0;
                foreach ($list_products as $product) { 
                    $stt++;
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
