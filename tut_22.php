<?php 
// Connecting to the database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "pranav1";

// create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not sucessful
if(!$conn){
    die("Sorrry we Failed to connect :". mysqli_connect_error());
}else{
    echo "Connection was Successful";
}

$name = "Pranav";
$destination = "Germany";

// creating a table in the db
$sql = "INSERT INTO `trip` (`sno`, `name`, `dest`) VALUES ('3', '$name', '$destination')";

$result = mysqli_query($conn, $sql);

if($result){
    echo "The data was inserted successfully";
}else{
    echo "The data was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";
?>