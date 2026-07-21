<?php
// Khởi tạo các biến để tránh lỗi Undefined variable
$fullname = "";
$gender = "";
$error = array();

// Kiểm tra khi người dùng bấm nút Register (submit form)
if (isset($_POST['btn_reg'])) {
    
    // Xử lý kiểm tra dữ liệu (Validation)
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống Họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }

    if (empty($_POST['gender'])) {
        $error['gender'] = "Bạn chưa chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    // Nếu không có lỗi thì tiến hành xử lý đăng ký thành công ở đây
    if (empty($error)) {
        // Ví dụ: Lưu vào database hoặc thông báo thành công
        echo "Đăng ký thành công!";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ghi nhận dữ liệu sau khi submit</title>
        <meta charset="UTF-8">
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label><br>
            <input type="text" name="fullname" id="fullname" value="<?php if (!empty($fullname)) echo $fullname; ?>">
            <?php if (!empty($error['fullname'])) echo "<p class='error'>{$error['fullname']}</p>"; ?>
            <br>

            <label>Giới tính</label><br>
            <select name="gender">
                <option value="">--- Chọn ---</option>
                <option <?php if (!empty($gender) && $gender == 'male') echo "selected='selected'"; ?> value="male">Nam</option>
                <option <?php if (!empty($gender) && $gender == 'female') echo "selected='selected'"; ?> value="female">Nữ</option>
            </select>
            <?php if (!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>"; ?>
            <br><br>

            <input type="submit" name="btn_reg" value="Register"/>
        </form>
    </body>
</html>