<?php   

$startphp = $_GET['var1'];
$endphp = $_GET['var2'];
$servername = "database-1.cgvkojo0ntbn.us-east-1.rds.amazonaws.com";
$username = "std";
$password = "tetris72";
$dbname = "firts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = mysqli_query($conn,"SELECT Datemy, 
( 6371 * acos(cos(radians('$startphp')) * cos(radians(Latitude)) * 
cos(radians(Longitude) - radians(-74.85114097595216)) + 
sin(radians('$startphp')) * sin(radians(Latitude)))) 
AS distance 
FROM tabla 
HAVING distance < 1 ORDER BY distance");

$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));

$conn->close();

?>