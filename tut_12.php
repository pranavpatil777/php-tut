<!-- 
In PHP, we have the following loop types:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array

-->

<?php 

// While loop
 $i = 1;
 while ($i < 6) {
   echo $i;
   $i++;
 }

//  Do-while loop
// example 1
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

// example 2
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

// example 3
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

// for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

// foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

// Functions in PHP 

function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
?>
