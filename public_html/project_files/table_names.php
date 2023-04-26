<!DOCTYPE html>
<html>
<head>
<link href="maincss.css" rel="stylesheet" type="text/css"/>
<link href="center.css" rel="stylesheet" type="text/css"/>

</head>
<body>


<?php # CONNECT TO MySQL DATABASE.

echo '<p><a href="javascript:history.go(-1)" title="Return to previous page"><button class="back-button">Back</button></a></p>';
require( 'connect_db.php' ) ;

# Create a MySQL query.
$q = 'SHOW TABLES' ;

# Execute the query.
$r = mysqli_query( $dbc , $q ) ;

# Show results.
if( $r ) 
{
echo '<ul>';
  while ( $row = mysqli_fetch_array( $r , MYSQLI_NUM ) ) 
  {
    echo '<li><a href="' . $row[0] . '.php">' .  $row[0] . '</a></li>';
  }
echo '</ul>';
  mysqli_free_result( $r ) ;
}
else
{
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection.
mysqli_close( $dbc ) ;
