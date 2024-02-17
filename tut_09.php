<!-- 
    In this tut we are going to learn about the operators in the php
 -->
<?php 
//  Operators in php
// 1.Arithmetic operators 
// 2.assignment operators 
// 3.comparison operators
// 4.logical operators 

// Assignment operator
// += -= /= *= %= etc
$a = 45;
$b = 8;

// Arithmetic operator
echo $a + $b."<br>";
echo "when subtract ". ($a - $b). "<br>";
echo "when Multiply ". ($a * $b). "<br>";
echo "when divide ". ($a / $b). "<br>";
echo "when percentile ". ($a % $b). "<br>";
echo "when exponent ". ($a ** $b). "<br>";

$x = 7;
$y = 8;

echo "For x == y, the result is";
echo var_dump($x == $y);
echo "<br>";

echo "For x > y, the result is";
echo var_dump($x > $y);
echo "<br>";

echo "For x < y, the result is";
echo var_dump($x < $y);
echo "<br>";

echo "For x => y, the result is";
echo var_dump($x >= $y);
echo "<br>";

echo "For x <= y, the result is";
echo var_dump($x <= $y);
echo "<br>";

echo "For x <> y, not equal to , the result is";
echo var_dump($x <> $y);
echo "<br>";

// != Not equal operator 
// === identical equal operator 
// !=== not identical equal operator 

// logical operator 
// 1.) And  &&
// 2.) OR   ||
// 3.) NOT   !
?>