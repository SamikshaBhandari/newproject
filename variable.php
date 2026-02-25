<?php
// 1. Basic Variable and Output
$name = "Gemini";
$year = 2026;

echo "<h1>Welcome to PHP Scripting!</h1>";
echo "My name is " . $name . ". The year is " . $year . ".<br>";

// 2. Simple Math Function
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

$sum = addNumbers(10, 20);
echo "The sum of 10 and 20 is: " . $sum;
?>