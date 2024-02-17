<?php 
echo "Welcome To associtive Array";

// Indexed Array : In indexed array each item has an index number. by default the first item has index 0 the second item has item 1 etc. 
$arr = array("this", "that", "what");
echo "<br>".$arr[0];

// Change the value of indexed array.
$arr[1] = "pranav";
echo "<br>".$arr[1];

// Example of array 
$cars = array("Volvo", "BMW", "Toyota");

// Types Of Array 
// 1.) Indexed Array
// 2.) Associative Array 
// 3.) Multidimensional Array

// Array items can be of any data type.
// The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.
// You can have different data types in the same array.

function myFunction() {
    echo "I come from a function!";
  }
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());
// calling a Array function
echo "<br>";
$myArr[3];

$cars = array("Volvo", "BMW", "Toyota");
echo "<br>".count($cars);


// PHP Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them.

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>"1954");
echo "<br>".$car["model"];

foreach ($car as $x => $y) {
    echo "$x: $y <br>";
  }

$fruits = [];
$fruits["name"] = "banana";
$fruits["Price"] = 30;
$fruits["type"] = "fruit";
echo "<br>";
foreach ($fruits as $x => $y) {
    echo "$x: $y <br>";
}

echo "<br>";
function myFunc() {
    echo "I come from a function!";
}
  
$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunc());
  
$myArr["message"];

// To delete array items we use unset() method
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

$mycars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($mycars["model"]);

// Remove Item From An Associative Array :

// With the array_splice() function you specify the index (where to start) and how many items you want to delete.

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

// MultiDimensional Array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>