<?php include('config.php'); ?>
<!DOCTYPE html>

<style>
	
	{
		margin:0px;padding:0px;
	}
	@font-face
	{
		font-family:bitwise;
		src:url("bitwise.ttf");
	}
	
	.darkgreytext
	{
		color:DarkSlateGrey;
	}
	
	#header
	{
		width:100%;
		position:absolute;top:0px;
		margin:0 0 10px 0;
		background-color:DimGrey;
		max-height:70px;
		padding:0px;
		border:DarkSlateGrey 5px ridge; 
		color:AliceBlue;
	}
	
	#logo
	{
		height:60px;
		width:120px;
		float:left;
		margin-left:0px;
		border:DarkSlateGrey ridge;
		border-width:0 5px 0 0;
	}
	#logo-div
	{
		margin-left:0px;
		padding-left:0px;
		
	}
	#login-div form
	{
		
	}
	
	.header-v-center
	{
		line-height:60px;
	}
	.std
	{
		height:16px;
	}
	#signup-div ab
	{
		display:block;
	}
	
	#heading-div
	{
			font-family:"bitwise" ;
			font-size:30px;
			float:left;
			font-weight:bold;
			
	}
	
</style>

<head>
	<meta name="viewport" content="width=device-width" />
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
		<div id="logo-div" class="col-sm-1 header-v-center">
			<img id="logo" class="header-v-center" src="mounts\logo.jpg" alt="LOGO"></img>
		</div>
		<div id="heading-div" class="col-sm-4 header-v-center">
			ONLINE EXAM PORTAL
		</div>
		<div id="login-div" class="col-sm-7">
			<form action="login.php" method="post"  >
				<label class="header-v-center"> Enrollment No:</label> <input class="darkgreytext" type="text" name="enrollmentno" placeholder="eg: 0114cs131xxx">
				<label class="header-v-center"> Password:</label> <input type="password" class="darkgreytext" name="password" placeholder="Password" >
				<input type="submit" class="darkgreytext btn-primary btn-sm" name="submit" value="Login">
				<a href="signup.php" ><button type="button" class="btn-primary btn-sm header-v-center">Sign Up</button></a>
			</form>
		</div>
		<div id="signup-div" class="col-sm-1 header-v-center">
			
		</div>
	</div>
</head>

