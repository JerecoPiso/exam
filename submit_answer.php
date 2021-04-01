<?php

   
    	require 'class.php';
    
		$conn = new db_class();
		$answers = array();
	    $subject = $_POST['subject'];
	    $grasec = $_POST['grasec'];
	    $questions_id = json_decode($_POST['ids']);
	    $sql = "SELECT correct_answer FROM question WHERE id=?";
	    $counter = 0;
	    $correct = 0;



	       foreach ($questions_id as $value) {

	       		$results = $conn->read_answer($value,$sql);
	       		array_push($answers,$results['answer']);

	       }


	     
		
		  $myArray = json_decode($_POST['answers']);
		  $studName = $_POST["stud_name"];
		

		  foreach ($myArray as  $value) {
                
                if($value == $answers[$counter]){

                   $correct++;

                }

                $counter++;
		     
		   }
            $con = new db_class();
            $query = "INSERT INTO done_exam (name,subject,score,grasec) VALUES (?,?,?,?)";
            $con->done_exam($studName,$subject,$correct,$grasec,$query);

		    echo $correct;
		 
		
?>