<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if(isset($_POST['hobbies'])){
        $hobbies = $_POST['hobbies'];
        echo "<h3> Sở thích của bạn: </h3>";
        echo "<ul>";
            foreach($hobbies as $item){
                echo "<li>".htmlspecialchars($item)."</li>";
            }
        echo "</ul>";
    }else{
        echo "<p> Bạn chưa chọn sở thích nào </p>";
    }
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
    <form action="" method="post">
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading <br>
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports <br>
        <input type="checkbox" name="hobbies[]" value="Music"> Music <br>
        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming <br>
        
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>