<?php

		require_once 'class.php';
	
		$question  = $_POST['question'];
		$ans1 = $_POST['answer1'];
		$ans2 = $_POST['answer2'];
		$ans3 = $_POST['answer3'];
		$ans4 = $_POST['answer4'];
		$grasec = $_POST['grasec'];
		$answer = $_POST['correct_answer'];
		$subject = $_POST['subject'];

		$conn = new db_class();
		$sql="INSERT INTO question (question, ans1, ans2, ans3, ans4, correct_answer,subject, grasec) VALUES (?,?,?,?,?,?,?,?)";
	    $conn->add_question($question,$ans1,$ans2,$ans3,$ans4,$answer,$subject,$grasec,$sql);

		
?>
		
						 		<?php

									//require 'class.php';
									$conn = new db_class();
									//$subject = $_GET['subject'];
									$sql = "SELECT * FROM subjects ORDER BY id ASC";
									$read = $conn->read($sql);
								    $subject="";
									while($fetch = $read->fetch_array()){ 
		
								?>
								<?php echo "<tr>" ;?>

						 			<td class="list-group-item"><?php echo $fetch['subject'];?>

						 			     <?php $subject =  $fetch['subject']; ?>

						 			     <?php

						 			     	 $con = new db_class();
						 			     	 $command = "SELECT * FROM question WHERE subject=? ORDER BY id ASC";
											 $query = $con->count_questions($subject,$command); 

						 			     ?>
						 			
                                      
						 			</td>

						 			<td> <?php echo $query['count'];?></td>

                                  <?php echo"</tr>";?>
						 		<?php
						 		    $subject = "";

						 			}
						 		?>