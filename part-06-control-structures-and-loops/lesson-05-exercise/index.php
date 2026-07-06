<?php
// Bài tập 1
function tinhTongChan($n) {
    $t1 = 0;
    for ($i = 2; $i <= $n; $i += 2) {
        $t1 += $i;
    }
    return $t1;
}
function tinhTongNghichDao($n) {
    $t2 = 0;
    for ($i = 3; $i <= $n; $i += 3) {
        $t2 += 1 / $i;
    }
    return $t2;
}
function tinhTongChuoi($n) {
    $t3 = 0;
    for ($i = 1; $i <= $n; $i++) {
        $t3 += $i / ($i + 1);
    }
    return $t3;
}
function giaiPTBac2($a, $b, $c) {
    if ($a == 0) {
        // Phương trình trở thành bậc 1: bx + c = 0
        return ($b != 0) ? "Nghiệm x = " . (-$c / $b) : "Phương trình vô nghiệm/vô số nghiệm";
    }

    $delta = $b * $b - 4 * $a * $c;

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    } elseif ($delta == 0) {
        return "Phương trình có nghiệm kép: x = " . (-$b / (2 * $a));
    } else {
        return "Phương trình vô nghiệm";
    }
}
$n = 10;
echo "Tổng T1 (n=$n): " . tinhTongChan($n) . "<br>";
echo "Tổng T2 (n=$n): " . tinhTongNghichDao($n) . "<br>";
echo "Tổng T3 (n=$n): " . tinhTongChuoi($n) . "<br>";
echo "Giải PT (1x^2 - 3x + 2 = 0): " . giaiPTBac2(1, -3, 2);
?>