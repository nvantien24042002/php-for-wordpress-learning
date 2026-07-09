<?php
function sum($a,$b){
    return $a + $b;
}
// function sum_multi_number() {
//     // echo func_num_args();
//     // func_get_args() trả về một mảng chứa tất cả các đối số
//     // $a = func_get_arg(0);
//     // $b = func_get_arg(1);
//     // echo "a = {$a} <br> b = {$b}";
//     $list_args = func_get_args();
//     $t = 0;
//     foreach ($list_args as $value) {
//         $t += $value;
//     }
//     echo $t;
// }
function sum_multi_number($list_number = array()){
    if(is_array($list_number)){
        $t = 0;
        foreach($list_number as $item){
            $t+=$item;
        }
        echo $t;
    }
}
$list_number = array(1,4,5);
sum_multi_number($list_number);
echo "<br>";
function create_input_text($name,$value,$option = array()){
    $id = isset($option['id']) ? $option['id'] : '';
    $class = isset($option['class']) ? $option['class'] : '';
    $html = "<input type='text' name='{$name}' value='{$value}' id='{$id}' class=''>";
    return $html;
}
echo create_input_text('username', 'Nguyen Van A');
?>
