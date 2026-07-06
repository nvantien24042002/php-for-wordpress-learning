<?php
// Tính tổng các số chẵn từ 0 đến 10
// 0 + 2 + 4 + 6 + 8 + 10 (2k với k là số nguyên)
$t = 0;
for($i = 0; $i <= 10;$i++){
    if($i % 2 == 0){
        $t+=$i;
    }
}
echo $t;

?>