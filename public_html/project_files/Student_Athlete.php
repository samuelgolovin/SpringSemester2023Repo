<!DOCTYPE html>
<html>
<head>
<link href="maincss.css" rel="stylesheet" type="text/css"/>
<link href="center.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php

echo '<p><a href="javascript:history.go(-1)" title="Return to previous page"><button class="back-button">Back</button></a></p>';


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
$tableName = "Student_Athlete"; // Change this to the name of your table
$query = "SELECT StudentID FROM $tableName";
$result = $conn->query($query);

echo "<form action='student_athlete_files/update_page_SA.php' method='POST'>";
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
            echo "<td><input type='radio' checked='checked' name='select' value='$value'/>$value</td>";
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



