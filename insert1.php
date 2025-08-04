<?php
$servername = "localhost";
$username = "root";
$password = "budhlakotideeshu380";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE  MyGuests set  lastname='budhlakoti' where firstname ='john'";

if (mysqli_query($conn, $sql)) {
  echo "record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
