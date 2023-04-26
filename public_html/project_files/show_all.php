<!DOCTYPE html>
<html>
<head>
<link href="maincss.css" rel="stylesheet" type="text/css"/>

</head>
<body>


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

echo '<p><a href="javascript:history.go(-1)" title="Return to previous page"><button class="back-button">Back</button></a></p>';

// Query to get table information
$query = "SHOW TABLES";
$result = $conn->query($query);

// Check if query was successful
if ($result) {
    echo "<h1>Table Information</h1>";
    echo "<table>";
    echo "<tr><th>Table Name</th><th>Data</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $tableName = $row['Tables_in_' . $dbname];
        echo "<tr>";
        echo "<td>$tableName</td>";
        echo "<td>";
        $queryData = "SELECT * FROM $tableName";
        $resultData = $conn->query($queryData);
        if ($resultData) {
            echo "<table>";
            echo "<tr>";
            while ($rowData = $resultData->fetch_assoc()) {
                echo "<tr>";
                foreach ($rowData as $key => $value) {
                    echo "<td>$key: $value</td>";
                }
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Failed to retrieve data for $tableName";
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Failed to retrieve table information";
}

// Close connection
$conn->close();

?>

</body>
</html>
