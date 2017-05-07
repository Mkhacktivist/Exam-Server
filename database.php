<?php
class Database {
		function db_connect() {
			
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";// Create connection
			$dbname = "exam_server";
			$conn = new mysqli($servername, $username, $password,$dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			return $conn;
		}

		function sign_up($varArray,$conn) {
			$firstName = $_POST['firstname'];
			$lastName = $_POST['lastname'];
			$userId = $_POST['enrollmentno'];
			$email = $_POST['email'];
			$contactNumber = $_POST['mobile'];
			$password = $_POST['password'];
		

			$updateSql =" INSERT INTO `user_profiles` (`first_name`, `last_name`, `user_id`, `email`, `contact_number`) VALUES ('$firstName' ,'$lastName' , '$userId' ,  '$email' , '$contactNumber' );";
			$loginSql = "INSERT INTO `user_login` (`user_id`, `password`) VALUES ('$userId', '$password');";
			if (mysqli_query($conn, $updateSql)) {
				if(mysqli_query($conn, $loginSql)){
				echo "New record created successfully";
				}
			} else {
				}
			echo "Error: " . $updateSql . "<br>" . mysqli_error($conn);
		}

		function login_in($varArray,$conn) {
			$userPassword = $_POST['password']; 
			$userId = $_POST['enrollmentno'];
			$sqlLogin = "SELECT `password` FROM `user_login` WHERE user_id = '$userId'";
			$result = mysqli_query($conn, $sqlLogin);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//			var_dump($userPassword);
			//var_dump($row["password"]);
//			var_dump($result);
			if ( $userPassword == $row["password"]) {
				echo '<script type="text/javascript">
				window.location = "instructions.php"
				</script>';
				}
			else
			{
				echo '<script type="text/javascript">
				window.location = "index.php"
				</script>';
			}
			}
		
		function adminlogin_in($varArray,$conn) {
			$userPassword = $_POST['adminemail']; 
			$userId = $_POST['adminpassword'];
			$sqlLogin = "SELECT `password` FROM `admin_login` WHERE user_name = '$userId'";
			$result = mysqli_query($conn, $sqlLogin);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			//var_dump($row["password"]);
			if ( $userPassword == $row["password"]) {
				echo '<script type="text/javascript">
				window.location = "configexam.php"
				</script>';
				}
			
			}

}


?>