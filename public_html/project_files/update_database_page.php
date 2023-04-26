<?php
var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through all POST data and display it
    echo "<h1>Form Data</h1>";
    echo "<table>";
    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td><strong>$key</strong></td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
    echo "</table>";
}
