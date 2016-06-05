<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email'])) {
$error = "Data is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "web", "apple9");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);	// Unqoutes a qouted string
$password = stripslashes($password);	// Unqoutes a qouted string
$name = stripslashes($name);	// Unqoutes a qouted string
$lastname = stripslashes($lastname);	// Unqoutes a qouted string
$email = stripslashes($email);	// Unqoutes a qouted string

$username = mysql_real_escape_string($username);	// Escapes special characters
$password = mysql_real_escape_string($password);	// Escapes special characters
$name = mysql_real_escape_string($name);	// Escapes special characters
$lastname = mysql_real_escape_string($lastname);	// Escapes special characters
$email = mysql_real_escape_string($email);	// Escapes special characters
// Selecting Database
$db = mysql_select_db("LoginDB", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO Users(username, password, email, name, lastname) VALUES ('$username', '$password', '$email', '$name', '$lastname')", $connection);
header("location: index.php?remarks=success");
mysql_close($connection); // Closing Connection
}
}
?>
