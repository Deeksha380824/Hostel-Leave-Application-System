<?php
$serverName="localhost";
$userName="root";
$password="budhlakotideeshu380";
$dbName="student";
$con=mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed to connect!";
}
echo "Connection success!";
?>