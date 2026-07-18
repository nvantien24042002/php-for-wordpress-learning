<?php
$product = array(
    1 => array(
        'id' => 1,
        'name' => 'Laptop Dell',
        'category' => "electronics",
    ),
    2 => array(
        'id' => 2,
        'name' => 'Áo thun',
        'category' => "clothing",
    ),
    4 => array(
        'id' => 4,
        'name' => 'Quần Jean',
        'category' => "clothing",
    ),
    3 => array(
        'id' => 3,
        'name' => 'C++ Programming Language',
        'category' => "book",
    ),
    5 => array(
        'id' => 5,
        'name' => 'Laravel',
        'category' => "book",
    ),
);
$key = isset($_GET['key']) ? $_GET['key'] : '';
$found_count = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for products using GET</title>
</head>
<body>
    <h2>Search product</h2>
    <form action="" method="get">
        <input type="text" name="key" id="" value="<?php ?>">
        <button type="submit">Search</button>
    </form>
    <ul>
        <?php
        foreach($product as $item){
            if ($key == '' || stripos($item['name'], $key) !== false) {
                echo "<li>" . htmlspecialchars($item['name']) . " (" . htmlspecialchars($item['category']) . ")</li>";
                $found_count++;
            }
        }
        ?>
    </ul>
</body>
</html>