<?php 
//redirect to loign page if id is not set
include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
<head>
	 <?php 
	 //bootstrap and jquery links
	 include("links.php");?>
	
	<title>Examination Results</title>

</head>  

<body> 
 
	<?php include("header.php");?>
	
   <div class="row" style="width: 100%;margin: 0;"> 


        <div class="col-lg-2 col-md-3 side-nav">

             <button class="bars"><span class="fa fa-bars"></span></button>

	          <?php include("side_nav.php");?>
	          
    	</div>


     <div class="col-lg-10 col-md-9">

          <div class="question">
                <span class="fa fa-question" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;Exam Results</span><span class="pull-right x" style="float: right;">&times;</span>
           </div>
 
      <div class="container-fluid" style="margin-top: 20px;">

		  <div class="card mb-3">

				 <div class="card-header">

				   
                      <h6 class="text-center alert" id="msg" style="width: 20%;float: right;border-radius: 2rem;"></h6>      
				 </div>

				 <div class="card-body">
				        		
				       <div class="table-responsive">
				        		   
				         <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">

				       	  <thead>
				        	  
				        	  <tr>
				        	  	    <th>Check</th>
				        			<th>ID</th>
				        			<th>Name</th>
				        			<th>Subject</th>
				        			<th>Grade & Section</th>
				        			<th>Score</th>
				        			
				        		</tr>

				        	</thead>

							<tbody id="data">
								<?php
									require 'class.php';
									$conn = new db_class();
									$sql = "SELECT * FROM done_exam ORDER BY id ASC";
									$read = $conn->read($sql);
									while($fetch = $read->fetch_array()){ 
								?>
								<tr>
									<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
									<td><?php echo $fetch['id']?></td>
									<td><?php echo $fetch['name']?></td>
									<td><?php echo $fetch['subject']?></td>
									<td><?php echo $fetch['grasec']?></td>
									<td><?php echo $fetch['score']?></td>
									

										
								</tr>
							<?php
									}
							?>	
						      </tbody>
						      
							<?php
							  include("modals_for_questions.php");
							  include("modals.php");	
							?>

				        		   </table>	
			                     

				     </div><!-- end table responsive -->

			 </div><!-- end card -body -->
				        	
		 </div><!-- card mb-3 end -->

    </div><!-- end container fluid -->

    	  <div class="check-all ml-3 mb-3">

             <input type="checkbox" id="check-all">Check All

          </div>

          <div class="uncheck-all ml-3 mb-3" style="width: 19%;display: none;" >

              <input type="checkbox" id="uncheck-all">Uncheck All

          </div>

	  <!--<span class="fa fa-trash" id="delete-all"></span> Delete All-->
	  <button class="delete-all ml-3 mb-3" data-toggle="modal" ><span class="fa fa-trash" id="delet-all"></span> Delete</button>
         
  </div><!-- col-lg-10 end -->

 <footer>

	 Examination System

 </footer>

<link rel="stylesheet" type="text/css" href="../css/css.css">
<script type="text/javascript" src="../js/exam_results.js"></script>
<link rel="stylesheet" type="text/css" href="../css/question_dash.css">
<script type="text/javascript" src="../js/dataTables.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>