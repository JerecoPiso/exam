<?php
	define('db_host', 'localhost');
	define('db_user', 'root');
	define('db_pass', '');
	define('db_name', 'exam');
	
	class db_connect{	
		private $host = db_host;
		private $user = db_user;
		private $pass = db_pass;
		private $dbname = db_name;
		protected $conn;
		public $error;
		
		public function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();
				return false;
			}
		}
	}	
?>