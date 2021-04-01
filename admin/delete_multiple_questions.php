<?php
   
  	 	require 'class.php';
   

		$conn = new db_class();
	    $ids = json_decode($_POST['id']);
		$sql = "DELETE FROM question WHERE id=?";

        
        foreach ($ids as $id) { 
           $conn->delete($id,$sql);

        }
 ?>


										<?php
													//require 'class.php';
													$conn = new db_class();
													$sql = "SELECT * FROM question ORDER BY id ASC";
													$read = $conn->read($sql);
													while($fetch = $read->fetch_array()){ 
												?>
											<?php	echo "<tr>"; ?>
														<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
														<td><?php echo $fetch['id']?></td>
														<td><?php echo $fetch['question']?></td>
														<td><?php echo $fetch['ans1']?></td>
														<td><?php echo $fetch['ans2']?></td>
														<td><?php echo $fetch['ans3']?></td>
														<td><?php echo $fetch['ans4']?></td>
														<td><?php echo $fetch['correct_answer']?></td>
														<td><?php echo $fetch['subject']?></td>

													<td>
															<div class="btn-group">
																<button type="button" class="btn btn-warning" id="edit_ques" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span></button><button type="button" class = "btn btn-danger" id="del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button>
															</div>
															
														</td>
															<input type="hidden" id="ques<?php echo $fetch['id']?>" value="<?php echo $fetch['question']?>">
															<input type="hidden" id="answer1<?php echo $fetch['id']?>" value="<?php echo $fetch['ans1']?>">
															<input type="hidden" id="answer2<?php echo $fetch['id']?>" value="<?php echo $fetch['ans2']?>">
															<input type="hidden" id="answer3<?php echo $fetch['id']?>" value="<?php echo $fetch['ans3']?>">
															<input type="hidden" id="answer4<?php echo $fetch['id']?>" value="<?php echo $fetch['ans4']?>">
															<input type="hidden" id="cor_ans<?php echo $fetch['id']?>" value="<?php echo $fetch['correct_answer']?>">
															<input type="hidden" id="sub<?php echo $fetch['id']?>" value="<?php echo $fetch['subject']?>">
														<?php	echo "</tr>"; ?>
														<?php
													}
												?>							