<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
	<head>

	     <?php include("links.php");?>

		 <title>Questions</title>

	</head>
<style type="text/css">
	 @media(min-width: 1200px){
	 	
	 		 .card{
	 	width: 80%;
	 	margin: 0% 10% 0% 10%;
	 
	 }

	 }
	 @media(max-width: 768px){

	 .card{
	 	width: 100%;
	
	 
	 }
	 #add_ques{
	 	width: 80%;
	 }
	 }
	
	 .header{
		 	background-color: dodgerblue;
		 }
		

	.footer {
	   height: 90px; 
	   width: 100%;
	   background-color: dodgerblue;
	   color: white;
	   text-align: center;
	   margin-top: 5%;
	

	}
	 
	
	.navbar{
		background-color: dodgerblue;

	}
	#alert{
		display: none;
		border-radius: 2rem;
		width: 50%;
		margin-left: 30%;

	}
	li a:hover{
		background-color:  rgba(200,210,255,0.4);
	}
    table, thead th, td, tr, .card{
    	border: 3px solid dodgerblue;

    }
    .card-header{
    	border-bottom: 3px solid dodgerblue;
    }
</style>
<body>

	<nav class="navbar navbar-expand-md  navbar-dark" >
		   		 
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
	   </button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			 	<ul class="navbar-nav">
			   	<li class="nav-item">
			     	<a class="nav-link" href="dashboard.php" style="color: white;"><span class="fa fa-home mr-1"></span>Home</a>
			   	</li>
			   	<li class="nav-item">
			     	<a class="nav-link" href="questions_dash.php" style="color: white;"><span class="fa fa-mail-reply mr-2"></span>Back</a>
			   	</li>
			      
			    <li class="nav-item">
			     	<a class="nav-link" href="#logout" data-toggle="modal" style="color: white;"><span class="fa fa-sign-out mr-1"></span>Logout</a>
			   	</li>
				   
				 </ul>
			</div>
   </nav>



	<div class="container mt-3 mb-5">

	    <div class="row">

		   <div class="col-lg-4">
						 
			 <table class="table table-striped table-bordered" cellspacing="0">

				<thead>
					<tr>
						<th>Subjects</th>
						<th>Total Questions</th>
					</tr>
								    	
				</thead>

				<tbody id="table">


				<?php

					require 'class.php';
					$conn = new db_class();
										//$subject = $_GET['subject'];
					$sql = "SELECT * FROM subjects ORDER BY id ASC";
					$read = $conn->read($sql);
								$subject="";
					while($fetch = $read->fetch_array()){ 
		
			    ?>
				<tr>

					<td class="list-group-item">
						<?php echo $fetch['subject'];?>

						<?php $subject =  $fetch['subject']; ?>

						<?php

						
						 $command = "SELECT * FROM question WHERE subject=? ORDER BY id ASC";
						 $query = $conn->count_questions($subject,$command); 

						?>
						 			
                                      
				   </td>

				    <td> <?php echo $query['count'];?></td>

                </tr>
				<?php
					$subject = "";

					}
				?>
						 	
				</tbody>

		</table>

</div><!--col lg-4 end -->

		<div class="col-lg-8">
						
			<div class="card">

			   <div class="card-header">
			                          
			      <h5 class="text-center alert alert-info p-2">Welcome Admin</h5>

				</div>

			<div class="card-body">

				<h6 id="alert" class="alert alert-info text-center"></h6>

			<form>
			                               
			   <label>Question</label>
			   <input type="text" id="question" class="form-control">

			   <label class="mt-3">Answer 1</label>
			   <input type="text" id="ans1" class="form-control">

			   <label class="mt-3">Answer 2</label>
			   <input type="text" id="ans2" class="form-control">

			   <label class="mt-3">Answer 3</label>
			   <input type="text" id="ans3" class="form-control">

			   <label class="mt-3">Answer 4</label>
			   <input type="text" id="ans4" class="form-control">

			   <label class="mt-3">Grade & Section</label>
			  
               <select id="gradeSection" class="custom-select">
               	 <?php
															
							$sql = "SELECT * FROM grade_section ORDER BY id ASC";
							$read = $conn->read($sql);
					
							while($fetch = $read->fetch_array()){ 			
													
					   ?>            

							<option><?php echo $fetch['grade_sec'];?></option>
					   <?php

							}

						?>

               </select>

			<div class="row">

			     <div class="col-lg-6">

			       <label class="mt-3">Correct Answer</label>
			        <input type="number" id="correct_answer" class="form-control" placeholder="Enter only 1-4...">

			    </div>


			    <div class="col-lg-6">

			       <label class="mt-3">Subject</label>

			          <select class="custom-select" id="subject">
			                               	                      	  	         
			           <?php
															
							$sql = "SELECT * FROM subjects ORDER BY id ASC";
							$read = $conn->read($sql);
					
							while($fetch = $read->fetch_array()){ 			
													
					   ?>            

							<option><?php echo $fetch['subject'];?></option>
					   <?php

							}

						?>

			          </select>
			                               	 	
			    </div><!-- div col-lg-6 -->
			                               	
		  </div><!-- div class row -->
			                             
			<button type="button" class="btn btn-primary mt-2 pull-right" id="add_ques">Add Question</button>
			 
	 </form>


									
				</div><!-- card body end-->
								
		     </div><!-- card end-->
		 </div>	<!-- div col-lg-8 -->	
	 </div>	<!-- row end -->
</div><!-- conatiner end-->

    <!- Footer -->

	<div class="container-fluid footer">

		<p class="p-4">All rights reserved 2019</p>

	</div>
   
<script src="js/question.js" type="text/javascript"></script>
<?php include('logout_modal.php');?>

</body>
</html>