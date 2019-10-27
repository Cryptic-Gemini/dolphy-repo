<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user"  name="username">
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass"  name="password">
			</p>
			<p>
				<input type="submit" id="btn"  value="login">
			</p>
			

		</form>
		<?php 
		if(isset($_GET['error'])==true){
	echo '<font color="#FF0000"><p align="center ">Invalid Username or Password </p></font>';
}
	 ?>
	</div>

</body>
</html>