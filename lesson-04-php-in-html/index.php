<?php
$post_title = "Bão số 1 vừa hình thành, Quảng Ninh, Hải Phòng và Hưng Yên bị ảnh hưởng";
$post_content = "(Dân trí) - Dự báo do ảnh hưởng của bão số 1 (bão Maysak), đêm 3-5/7, khu vực Đông Bắc Bộ và Thanh Hóa có mưa to đến rất to, riêng Đông Bắc Bộ mưa to 150-250mm, cục bộ có nơi trên 350mm.
Trung tâm Dự báo khí tượng thủy văn quốc gia cho biết rạng sáng 3/7, áp thấp nhiệt đới trên khu vực phía Tây Bắc đặc khu Hoàng Sa đã mạnh lên thành bão, trở thành cơn bão số 1 năm 2026. Bão này có tên quốc tế là Maysak.

Hồi 4h ngày 3/7, vị trí tâm bão ở vào khoảng 17,3 độ Vĩ Bắc; 110,1 độ Kinh Đông, trên vùng biển phía Tây Bắc đặc khu Hoàng Sa, cách đảo Hải Nam (Trung Quốc) khoảng 120km về phía Nam. Sức gió mạnh nhất vùng gần tâm bão cấp 8, giật cấp 10, bão di chuyển theo hướng Tây với tốc độ khoảng 10km/h."
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhúng PHP vào html</title>
</head>
<body>
    <div id="content">
        <h1 class="post-title"><?php echo $post_content ?></h1>
        <div class="post-content">
            <?php echo $post_content ?>
        </div>
    </div>
</body>
</html>