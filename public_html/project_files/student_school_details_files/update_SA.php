<!DOCTYPE html>
<html>
<head>
<link href="maincss.css" rel="stylesheet" type="text/css"/>

</head>
<body>


<p><a href="javascript:history.go(-1)" title="Return to previous page"><button class="back-button">Back</button></a></p>


<?php # CONNECT TO MySQL DATABASE.

$studentID = $_POST["studentID"];
$gpa = $_POST["change_gpa"];
$balance = $_POST["change_balance"];


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
$tableName = "Student_School_Details"; // Change this to the name of your table
$query = "UPDATE $tableName SET GPA = '$gpa', Balance = '$balance' WHERE StudentID = $studentID";
$result = $conn->query($query);

# Close the connection.
mysqli_close( $dbc ) ;

header( "Location:../show_all.php");
exit();