<?php 
	require_once 'class.php';
	//if(ISSET($_POST['update'])){	
		$sub = $_POST['subject'];
	
		$id = $_POST['id'];
		$grasec = $_POST['grasec'];
		$conn = new db_class();
		$sql = "UPDATE subjects SET subject=?, grasec='$grasec' WHERE id = ?";
		$conn->update($sub, $id, $sql);
		
	//}	
?>
	          
<?php
												
	$conn = new db_class();
	$sql = "SELECT * FROM subjects ORDER BY id ASC";
	$read = $conn->read($sql);
	while($fetch = $read->fetch_array()){ 
?>
	<tr>
		<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
		<td><?php echo $fetch['id']?></td>
		<td><?php echo $fetch['subject']?></td>
		<td><?php echo $fetch['grasec']?></td>
		<td>

			<div class="btn-group">
				<button type="button" class="btn btn-warning" id="sub_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span></button>
				<button type="button" class = "btn btn-danger" id="sub_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button>
			</div>

		</td>
			<input type="hidden" id="subj<?php echo $fetch['id']?>" value="<?php echo $fetch['subject']?>">
			<input type="hidden" id="grasec<?php echo $fetch['id']?>" value="<?php echo $fetch['grasec']?>">
	</tr>
<?php
	}
?>	
					