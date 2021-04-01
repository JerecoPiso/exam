<?php
 
   require 'class.php';

   $conn = new db_class();
   $section = $_POST['section'];
   $sql = "SELECT * FROM done_exam WHERE grasec = '$section'";
   $ret = $conn->read($sql);

   $result = array(
           'name' => array(),
           'score' => array()
   );

   while($fetch = $ret->fetch_array()){
   	 array_push($result['name'], $fetch['name']);
     array_push($result['score'], $fetch['score']);
   }

  
   echo json_encode($result);

?>