<?php
$con=mysqli_connect("localhost","root","","testing",3307);
session_start();

//if(!isset($_SESSION['user_name'])){
 //  header('location:login_page.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<div class="container">

<div class="content">
   <!--<h3>hi, <span>user</span></h3>
   <h1>welcome <span><?php //echo $_SESSION['user_name'] ?></span></h1>
   <p>this is an user page</p>-->
	<a href="index.php">Shop</a>
	<p>Or</p>
	<a href="login2.html">Logout</a>
	</div>

</div>
</body>
</html>
