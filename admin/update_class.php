<?php
	
	require 'class.php';
	

	class update extends db_class{

		public function __construct(){
			$this->connect();
		}


		public function edit_question($ques,$ans1,$ans2,$ans3,$ans4,$correct,$sub,$id,$sql){
			$stmt = $this->conn->prepare($sql) or die ($this->conn->error);
			$stmt->bind_param("ssssssss", $ques,$ans1,$ans2,$ans3,$ans4,$correct,$sub,$id);

			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();

				return true;
			}

		}

		public function edit_students($name,$grade,$adviser,$id,$sql){
			$stmt = $this->conn->prepare($sql) or die ($this->conn->error);
			$stmt->bind_param("ssss", $name,$grade,$adviser,$id);

			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();

				return true;
			}


		}
		public function edit_adviser($name,$section,$subject,$id,$sql){
			$stmt = $this->conn->prepare($sql) or die ($this->conn->error);
			$stmt->bind_param("ssss", $name,$section,$subject,$id);

			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();

				return true;
			}


		}
        

	}


?>