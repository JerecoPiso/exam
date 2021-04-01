<?php 
	require_once 'update_class.php';
	//if(ISSET($_POST['update'])){	
		//$sub = $_POST['subject'];
	
		$id = $_POST['id'];
		$name = $_POST['name'];
		$grade = $_POST['grade'];
		$adviser  = $_POST['adviser'];
		$conn = new update();
		$sql = "UPDATE examinee SET username=?, grade_section=?, adviser=? WHERE id = ?";
		$conn->edit_students($name, $grade, $adviser, $id, $sql);
		
	//}	
?>


					<?php
							//require 'class.php';
							$conn = new update();
							$sql = "SELECT * FROM examinee ORDER BY id ASC";
							$read = $conn->read($sql);
							while($fetch = $read->fetch_array()){ 
					?>
						<?php echo "<tr>";?>
														<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
														<td><?php echo $fetch['id']?></td>
														<td><?php echo $fetch['username']?></td>
														<td><?php echo $fetch['grade_section']?></td>
														<td><?php echo $fetch['adviser']?></td>
														<td>

															<div class="btn-group">
															<button type="button" class="btn btn-warning" id="stud_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span></button><button type="button" class = "btn btn-danger" id="stud_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button></div></td>
															<input type="hidden" id="name<?php echo $fetch['id']?>" value="<?php echo $fetch['username']?>">
															<input type="hidden" id="grade_sec<?php echo $fetch['id']?>" value="<?php echo $fetch['grade_section']?>">
															<input type="hidden" id="adviser<?php echo $fetch['id']?>" value="<?php echo $fetch['adviser']?>">
													<?php echo "</tr>";?>
												<?php
													}
												?>	