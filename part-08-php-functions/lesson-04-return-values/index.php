<?php
// Hàm trả dữ liệu thông qua return 
function sum($a,$b){
    return $a + $b;
}
echo sum(2,3);
echo "<br>";
function calculateTotal($price, $quantity)
{
    return $price * $quantity;
}

$total = calculateTotal(100, 3);

echo $total;
?>