<?php include('frontpage-header.php'); ?>
<style>
body
{
	
	background:DimGrey;
}
.form-horizontal
{
		margin:100px 0 100px 0;
			background:radial-gradient(LightGrey,DimGrey);
			background:-webkit-radial-gradient(LightGrey,DimGrey);
			background:-moz-radial-gradient(LightGrey,DimGrey);
			background:-o-radial-gradient(LightGrey,DimGrey);
}
</style>
<body>

<div class="col-sm-2"></div>
<form action="signupxxx.php" method="post" class="form-horizontal col-sm-8">
	<h2 style="text-align:center;">Registration Form</h2></br>
	<div class="form-group" >
		<label class="control-label col-sm-4">Enrollment No<sup>* </sup> : </label>
		<input required class="  col-sm-6" type="text" name="enrollmentno">
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">FirstName<sup>* </sup> : </label>
		<input required class="  col-sm-6" type="text" name="firstname">
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">LastName : </label>
		<input class="  col-sm-6" type="text" name="lastname">
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">Date of Birth<sup>* </sup> : </label>
		<input required class="  col-sm-6" type="date" name="dob">
	</div>
	<div class="form-group" >
		<label required class="control-label col-sm-4">Email<sup>* </sup> : </label>
		<input class="  col-sm-6" type="email" name="email" >
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">Password<sup>* </sup> : </label>
		<input required class="  col-sm-6" type="password" name="password">
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">Confirm Password<sup>* </sup> : </label>
		<input required class="  col-sm-6" type="password" name="cpassword">
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">Mobile<sup>* </sup> : </label>
		<input required class="  col-sm-6" type="number" name="mobile" maxlength=10>
	</div>
	<div class="form-group" >
		<label class="control-label col-sm-4">Profile Image : </label>
		<input class="  col-sm-6" type="file" accept="image/jpeg" name="profilepic" height="100" width="100">( 100px X 100px)
	</div>
	<div class="form-group" >
		<div class="col-sm-5"></div>
		<input class="col-sm-2 btn-primary" type="submit" name="submit" >
		<div class="col-sm-5"></div>
	</div>
<div class="col-sm-2"></div>
</body>
