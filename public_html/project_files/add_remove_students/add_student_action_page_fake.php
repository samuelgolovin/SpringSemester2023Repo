

<?php # CONNECT TO MySQL DATABASE.
var_dump($_POST);

$studentid = $_POST["studentid"];
$club = $_POST["club"];
$sport = $_POST["sport"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$food = $_POST["food"];
$store = $_POST["store"];
$gpa = $_POST["gpa"];
$balance = $_POST["balance"];
$major = $_POST["major"];
$school = $_POST["school"];

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



$query = "INSERT INTO Student_Activities(StudentID, Clubs, Sport) VALUES('$studentid', '$club', '$sport')";
$result = $conn->query($query);

$query = "INSERT INTO Student_Athlete(StudentID, StudentName, StudentGender) VALUES('$studentid', '$name', '$gender')";
$result = $conn->query($query);

$query = "INSERT INTO Student_Favorite_Things(StudentID, Favorite_Food, Favorite_Store) VALUES('$studentid', '$food', '$store')";
$result = $conn->query($query);

$query = "INSERT INTO Student_School_Details(StudentID, GPA, Balance) VALUES('$studentid', '$gpa', '$balance')";
$result = $conn->query($query);

$query = "INSERT INTO Student_School_Information(StudentID, Major, School_Name) VALUES('$studentid', '$major', '$school')";
$result = $conn->query($query);

$query = "SELECT * FROM Student_School_Details WHERE StudentID = '$studentid'";
$result = $conn->query($query);

/*
var_dump($result->fetch_assoc());

if ($result->fetch_assoc() == NULL) {
	# Close the connection.
	mysqli_close( $dbc ) ;

	header( "Location:add_student.php");
	exit();
}
*/
# Close the connection.
mysqli_close( $dbc ) ;

header( "Location:../show_all.php");
exit();
