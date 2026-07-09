<?php
function sum($a,$b){
    return $a + $b;
}
echo sum(1,2);

function calculateRectangleArea($length, $width) {
    return $length * $width;
}
echo "<br>";
// Bài tập 2 : Kiểm tra tính chẵn lẽ
$n = 3;
echo ($n % 2 == 0) ? "$n là số chẵn" : "$n là số lẻ";
echo "<br>";
echo calculateRectangleArea(2,5);
echo "<br>";
// Bài tập 3 : Tìm số lớn nhất trong mảng
function findMax($a){
    $max = $a[0];
    foreach($a as $item){
        if($item > $max){
            $max = $item;
        }
    }
    return $max;
}
// Tests
$numbers = [3, 7, 2, 9, 5, 1];
echo "Số lớn nhất trong mảng là ".findMax($numbers);
?>