
<?php


session_start();
 require('connect.php');
// If the form is submitted or not.
//If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
// Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
// Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
// If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
// If the login credentials doesn't match, he will be shown with an error message.
	header("location:login.php?error=1");
//$fmsg = "Invalid Login Credentials.";
}
}
// if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hi " . $username . "
";
echo "<br>";
echo "This is the Members Area
";
echo "<br>";

echo "<a href='logout.php'>Logout</a>";
 
}
else{
	echo "username and password is required.";
	} 
// When the user visits the page first time, simple login form will be displayed.
?>
