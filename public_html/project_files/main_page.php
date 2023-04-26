<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Home' ;

# Display body section.
echo "<p>You are now logged in, {$_SESSION['first_name']} {$_SESSION['last_name']} </p>";

# Create navigation links.
echo '<p><a href="goodbye.php">Logout</a></p>';
?>

<!DOCTYPE html>
<html>
<head>
	<link href="maincss.css" rel="stylesheet" type="text/css"/>
	<link href="center.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<ul>
	<li>
		<a href="show_all.php">View All Students</a>
	</li>
	<li>
		<a href="table_names.php">Update Student Information</a>
	</li>
	<li>
		<a href="add_remove_students/add_student.php">Add Student</a>
	</li>
	<li>
		<a href="add_remove_students/remove_student.php">Remove Student</a>
	</li

</ul>

</body>
</html>

