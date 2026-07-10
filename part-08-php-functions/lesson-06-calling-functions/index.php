<?php
function checkEven($n){
    return $n % 2 == 0;
}
echo checkEven(4);

echo "<br>";
function findMax($a){
    $max = $a[0];
    foreach($a as $item){
        if($item > $max){
            $max = $item;
        }
    }
    return $max;
}
$a = array(10,2,12,1);
echo findMax($a);
?>