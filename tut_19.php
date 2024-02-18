<?php 
// Starting Mysql Database 
// Ways to connect Mysql database
// 1. MySQLi extension
//    --> procedural 
//    --> object oriented
// 2.PDO

// Connecting to the database 
$servername = "localhost";
$username = "root";
$password = "";

// create a connection 
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not sucessful
if(!$conn){
    die("Sorrry we Failed to connect :". mysqli_connect_error());
}else{
    echo "Connection was Successful";
}

?>