

<?php # CONNECT TO MySQL DATABASE.

$studentid = $_POST["studentid"];

var_dump($studentid);

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


$query = "DELETE FROM Student_Activities WHERE StudentID = '$studentid'";
$result = $conn->query($query);

$query = "DELETE FROM Student_Athlete WHERE StudentID = '$studentid'";
$result = $conn->query($query);

$query = "DELETE FROM Student_Favorite_Things WHERE StudentID = '$studentid'";
$result = $conn->query($query);

$query = "DELETE FROM Student_School_Details WHERE StudentID = '$studentid'";
$result = $conn->query($query);

$query = "DELETE FROM Student_School_Information WHERE StudentID = '$studentid'";
$result = $conn->query($query);


# Close the connection.
mysqli_close( $dbc ) ;

header( "Location:../show_all.php");
exit();