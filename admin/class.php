<?php
	require 'config.php';
	
	class db_class extends db_connect{	
		
		public function __construct(){
			$this->connect();
		}
		
        
        public function add_adviser($name,$section,$subject,$sql){
        	$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("sss", $name,$section,$subject);
			if($stmt->execute()){
              $stmt->close();
              $this->conn->close();
              return true;

			}


        }

        //Function for adding questions by the admin
		public function add_question($ques,$ans1,$ans2,$ans3,$ans4,$answer,$sub,$grasec,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("ssssssss",$ques,$ans1,$ans2,$ans3,$ans4,$answer,$sub,$grasec);
			if($stmt->execute()){
              $stmt->close();
              $this->conn->close();
              return true;

			}

		}

		public function count($sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				return $valid;
			}

		}

       //check if the examineer is already taken the exam
	    public function checkExam_studDone($name,$sub,$sql){

	    	$stmt = $this->conn->prepare($sql) or die($this->conn->error);
	    	$stmt->bind_param("ss", $name,$sub);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				return array(
					'count'=>$valid
				);

			}


	    }
		public function done_exam($stud_name,$sub,$score,$grasec,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("ssss", $stud_name,$sub,$score,$grasec);
			if ($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
				
			}

		}
		
		public function create($param,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("s", $param);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
        
        //checking if name is already taken by previous sign upper
		public function check_name($username,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
				$stmt->bind_param("s", $username);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				return array(
					'count'=>$valid
				);

			}
	     }



		public function count_questions($sub,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
				$stmt->bind_param("s", $sub);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				return array(
					'count'=>$valid
				);

			}
	     }





		public function signup($name,$pass,$hint,$photo,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("ssss", $name,$pass,$hint,$photo);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}


		public function reg_examinee($name,$pass,$grade_section,$adviser,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("ssss", $name, $pass, $grade_section, $adviser);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		


		public function login($username, $password,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("ss", $username,$password);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'user_id'=> $fetch['id'],
					'username'=> $fetch['username'],
					'password'=> $fetch['password'],
					'photo' => $fetch['photo'],
					'count'=>$valid,
					'grasec' => $fetch['grade_section']
				);
			}
		}

		public function delete($id, $sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("s", $id);
			if($stmt->execute()){
				$stmt->close();
				//$this->conn->close();
				return true;
			}
		}

		public function read($sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$stmt->close();
				//	$this->conn->close();
				return $result;
			}
		}
		

		public function read_answer($id,$sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("s", $id);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'answer'=> $fetch['correct_answer'],
					
				);
			}
		}

		public function hint($sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
	
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'password'=> $fetch['password'],
					'count'=>$valid
				);
			}
		}

		public function update($sub, $id, $sql){
			$stmt = $this->conn->prepare($sql) or die($this->conn->error);
			$stmt->bind_param("ss", $sub, $id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
 	}	
?>