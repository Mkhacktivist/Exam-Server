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
	}
		function sign_up() {
			$firstName = $_POST['firstname'];
			$lastName = $_POST['lastname'];
			$userId = $_POST['enrollmentno'];
			$email = $_POST['email'];
			$contactNumber = $_POST['mobile'];

			$updateSql = " INSERT INTO `user_profiles` (`first_name`, `last_name`, `user_id`, `email`, `contact_number`, `profile_picture`) VALUES ($firstName ,$lastName  ,$userId ,  $email , $contactNumber )";
			
			if (mysqli_query($conn, $updateSql)) {
				echo "New record created successfully";
			} else {
			echo "Error: " . $updateSql . "<br>" . mysqli_error($conn);
			}
		}
}

?>
?>