             <!-- Modal for Subjects -->
				<div class="modal" id="subjects">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Add Subjects</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">

				      		<form>
				      				<label>Subject Name</label>
				      				<input type="text" class="form-control" id="s_name" name="subname">
				      				<label>Grade & Section</label>
				      				<select id="s_grasec" class="custom-select">
				      					<?php
				      						require_once'class.php';
				      						$conn = new db_class();
				      						$sql = "SELECT * FROM grade_section ORDER BY id ASC";
				      						$ret = $conn->read($sql);
				      						while($row = $ret->fetch_array()){ ?>

				      						<option><?php echo $row['grade_sec'];?></option>
				      					 <?php
				      						}
				      					  ?>
				      				</select>
				            
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" name="add" class="btn btn-primary" id="addsub">Add</button>

				        </form>
				      </div>

				    </div>
				  </div>
				</div>



            <!-- delete all subjects -->
			 <div class="modal" id="del-all">
			      <div class="modal-dialog">

			      	 <div class="modal-content">

			      	 	  <div class="modal-header">

                              <button type="button" class="close" data-dismiss="modal">&times;</button>
			      	 	  	
			      	 	  </div>
			   			  
			   			  <div class="modal-body">

			   			  	   <h6 class="text-center alert alert-danger">Are you sure you want to delete this record/s?</h6>
			   			  	
			   			  </div>   	 	

			   			  <div class="modal-footer">

			   			  	    <button type="button" data-dismiss="modal" class="btn btn-danger" id="delete-all"><span class="fa fa-trash"></span>Delete All</button>
			   			  	
			   			  </div>
			      	 </div>
			      	
			      </div> 
			   	
			   </div>
