<?php
if (isset($_POST['btn_reg'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    echo "Đăng ký thành công!<br>";
    echo "Họ tên: " . $fullname . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Số điện thoại: " . $phone . "<br>";
    echo "Giới tính: " . $gender . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng ký</title>
</head>
<body>
    <form action="" method="post">
        <label for="fullname">Fullname</label><br>
        <input type="text" name="fullname" id="fullname"><br>
        
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>
        
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br>
        
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" id="phone"><br>
        
        <label for="gender">Giới tính:</label><br>
        <select name="gender" id="gender">
            <option value="">-- Chọn giới tính --</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select><br><br>
        <input type="submit" value="Đăng ký" name="btn_reg">
    </form>
</body>
</html>