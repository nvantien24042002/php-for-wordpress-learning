<?php
/*
IF CONTROL STRUCTURE
The control structure is used to branch the execution of functions based 
on different conditions:
if structure
if else structure
if...elseif...else structure
nested control structures  
 */
//==== IF STATEMENT====//
// Check even
$a = 10;
if($a %2 == 0){
    echo "{$a} is even number<br>";
}
// ====IF ELSE STATEMENT====//
$a = 20;
if($a % 2 == 0){
    echo "{$a} is even number";
}else{
    echo "{$a} is odd number";
}
echo "<br>";

// === IF ELSE IF ELSE STATEMENT === //
// 0 < 4
// 4 < 5.5

$point = 7;

if ($point < 4) {
    echo 'F';
} elseif ($point < 5.5) {
    echo 'D';
} elseif ($point < 7) {
    echo 'C';
} elseif ($point < 8.5) {
    echo 'B';
} else {
    echo 'A';
}


if($point >=0 && $point <=10){
    $point = 7;
    if ($point < 4) {
        echo 'F';
    } elseif ($point < 5.5) {
        echo 'D';
    } elseif ($point < 7) {
        echo 'C';
    } elseif ($point < 8.5) {
        echo 'B';
    } else {
        echo 'A';
    }
}else {
    echo "Dữ liệu nhập vào không hợp lệ";
}
?>