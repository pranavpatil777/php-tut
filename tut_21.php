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

// creating a table in the db
$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL, `dest`VARCHAR(6) NOT NULL, PRIMARY KEY(`sno`))";

$result = mysqli_query($conn, $sql);

if($result){
    echo "The table was created successfully";
}else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";
?>