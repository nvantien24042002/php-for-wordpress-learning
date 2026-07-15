<?php
$data = [];
for ($i = 1; $i <= 47; $i++) {
    $data[] = "Bài viết số $i: Nội dung hấp dẫn thứ $i";
}

$num_per_page = 10;
$total_rows = count($data); // 47
$total_pages = ceil($total_rows / $num_per_page);
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Tính toán vị trí bắt đầu để cắt mảng
$start_index = ($current_page - 1) * $num_per_page;
// Cắt lấy 10 phần tử cho trang hiện tại
$page_data = array_slice($data, $start_index, $num_per_page);
?>
<style>
    .pagination a, .pagination strong {
        padding: 8px 12px;
        border: 1px solid #ddd;
        text-decoration: none;
        color: #333;
        margin: 2px;
    }
    .pagination strong {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
</style>

<div class="pagination">
    <?php
    for($i = 1; $i <= $total_pages; $i++) {
        if($i == $current_page) {
            echo "<strong>$i</strong> ";
        } else {
            echo "<a href='?page=$i'>$i</a> ";
        }
    }
    ?>
</div>