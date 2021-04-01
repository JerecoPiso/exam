<?php 
	require_once 'class.php';
	
		
	    $name = $_POST['uname'];
	    $pass = $_POST['pass'];

		$conn = new db_class();

        $query = "SELECT * FROM user WHERE username=?";
        
        $return = $conn->check_name($name,$query);
        
        if($return['count'] > 0){

        		$sql = "SELECT * FROM user WHERE username=? && password=?";
			    $data = $conn->login($name,$pass,$sql);
		            
				
				
				if($data['count'] > 0){

				     session_start();

				     $_SESSION['uid'] = $data['user_id'];
				     $_SESSION['uname'] = $data['username'];
				     $_SESSION['upass'] = $data['password'];
				     $_SESSION['photo'] = $data['photo'];

				     header("location: dashboard.php");



				}else{

					session_start();
		            $_SESSION["msg_pass"] = "Password was incorrect!";
		            header("location: login_form.php");

				}
			

        }else{

                session_start();
                $_SESSION['msg_uname'] = "Username doesn't exist!";
                header("location: login_form.php");

        }


            


     	
?>