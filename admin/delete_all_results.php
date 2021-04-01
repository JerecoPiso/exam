<?php
   
  	 	require 'class.php';
   

		$conn = new db_class();
	    $ids = json_decode($_POST['id']);
		$sql = "DELETE FROM done_exam WHERE id=?";

        
        foreach ($ids as $id) { 
           $conn->delete($id,$sql);

        }
 ?>
