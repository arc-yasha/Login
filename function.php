<?php 
include "connection.php";

function login_process($username,$password){
	$username = escape($username);
	$password = escape($password);

	global $connection;
	$query = "SELECT * FROM users WHERE users_username = '$username' AND users_password = '$password'";
	$result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) > 0) {
    return true;
  }
}

function escape($data){
  global $connection;
  $data = trim($data);
  $data = mysqli_real_escape_string($connection, $data);
  $data = htmlspecialchars($data, ENT_QUOTES);
  $data = strip_tags($data);
  return $data;
}

?>