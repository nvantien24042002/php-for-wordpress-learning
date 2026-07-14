<?php
$errors = []; // Thống nhất dùng $errors
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);

    // 1. Kiểm tra Name: Nếu rỗng thì báo lỗi
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    // 2. Kiểm tra Email
    if (strpos($email, "@") === false) {
        $errors[] = "Invalid email";
    }

    // 3. Kiểm tra Age
    if (!is_numeric($age) || $age < 0) {
        $errors[] = "Invalid age";
    }

    // Nếu không có lỗi nào trong mảng
    if (empty($errors)) {
        $success_message = "Registration successful for " . htmlspecialchars($name);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>

    <?php
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li style='color: red;'>" . $error . "</li>";
        }
        echo "</ul>";
    } elseif ($success_message) {
        echo "<p style='color: green;'>" . $success_message . "</p>";
    }
    ?>

    <form action="" method="post">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        </div>
        <div>
            <label>Email:</label><br>
            <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        </div>
        <div>
            <label>Age:</label><br>
            <input type="text" name="age" value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>">
        </div>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>