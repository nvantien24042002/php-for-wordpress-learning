<?php
if (isset($_GET['mod']) && isset($_GET['act'])) {
    $mod = $_GET['mod'];
    $act = $_GET['act'];

    echo "Module: " . $mod . "<br>";
    echo "Action: " . $act;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh mục sản phẩm</h1>
    <a href="?mod=product&act=main">Sản phẩm</a>
</body>
</html>