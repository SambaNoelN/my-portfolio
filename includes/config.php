<?php
// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'portfolio';

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    // Connection successful        

}
?>