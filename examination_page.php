<?php
  
 session_start();

 if(!isset($_SESSION['uid'])){
 	header("location: login_examinee.php");
 	exit;
  }

?>	
<!DOCTYPE html>
<html>

	<head>
		    <?php include("links.php");?>
		    <link rel="stylesheet" type="text/css" href="css/examination_page.css">
	    	<title>Examination Page</title>
	</head>

<body>
			<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: dodgerblue;">
		   
				  <!-- Toggler/collapsibe Button -->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				    <span class="navbar-toggler-icon"></span>
				  </button>

					  <!-- Navbar links -->
					  <div class="collapse navbar-collapse" id="collapsibleNavbar">
					    <ul class="navbar-nav">
						      <li class="nav-item">
						        <a class="nav-link" href="" style="color: white;"><span class="fa fa-home"></span>Home</a>
						      </li>
					   
						      <div class="dropdown">

							       <li class="nav-item">
								      	 <a class="nav-link drop-btn" href="#"  style="color:white;"><span class="fa fa-list" style="font-size: 16px;"></span>
								          List
								         </a>
							       </li>
							      	
								   <div class="dropdown-content">
								      	   
								      	  <button class="dropdown-links"  value="<?php echo $_SESSION['grasec']; ?>" type="button" id="takenExam" >Taken the Exam</button>
								      
								   </div>
							    
						      </div>
						
					      <li class="nav-item">

					        <a class="nav-link" href="#" style="color: white;"></a>

					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="#logout_exam"  data-toggle="modal" style="color: white;"><span class="fa fa-sign-out"></span>Logout</a>

					      </li>

					    </ul>
				</div>
		</nav>

		<div class="container">
	             <h6 class="alert alert-primary mt-3" style="width: 100%;">Welcome Jereco James Piso </h6> 
	        <div class="row">

	        	<div class="col-lg-4">


	        		   <?php 

	        		          if (isset($_SESSION["alert"])) {  ?>


	        		            <h6 class="text-center alert alert-danger" style="font-size: 80%;"><?php echo $_SESSION["alert"];?></h6>
                                     
                             <?php
	        		                  
	        		     }

	        		        unset($_SESSION["alert"]);

	        		?>

							<div class="list-group" >

								<h6 class="list-group-item text-center">Select a subject below to take <span class="fa fa-level-down"></span></h6>

								 <?php
									require 'class.php';
									$grasec = $_SESSION['grasec'];
									$conn = new db_class();
									$sql = "SELECT * FROM subjects WHERE grasec='$grasec' ORDER BY id ASC";
									$read = $conn->read($sql);
													
																	
									while($fetch = $read->fetch_array()){ 

								?>
									<a href="answering_room.php?subject=<?php echo $fetch['subject'];?>" class="lis list-group-item nav-link"><?php echo $fetch['subject'];?></a>


								<?php

									}
								?>
													       		

							</div>
	
	        	</div>


	<div class="col-lg-8">

	 	<img src="exam.jpg" height="300px" width="100%">
	        		
	</div>
	        	


	    </div>
</div><!-- class container -->

	<div class="container-fluid footer">

		<p class="p-4">All rights reserved 2019</p>

	</div>
	<!-- modal for displaying classnates who already take the exam -->
	<div class="modal" id="classmates">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
	                
	                <h6>Classmates who already taken the exam</h6>
	                <button class="close" data-dismiss="modal"><span>&times;</span></button>
					
				</div>
				<div class="modal-body">
					 <ul class="list-group take" style='border: 1px solid dodgerblue;'>
					  <li class="list-group-item" ><span><b>Name</b></span><span class="pull-right"><b>Score</b> </span></li>
					 	
					 </ul>
				</div>
				<div class="modal-footer">
					 
				</div>
				
			</div>
		</div>
		
	</div>

<?php include("logout_modal.php");?>
<script type="text/javascript" src="js/exam_page.js"></script>
</body>
</html>