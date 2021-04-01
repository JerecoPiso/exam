<?php 
	require_once 'class.php';
	
		
	    $name = $_POST['username'];
	    $pass = $_POST['password'];
	    $hint = $_POST['hint'];
	    $photo = "dp.png";

		$conn = new db_class();
		$sql = "SELECT * FROM user WHERE username = ?";

		$check = $conn->check_name($name,$sql);
		
		if($check['count'] > 0){

			echo "Name is already taken";

		}else{
            $con = new db_class();
			$query = "INSERT INTO user (username,password,hint,photo) VALUES (?, ?, ?, ?)";
            $con->signup($name,$pass,$hint,$photo,$query);
            echo "Sign up succesfully";
		}
	
?>