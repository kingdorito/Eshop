<?php
//Establish database connection
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'nexus_market';

//Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

//Check connection
//Display error in case of connection failing
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

//Get submitted form data
$username = $_POST['username'];
$password1 = $_POST['password1'];

//Query database for user's credentials
$stmt = $conn->prepare("SELECT password1 FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

//Compare entered password with password from database
if ($result !== false && $result->num_rows > 0) 
{
  $row = $result->fetch_assoc();
  if ($password1 === $row['password1']) 
  {
    // set session variable and redirect to appropriate page
    session_start();
    $_SESSION['username'] = $username;
    $conn->close(); //closing the conn to the db                                    
    header('Location: userpanel.html');
    exit(); //terminating the script in case the user enters the correct credentials. 
  }
}

// error msg to html in case of user giving wrong credentials. 
$error_msg = ("* The username or the password that you have entered are not corrent. Please check your credentials and try again");
header ('Location: signIn.php?error=' . urlencode($error_msg)); 

// close database connection
$conn->close();
?>
