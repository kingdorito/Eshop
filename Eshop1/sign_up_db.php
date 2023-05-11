<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nexus_market";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
 // Confirm password check up
$password1 = $_POST["password1"];
$confirm_password = $_POST ["confirm_password"];

$sql = "INSERT INTO users (firstName, lastName, username, email, phoneNumber, password1)
VALUES ('".$_POST["firstName"]."','".$_POST["lastName"]."','".$_POST["username"]."','".$_POST["email"]."' ,'".$_POST["phoneNumber"]."' ,'".$_POST["password1"]."')";

if ($conn->query($sql) === TRUE)
{
    header ("Location: success.html");
    exit;
}

else
{
    echo ("Registered failed: " . $conn->connect_error);
}

    $conn->close();
?>