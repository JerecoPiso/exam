
<?php 
	require_once 'class.php';
	
		
	    $name = $_POST['examinee_name'];
	    $pass = $_POST['pass'];

		$conn = new db_class();

        $query = "SELECT * FROM examinee WHERE username=?";
        
        $return = $conn->check_name($name,$query);
        
        if($return['count'] > 0){

        		$sql = "SELECT * FROM examinee WHERE username=? && password=?";
			    $data = $conn->login($name,$pass,$sql);
		            
				
				
				if($data['count'] > 0){

				     session_start();

				     $_SESSION['uid'] = $data['user_id'];
				     $_SESSION['uname'] = $data['username'];
				     $_SESSION['upass'] = $data['password'];
				     $_SESSION['grasec'] = $data['grasec'];

				     header("location: examination_page.php");

				}else{

					session_start();
		            $_SESSION["msg_pass"] = "Password was incorrect!";
		            $_SESSION["data"] = $data['count'];
		            header("location: login_examinee.php");

				}
			

        }else{

                session_start();
                $_SESSION['msg_uname'] = "Username doesn't exist!";
                header("location: login_examinee.php");

        }


            


     	
?>