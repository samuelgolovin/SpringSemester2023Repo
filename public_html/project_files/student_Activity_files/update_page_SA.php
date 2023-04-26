<!DOCTYPE html>
<html>
<head>
<link href="../maincss.css" rel="stylesheet" type="text/css"/>

</head>
<body>


<p><a href="javascript:history.go(-1)" title="Return to previous page"><button class="back-button">Back</button></a></p>


<?php
// Database connection parameters
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
$tableName = "Student_Activities"; // Change this to the name of your table
$studentID = intval($_POST["select"]);
$query = "SELECT * FROM $tableName WHERE StudentID = $studentID";
$result = $conn->query($query);

echo "<form action='update_SA.php' method='POST'>";
// Check if query was successful
if ($result) {
    echo "<h1>$tableName Data</h1>";
    echo "<table>";
    echo "<tr>";
    // Print column headers
    while ($fieldInfo = $result->fetch_field()) {
        echo "<th>{$fieldInfo->name}</th>";
    }
    echo "</tr>";
    // Print data rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $key => $value) {
		if ($key == "StudentID") {
			echo "<td><input type='' name='studentID' value='$value' readonly/></td>";
		} else
		if ($key == "Clubs") {
			echo "<td><input type='text' name='change_club' value='$value'/></td>";
		} else 
		if ($key == "Sport") {
			echo "<td><input type='text' name='change_sport' value='$value'/></td>";
		} 
            
        }
        echo "</tr>";
    }
    echo "</table>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
} else {
    echo "Failed to retrieve data from $tableName";
}

// Close connection
$conn->close();

?>
