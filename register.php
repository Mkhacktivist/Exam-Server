<?php


if(isset($_POST['submit'])) {
	include("config.php");
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$enrollmentno=$_POST['enrollmentno'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$mobile=$_POST['mobile'];
	$dob=$_POST['dob'];
	$profilepic=$_POST['profilepic'];
	
	$r="";
	$flag = true;
	
	$usernameresult = mysql_query("select username from login where username='$username'");
	$usernameresultset = mysql_fetch_assoc($usernameresult);
	if($name=="") {
		$flag = false;
		$r.= "Name is empty<br/><br/>";
	}
	if(!filter_var($username, FILTER_VALIDATE_EMAIL)) {
		$flag = false;
		$r.= "Enter username in email format<br/><br/>";
	}
	if($usernameresultset['username']===$username) {
		$flag = false;
		$r.= "User already exists.<br/><br/>";
	}
	if($password!==$cpassword) {
		$flag = false;
		$r.= "Passwords don't match.<br/><br/>";
	}
	if($password==="" or $cpassword==="") {
		$flag = false;
		$r.= "Please fill password and cpassword fields.<br/><br/>";
	}
	if(!preg_match('/[0-9]{10}/', $mobileno)) {
		$flag = false;
		$r.= "Mobile No should follow the 10 digit format.<br/><br/>";
	}
	if($mobileno==="") {
		$flag = false;
		$r.= "Mobile No. field empty.<br/><br/>";
	}
	if($tagline==="") {
		$flag = false;
		$r.= "Tagline field is empty.<br/><br/>";
	}
	if($college==="") {
		$flag = false;
		$r.= "College field is empty.<br/><br/>";
	}
	if(preg_match("/^[a-zA-Z0-9\s,.]*$/", $tagline)) {
	} else {
		$flag = false;
		$r.= "Tagline: Special Characters are not allowed!<br/><br/>";
	}

	if($flag==false) {
		$r.= "Correct Your Mistakes.<br/>";
		echo $r;
	} else if($flag==true) {
		$pic=rand(1,10).".jpg";
		//$time = mktime(20,0,0,3,1,2013) + 0;
		$time = time();
		mysql_query("insert into profile(name,email,mobileno,tagline,scoreachieved,college,pic,solvedquestions,current) values('$name','$username','$mobileno','$tagline','0','$college','$pic','0','1')");
		mysql_query("insert into login(username,password) values('$username','$password')") ;
		echo "You have successfully registered!";
		session_start();
		$_SESSION['username']=$username;
	}
	mysql_close();
}

?>