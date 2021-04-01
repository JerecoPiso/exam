<?php 
	require_once 'update_class.php';
	//if(ISSET($_POST['update'])){	
		$name  = $_POST['name'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];
		$id = $_POST['id'];
		$conn = new update();
		$sql = "UPDATE advisers SET name=?, section=?, subject=? WHERE id = ?";
		$conn->edit_adviser($name,$section,$subject,$id,$sql);
		
	//}	
?>
										<?php
													//require 'class.php';
													$conn = new update();
													$sql = "SELECT * FROM advisers ORDER BY id ASC";
													$read = $conn->read($sql);
													while($fetch = $read->fetch_array()){ 
												?>
													<tr>
														<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
														<td><?php echo $fetch['id']?></td>
														<td><?php echo $fetch['name']?></td>
													    <td><?php echo $fetch['section']?></td>
													    <td><?php echo $fetch['subject']?></td>
														<td>

															<div class="btn-group">
															<button type="button" class="btn btn-warning" id="adviser_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span></button><button type="button" class = "btn btn-danger" id="adviser_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button></div></td>
															<input type="hidden" id="name<?php echo $fetch['id']?>" value="<?php echo $fetch['name']?>">
															<input type="hidden" id="sec<?php echo $fetch['id']?>" value="<?php echo $fetch['section']?>">
															<input type="hidden" id="sub<?php echo $fetch['id']?>" value="<?php echo $fetch['subject']?>">
													</tr>
												<?php
													}
												?>	