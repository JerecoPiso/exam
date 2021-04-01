<?php
	     require_once 'class.php';
	 

	
		$name  = $_POST['name'];
		$pass = $_POST['password'];
		$grade_section = $_POST['grade_section'];
		$adviser = $_POST['adviser'];
		$conn = new db_class();
        
        $query = "SELECT * FROM examinee WHERE username = ?";
        $check = $conn->check_name($name,$query);

        if($check['count'] > 0){

          echo "Your already registered before. Try to login now.";


        }else{

          $sql="INSERT INTO examinee (username, password, grade_section, adviser) VALUES (?, ?, ?, ?)";
		  $ret = $conn->reg_examinee($name,$pass,$grade_section,$adviser,$sql);
	
          if ($ret === true) {
        	echo "Your succesfully registered " . $name;
          }else{
        	echo "Unable to registered";
          }
	


        }

		
?>