<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['newpassword'])) {
$error = "Data is invalid";
}
else
{
// Define $username and $password
//$username=$_POST['username'];
$username=$_POST['username'];
$newpassword=$_POST['newpassword'];
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
//if($_POST["currentpassword"] == $row["password"]) {
//mysql_query("UPDATE users set password='" . $_POST["newpassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
//$query("UPDATE Users SET password='" . $_POST["newpassword"] . "' WHERE username='" . $_POST["username"] . "'")
//$message = "Password Changed";
//} else $message = "Current Password is not correct";
			//$username = $_POST['username'];
            //$newpassword = $_POST['newpassword'];
            
            //$sql = "UPDATE Users ". "SET password = $newpassword ". "WHERE username = $username" ;
			$sql = mysql_query("UPDATE Users SET password='$newpassword' WHERE username='$_POST[username]'", $connection) ;
            //mysql_select_db('LoginDB');
            //$exec = mysql_query( $sql, $conn );
            
            if(! $sql )
            {
               die('Could not update data:' . mysql_error());
            }
            echo "Updated data successfully\n";

header("location: index.php?remarks=success");
mysql_close($connection); // Closing Connection
}
}
//session_destroy();  // Ending session
?>