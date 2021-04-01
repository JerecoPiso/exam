<?php
	require 'class.php';
	$conn = new db_class();
	$id = $_POST["id"];
	$grasec = $_POST["grasec"];
	$sql = "UPDATE grade_section SET grade_sec = ? WHERE id = ?";
	$conn->update($grasec,$id,$sql);
?>
<?php
		 $conn = new db_class();											
		$query = "SELECT * FROM grade_section ORDER BY id ASC";
		$read = $conn->read($query);
		while($fetch = $read->fetch_array()){ 
	?>
		<tr>
			<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
			<td><?php echo $fetch['id']?></td>
			<td><?php echo $fetch['grade_sec']?></td>
													 
			<td>

			  <div class="btn-group">
					<button type="button" class="btn btn-warning" id="grasec_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span><button type="button" class = "btn btn-danger" id="grasec_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button></div></td>
					<input type="hidden" id="name<?php echo $fetch['id']?>" value="<?php echo $fetch['grade_sec']?>">
			</div>	

			</td>										
		</tr>
	<?php
		}
	?>	