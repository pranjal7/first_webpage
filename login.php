<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "web", "apple9");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);	// Unqoutes a qouted string
$password = stripslashes($password);	// Unqoutes a qouted string
$username = mysql_real_escape_string($username);	// Escapes special characters
$password = mysql_real_escape_string($password);	// Escapes special characters
// Selecting Database
$db = mysql_select_db("LoginDB", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from Users where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>
