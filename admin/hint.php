<?php

		require 'class.php';
        $hint = $_POST["hint"];
		$conn = new db_class();
		$sql = "SELECT * FROM user WHERE hint='$hint'";
		$ret = $conn->hint($sql);

		if ($ret['count'] == 0) {
			echo "No hint found with the hint you type!";
		}else{
			echo $ret['password'] . " is your password";
		}



?>