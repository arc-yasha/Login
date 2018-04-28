<?php
include "function.php";
	$loginSuccess = "";
	$loginFail = "";
	if (isset($_POST['login'])) {
		if(login_process($_POST['username'], $_POST['password'])){
			$loginSuccess = 'Login Success';
		}else{
			$loginFail = 'Login Failed';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login Page</title>
	<style>
		body {
  background: #2d343d;
}

.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

h1.login-title {
  margin: -28px -25px 25px;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  font-weight: 300;
  color: #ADADAD;
  text-align:center;
  background: #f7f7f7;
 
}

.login-input {
  width: 285px;
  height: 50px;
  margin-bottom: 25px;
  padding-left:10px;
  font-size: 15px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
  }
.login-button {
  width: 100%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #f0776c;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}

.login-lost
{
  text-align:center;
  margin-bottom:0px;
}

.login-lost a
{
  color:#666;
  text-decoration:none;
  font-size:13px;
}

	</style>
</head>
<body>
	<form class="login" action="" method="post">
    <h1 class="login-title">Login</h1>
    <?php if ($loginSuccess != '') {
    	echo '<h4 style="color:green">'.$loginSuccess.'</h4>';
    }elseif($loginFail != ''){
    	echo '<h4 style="color:red">'.$loginFail.'</h4>';
    } ?>
    <input type="text" class="login-input" name="username" placeholder="Username" autofocus>
    <input type="password" class="login-input" name="password" placeholder="Password">
    <input type="submit" name="login" value="Login" class="login-button">
  </form>
</body>
</html>