<?php
$city = '';
$city_names = array(
    'hanoi' => 'Hà Nội',
    'hcm' => 'TP. Hồ Chí Minh',
    'danang' => 'Đà Nẵng',
    'hue' => 'Huế',
);
if(isset($_POST['btn_submit'])){
    $city = $_POST['city'] ?? '';
    echo $city_names[$city];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <select name="city">
            <option value="">-- Vui lòng chọn --</option>
            <option value="hanoi" <?php echo ($city == 'hanoi') ? 'selected' : ''; ?>>Hà Nội</option>
            <option value="hcm" <?php echo ($city == 'hcm') ? 'selected' : ''; ?>>TP. Hồ Chí Minh</option>
            <option value="danang" <?php echo ($city == 'danang') ? 'selected' : ''; ?>>Đà Nẵng</option>
            <option value="hue" <?php echo ($city == 'hue') ? 'selected' : ''; ?>>Huế</option>
        </select>
        <input type="submit" value="Gửi" name="btn_submit">
    </form>
</body>
</html>