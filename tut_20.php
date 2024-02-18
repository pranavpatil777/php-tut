<?php 
// Connecting to the database 
$servername = "localhost";
$username = "root";
$password = "";

// create a connection 
$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("<br>Sorrry we Failed to connect :" . mysqli_connect_error());
}else{
    echo "Connection was Successful";
}

// create a db
$sql = "CREATE DATABASE pranav1";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully";
}else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";


?>