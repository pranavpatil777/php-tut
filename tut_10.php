<?php 
//   In this tutorial we are going to study about the conditioning statements
/* 
if (condition) {
    // code to be executed if condition is true;
  }
else{
    // else this code get executed
}
*/

$t = 10;

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// nested if statement 
$t = 20;

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>