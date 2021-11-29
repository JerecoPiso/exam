<?php


 	require_once 'class.php';	
	
   
   	$conn = new db_class();
// SELECT `name` FROM `runners` WHERE `id` NOT IN (SELECT `id` FROM `races` WHERE `winner_id` !='')
    //check if the questions for the exam is greater than 10 if not it will not display the questions
    $command = "SELECT * from runners WHERE MAX(id)";
    $query = $conn->try($command); 

    while($fetch = $query->fetch_array()){ 
    echo $fetch['name'];

    }

    $x = 5;
    echo $x++ + $x++; 
    // echo $x;
    echo $x;

     echo $x-- - $x--; 

     echo $x;
     // $ctr = 5;
     // $new_ctr;
     // while($ctr > 0){
     // 	$new_ctr = $ctr;
     // 	while($new_ctr > 0){
     // 		echo "* ";
     // 		$new_ctr--;
     // 	}
     // 	echo "<br>";
     // 	$ctr--;
     // }


?>