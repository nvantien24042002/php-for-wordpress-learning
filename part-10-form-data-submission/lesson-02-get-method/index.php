<?php
$keyword = $_GET['keyword'] ?? '';
echo "Your search for: ". $keyword;
echo "<br>";
$id = $_GET['id'] ?? '';
echo $id;
// GET data 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="keyword">
        <button type="submit">Search</button>
    </form>
    <a href="?id=5">View Product 5</a>
</body>
</html>