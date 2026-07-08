<?php
$list_prime = array(2,3,5,7);
/**
 * B1 : Chuẩn bị mảng đã xử lý
 * B2 : Tạo cấu trúc html mẫu 
 * B3 : Duyệt mảng 
 * B4 : Đổ dữ liệu 
 */
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhúng dữ liệu mảng lên html</title>
</head>
<body>
    <h1>Danh sách số nguyên tố</h1>
    <table border="1">
        <thead>
            <tr>
                <td>Stt</td>
                <td>Số nguyên tố</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                $temp = 0;
                foreach($list_prime as $item){
                    $temp++;
            ?>
            <tr>
                <td><?php echo $temp; ?></td>
                <td><?php echo $item; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h2>Danh sách thành viên</h2>
    <table border="1" width="600">
        <tr>
            <th>Stt</th>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Email</th>
        </tr>
        <?php
        $temp = 0;
        foreach ($list_users as $user) {
            $temp++;
        ?>
        <tr>
            <td align="center" width="50"><?php echo $temp; ?></td>
            <td align="center" width="50"><?php echo $user['id']; ?></td>
            <td width="200"><?php echo $user['fullname']; ?></td>
            <td width="200"><?php echo $user['email']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>