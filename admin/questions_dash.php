<?php 
//redirect to loign page if id is not set
include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
<head>
	 <?php 
	 //bootstrap and jquery links
	 include("links.php");?>
	
	<title>Questions</title>

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
                <span class="fa fa-question" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;Questions</span><span class="pull-right x">&times;</span>
           </div>
 
      <div class="container-fluid" style="margin-top: 20px;">

		  <div class="card mb-3">

				 <div class="card-header">

				      <a href="questions.php"  class="btn btn-primary">Add&nbsp;&nbsp;<span class="fa fa-plus"></span></a>
                                       
                      <h6 class="text-center alert" id="msg" style="width: 20%;float: right;border-radius: 2rem;"></h6>      
				 </div>

				 <div class="card-body">
				        		
				       <div class="table-responsive">
				        		   
				         <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">

				       	  <thead>
				        	  
				        	  <tr>
				        	  	    <th>Check</th>
				        			<th>ID</th>
				        			<th>Questions</th>
				        			<th>Answer1</th>
				        			<th>Answer2</th>
				        			<th>Answer3</th>
				        			<th>Answer4</th>
				        			<th>Correct Answer</th>
				        			<th>Subject</th>
				        		   	<th>Action</th>
				        		</tr>

				        	</thead>

							<tbody id="data">
								<?php
									require 'class.php';
									$conn = new db_class();
									$sql = "SELECT * FROM question ORDER BY id ASC";
									$read = $conn->read($sql);
									while($fetch = $read->fetch_array()){ 
								?>
								<tr>
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
											<button type="button" class="btn btn-warning" id="edit_ques" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span></button>
											<button type="button" class = "btn btn-danger" id="del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button>
										</div>
															
									</td>
										<input type="hidden" id="ques<?php echo $fetch['id']?>" value="<?php echo $fetch['question']?>">
										<input type="hidden" id="answer1<?php echo $fetch['id']?>" value="<?php echo $fetch['ans1']?>">
										<input type="hidden" id="answer2<?php echo $fetch['id']?>" value="<?php echo $fetch['ans2']?>">
										<input type="hidden" id="answer3<?php echo $fetch['id']?>" value="<?php echo $fetch['ans3']?>">
										<input type="hidden" id="answer4<?php echo $fetch['id']?>" value="<?php echo $fetch['ans4']?>">
										<input type="hidden" id="cor_ans<?php echo $fetch['id']?>" value="<?php echo $fetch['correct_answer']?>">
										<input type="hidden" id="sub<?php echo $fetch['id']?>" value="<?php echo $fetch['subject']?>">

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
<script type="text/javascript" src="../js/question_dash.js"></script>
<link rel="stylesheet" type="text/css" href="../css/question_dash.css">
<script type="text/javascript" src="../js/dataTables.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>