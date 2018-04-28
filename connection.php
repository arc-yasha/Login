<?php
$connection = mysqli_connect('localhost', 'root', '', 'login_db');
if (!$connection) {
	echo 'connection failed';
}