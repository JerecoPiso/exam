<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<?php include("links.php");?>
	
	
	    <title>Subjects</title>
    </head>  
  
<body> 

  <?php include("header.php");?>
	
    <div class="row" style="width: 100%;margin: 0;"> 


    	   <div class="col-lg-2 col-md-3 side-nav">

              <button class="bars"><span class="fa fa-bars"></span></button>

	             <?php include("side_nav.php");?>

    	    </div>

    	      <div class="col-lg-10 col-md-9">


    	      		<div class="subjects-list">
                    	 <span class="fa fa-tasks" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;	Students List</span><span class="pull-right x" style="float: right;">&times;</span>
                    </div>

                      <div class="container-fluid" style="margin-top: 20px;">

				        <div class="card mb-3">

				        	<div class="card-header">
				        
                                       <h6 class="text-center alert" id="msg"  style="width: 20%;float: right;border-radius: 2rem;"></h6>
    
				        	</div>

				        	<div class="card-body">
				        		
				        		<div class="table-responsive">
				        		   
				        		   <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				        		   	 <thead>
				        		   	 	<tr> <th>Check</th>
				        		   	 		<th>ID</th>
				        		   	 		<th>Name</th>
				        		   	 		<th>Grade&Section</th>
				        		   	 		<th>Adiviser</th>
				        		   	 	    <th>Action</th>
				        		   	 	</tr>
				        		   	 </thead>
											<tbody id="data">
												<?php
													require 'class.php';
													$conn = new db_class();
													$sql = "SELECT * FROM examinee ORDER BY id ASC";
													$read = $conn->read($sql);
													while($fetch = $read->fetch_array()){ 
												?>
													<tr>
														<td><input type="checkbox" value="<?php echo $fetch['id']?>"></td>
														<td><?php echo $fetch['id']?></td>
														<td><?php echo $fetch['username']?></td>
														<td><?php echo $fetch['grade_section']?></td>
														<td><?php echo $fetch['adviser']?></td>
														<td>

															<div class="btn-group">
															<button type="button" class="btn btn-warning" id="stud_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-edit"></span></button><button type="button" class = "btn btn-danger" id="stud_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button></div></td>
															<input type="hidden" id="name<?php echo $fetch['id']?>" value="<?php echo $fetch['username']?>">
															<input type="hidden" id="grade_sec<?php echo $fetch['id']?>" value="<?php echo $fetch['grade_section']?>">
															<input type="hidden" id="adviser<?php echo $fetch['id']?>" value="<?php echo $fetch['adviser']?>">
													</tr>
												<?php
													}
												?>	
												</tbody>

												<?php
												  include("action_modal.php");
												  include("modals.php");	
												?>

				        		   </table>	
			                     

				        		</div>

				        	</div><!-- class card-body end -->
				        	
				        </div>


    	      </div>


         	<div class="check-all ml-3 mb-3">

                <input type="checkbox" id="check-all">Check All

           </div>
           <div class="uncheck-all ml-3 mb-3" style="width: 19%;display: none;" >

                <input type="checkbox" id="uncheck-all">Uncheck All

           </div>


                <!--<span class="fa fa-trash" id="delete-all"></span> Delete All-->
                <button class="delete-all ml-3 mb-3" data-toggle="modal" ><span class="fa fa-trash" id="delet-all"></span> Delete</button>
    </div>

   <?php include("logout_modal.php"); ?>


  <footer>
			 Examination System
 </footer>
 

<script src="../js/student.js" type="text/javascript"></script>	
<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../css/students.css">
<script type="text/javascript" src="../js/dataTables.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>