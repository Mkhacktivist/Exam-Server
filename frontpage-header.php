<?php include('config.php'); ?>
<!DOCTYPE html>

<style>
	
	{
		margin:0px;padding:0px;
	}
	
	#header
	{
		width:98%;
		position:absolute;
		left:1%;
		background-color:DimGrey;
	}
	
	
</style>

<head>
	<!-- ADDING BOOTSTRAP -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<title>EXAM SERVER</title>	
	<script type="text/javascript" src=""></script>

	<div id="header" class="row">
		<div id="logo-div" class="col-md-2 "><img id="logo" src="\img\logo.jpg" alt="LOGO"></img></div>
		<div id="heading-div" class="col-md-3 v-center">ONLINE EXAM PORTAL</div>
		<div id="login-div" class="col-md-5"><form action="login.php" method="post">
		Email: <input type="email" name="userid" placeholder="Email ID">
		Password: <input type="password" name="password" placeholder="Password" >
		<input type="submit" name="submit" value="Login">
		</div>
		<div id="signup-div" class="col-md-2"><a href="signup.php">Sign Up</a></div>
	</div>
</head>

