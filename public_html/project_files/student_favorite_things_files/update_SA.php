<?php # CONNECT TO MySQL DATABASE.

$studentID = $_POST["studentID"];
$food = $_POST["change_food"];
$store = $_POST["change_store"];


$servername = "10.14.12.20"; // Change this to your database server name
$username = "user17"; // Change this to your database username
$password = "user17"; // Change this to your database password
$dbname = "user17_SAD"; // Change this to your database name
$portnum = 3399;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $portnum);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve all data from a single table
$tableName = "Student_Favorite_Things"; // Change this to the name of your table
$query = "UPDATE $tableName SET Favorite_Food = '$food', Favorite_Store = '$store' WHERE StudentID = $studentID";
$result = $conn->query($query);

# Close the connection.
mysqli_close( $dbc ) ;

header( "Location:../show_all.php");
exit();