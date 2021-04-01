<?php

	require 'class.php';
    $data = array();
   
	$conn = new db_class();
	$sql = "SELECT * FROM subjects";

	$ret = $conn->read($sql);
    
    while ($row = $ret->fetch_array()) {
     	
       $data[] = $row;  
    } 
    
    echo json_encode($data);
?>