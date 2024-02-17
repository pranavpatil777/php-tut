<!-- Variable is PhP -->
<!-- php is case sensitive or partially case Sensitive -->
<?php //opening tag of php

$name = "Pranav";
$income = 922349320;
echo "This guy is $name and his <br> income is Rs. $income";

// Rules for creating PHP Variables
// 1️⃣ Start with a $ sign 
// 2️⃣ cannot start with a number 
// 3️⃣ must start with a letter or an underscore character
// 4️⃣ can only contain alphanumeric characters and underscrores
// 5️⃣ variables in php are case sensitive 

// php Data types
// 1. String 
// 2. Integer 
// 3. Float 
// 4. Boolean 
// 5. Object 
// 6. Null 
// 7. Array 

// Strings function
// The PHP strlen() function returns the length of a string.
echo strlen("Hello world!");

// The PHP str_word_count() function counts the number of words in a string.
echo str_word_count("Hello world!");

// The PHP strpos() function searches for a specific text within a string.
echo strpos("Hello world!", "world");

// How to concatenate strings in php 
echo "The length of" . "my String is" .$name;
// or 
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;

// The strtoupper() function returns the string in upper case:
    $x = "Hello World!";
    echo strtoupper($x);

    // The strtolower() function returns the string in lower case:
    $x = "Hello World!";
    echo strtolower($x);

    // The PHP str_replace() function replaces some characters with some other characters in a string.
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);

    // The PHP strrev() function reverses a string.
    $z = "Hello World!";
    echo strrev($z);
    // Remove Whitespace
    // Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
    
    // Example
    // The trim() removes any whitespace from the beginning or the end:
    
    $x = " Hello World! ";
    echo trim($x);
    // Learn more in our trim() Function Reference.
    
    // Convert String into Array
    // The PHP explode() function splits a string into an array.
    
    // The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
    
    // Note: The separator is required.
    
    // Example
    // Split the string into an array. Use the space character as separator:
    
    $x = "Hello World!";
    $y = explode(" ", $x);
    
    //Use the print_r() function to display the result:
    print_r($y);
    
    /*
    Result:
    Array ( [0] => Hello [1] => World! )
    */

    // Start the slice at index 6 and end the slice 5 positions later:
    $x = "Hello World!";
    echo substr($x, 6, 5);

//closing tage of php 👇
?> 