<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
<head>
	 <?php include("links.php");?>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../css/grade_section.css">
</head>  

<script type="text/javascript">
$(document).ready(function(){

  $('#add-grade').click(function(){
   
      $('.form').slideToggle();

  });

});
</script>

<body> 

    <?php include("header.php");?>
    
    <div class="row" style="width: 100%;margin: 0;"> 


    	 <div class="col-lg-2 col-md-3 side-nav">
              
               <button class="bars"><span class="fa fa-bars"></span></button>
               <?php include("side_nav.php"); ?>
    	    </div>

    	      <div class="col-lg-10 col-md-9">
	    	     <div class="question">
	                <span class="fa fa-building" style="font-size: 200%;">&nbsp;&nbsp;&nbsp; Grade and Section</span><span class="pull-right x" style="float: right;">&times;</span>
	           </div>
                    <button id="add-grade">Add Grade&Section <span class="fa fa-plus"></span></button>
                    	<h6 class="alert alert-info mt-4 mr-4 text-center" id="alert" style="float: right;width: 30%;border-radius: 2rem;display: none;"></h6>
                  
                     <div class="form">

                         <div class="row">

                         	<div class="col-lg-8">

                         		 <label class="ml-4" style="color: white;font-size: 160%;">Grade & Section</label>
                     			
                     			 <input type="text" id="section" class="form-control mb-4 ml-3">
                         		
                         	</div>
                         	<div class="col-lg-4">
                                     <button id="add-sec" class="pr-4">Add Grade & Section</button>
                         	</div>
                         	
                         	
                         </div>

                      
                     	
                  </div>
                     <div class="card mb-3 mt-4 mr-3">
				
                               			      
				        	<div class="card-body">
				        		
				        		<div class="table-responsive">
				        		   
				        		   <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				        		   	 <thead>
				        		   	 	<tr> <th>Check</th>
				        		   	 		<th>ID</th>
				        		   	 		<th>Grade&Section</th>
				        		   	 	    <th>Action</th>
				        		   	 	</tr>
				        		   	 </thead>
											<tbody id="data">
												<?php
													require 'class.php';
													$conn = new db_class();
													$sql = "SELECT * FROM grade_section ORDER BY id ASC";
													$read = $conn->read($sql);
													while($fetch = $read->fetch_array()){ 
												?>
													<tr>
														<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
														<td><?php echo $fetch['id']?></td>
														<td><?php echo $fetch['grade_sec']?></td>
													 
														<td>

															<div class="btn-group">
															<button type="button" class="btn btn-warning" id="grasec_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-edit"></span></button><button type="button" class = "btn btn-danger" id="grasec_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button></div></td>
															<input type="hidden" id="name<?php echo $fetch['id']?>" value="<?php echo $fetch['grade_sec']?>">
														
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



		 <footer>

			 Examination System

		 </footer>	 

<?php include("logout_modal.php"); ?>


<script type="text/javascript" src="../js/grade_section.js"></script>
<link rel="stylesheet" type="text/css" href="../css/question_dash.css">

<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/dataTables.js"></script>


</body>
</html>