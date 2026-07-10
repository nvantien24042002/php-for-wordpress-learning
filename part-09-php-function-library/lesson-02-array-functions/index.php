<?php
//===Function array_key_exists() : This function checks if a key exists in an array.===//
/**
 * example_1
 */
$searchArray = ['first' => 1, 'second' => 4];
var_dump(array_key_exists('third', $searchArray));
/**
 * example_2
 */
$searchArray = ['first' => null, 'second' => 4];

var_dump(isset($searchArray['first']));
var_dump(array_key_exists('first', $searchArray));
//=== FUNCTION array_merge() : This function array_merge — Merge one or more arrays ====//
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1,$array2);
echo "<pre>";
print_r($result);
echo "</pre>";

$a = array(1,2,3,4,5);

var_dump(count($a));

// $b[0]  = 7;
// $b[5]  = 9;
// $b[10] = 11;
// var_dump(count($b));
echo "<br>";
$food = array('fruits' => array('orange', 'banana', 'apple'),
                'veggie' => array('carrot', 'collard', 'pea')
);
echo count($food);
echo "<br>";
echo count($food,COUNT_RECURSIVE); //COUNT_RECURSIVE Recursive counting, including subset counting.
echo "<br>";
// //===Function in_array() : This function checks if a value exists in an array.===//
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
/**
 *Example 3 in_array() with strict example
 */
$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
    echo "'12.4' found with strict check\n";
}

if (in_array(1.13, $a, true)) {
    echo "1.13 found with strict check\n";
}
// === array_search — Searches the array for a given value and returns the first corresponding KEY if successful  === //
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array);
echo "<pre>";
print_r($key);  // Return Key 
echo "</pre>";


$key = array_search('red', $array);
print_r($key);
//===Function implode() : This function implode — Join array elements with a string ===//
$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
echo "<br>";
// Empty string when using an empty array:
var_dump(implode('hello', [])); // string(0) ""
echo "<br>";
// The separator is optional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
//===Function array_push() : This function Push one or more elements onto the end of array ===//
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
echo "<pre>";
print_r($stack);
echo "</pre>";
//===Function array_pop() : This function array_pop — Pop the element off the end of array ===//
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
echo "<pre>";
print_r($stack);
echo "</pre>";
// ===function sort — Sort an array in ascending order===//
// ===function sort - 配列を昇順にソートする (はいれつをしょうじゅんにソートする)
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
?>