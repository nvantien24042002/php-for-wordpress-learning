<?php 
// Exercise 1: Normalize usernames
$userName = "nguyễn văn tiến";

echo ucfirst($userName);  //Nguyễn văn tiến
echo "<br>";
// Exercise 2: Combining strlen() and ucfirst() Check the length of a variable $message.
$message = "hello";
if(strlen($message) > 5){
    echo ucfirst($message);
}else{
    echo strtoupper($message);
}
echo "<br>";
// Exercise 3: Capitalize the first letter of each word.
$postTitle = "php programming is fun";
echo ucwords($postTitle);
// Exercise 4: Normalize the name from Email
$userEmail = 'nguyenvantienthuanan12b3@gmail.com';
$atPosition = strpos($userEmail,"@");
echo "<br>";
echo "Vị trí của dấu @ là: ".$atPosition;
$rawUserName = substr($userEmail,0,$atPosition);
echo "<br>";
echo $rawUserName;
echo "<br>";
$formatUserName = ucfirst($rawUserName);
echo $formatUserName;
?>