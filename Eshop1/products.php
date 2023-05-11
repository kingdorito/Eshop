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

$sql = "INSERT INTO products (product_id, product_name, product_price)
VALUES ('".$_POST["product_id"]."','".$_POST["product_name"]."','".$_POST["product_price"]."')";

if ($conn->query($sql) === TRUE)
{
    header ("Location: techproducts.php");
    exit;
}

else
{
    echo ("Product failed: " . $conn->connect_error);
}

    $conn->close();
?>