<?php 
// Cookies | Session

// syntax to set cookie 
setcookie("category", "Books", time() + 86400, "/");
echo "Cookie is Created";
echo "<br>";

// get the cookie 

$cat = $_COOKIE["category"];
echo "The cookie we are getting is $cat";
echo "<br>";
?>