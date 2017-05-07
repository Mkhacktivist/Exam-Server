<?php include('frontpage-header.php'); ?>

<style>
body
{
	
	background:DimGrey;
}

.form-horizontal
{
			margin-top:100px;
			
			background:radial-gradient(LightGrey,DimGrey);
			background:-webkit-radial-gradient(LightGrey,DimGrey);
			background:-moz-radial-gradient(LightGrey,DimGrey);
			background:-o-radial-gradient(LightGrey,DimGrey);
}

</style>
<body>
<div class="container">
	<div class="row" id="login-row">
		<div class="col-sm-4"></div>
		
			
			
			<form action="adminsignin.php" method="post" class="form-horizontal col-sm-4">
				<h2 style="text-align:center;">Admin Login</h2></br>
				<div class="form-group" >
					<label  class="control-label col-sm-4">Email<sup>* </sup> : </label>
					<input required class="  col-sm-6" type="email" name="email" >
					<div class="col-sm-1"></div>
				</div>
				<div class="form-group" >
					<label class="control-label col-sm-4">Password<sup>* </sup> : </label>
					<input required class="  col-sm-6" type="password" name="password">
					<div class="col-sm-1"></div>
				</div>
				<div class="form-group" >
					<div class="col-sm-4"></div>
					<div class="col-sm-4"><input class=" btn-primary" type="submit" name="submit" ></div>
					<div class="col-sm-4"></div>
				</div>
			
			</form>
			
			
			
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>