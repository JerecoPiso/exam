<?php
 
 session_start();

 
 if(!isset($_SESSION["uid"])){

 	header("location: login_examinee.php"); 

 }else{

 	require_once 'class.php';	
	
   
   	$conn = new db_class();
   	$name= $_SESSION["uname"];
   	$subject = $_GET['subject'];


    //check if the questions for the exam is greater than 10 if not it will not display the questions
    $command = "SELECT * FROM question WHERE subject=? ORDER BY id ASC";
    $query = $conn->count_questions($subject,$command); 

    if ($query['count'] <= 10 ){

    	 $_SESSION["alert"] = "Lack of questions to be answered!";
		 header("location: examination_page.php");

    }else{

        //check if the student is already take the exam
    	$sql = "SELECT name,subject FROM done_exam WHERE name=? && subject=? ORDER BY id ASC";
	    $ret = $conn->checkExam_studDone($name,$subject,$sql);

	  if ($ret['count'] > 0) {
		 
	     $_SESSION["alert"] = "You can only take the exam for that subject once!";
		 header("location: examination_page.php");

	}
   

    }
	
 }	

?>
<!DOCTYPE html>
<html>
<head>

		 <?php include("links.php");?>
		 <link rel="stylesheet" type="text/css" href="css/answering_room.css">

	<title>Answering Room</title>
</head>

<body>

	  <nav class="navbar navbar-expand-md  navbar-dark" >
	
		<button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
	     </button>

		<!-- Navbar links -->
		 <div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				  <li class="nav-item">
				     <a class="nav-link" href="examination_page.php" style="color: white;"><span class="fa fa-home"></span>Home</a>
				  </li>
				  <li class="nav-item">
				     <a class="nav-link" href="#logout_exam" data-toggle="modal" style="color: white;"><span class="fa fa-sign-out"></span>Logout</a>
				  </li>
		     </ul>
		</div>
	</nav>

                
 <div class="container">
      <div class="row">

           <div class="col-lg-3">
              <div class="alert alert-info" style="margin-top: 20px;">

            			Time left <span id="time">60</span> minutes!

              </div><br>

            	<p><i>Note: Do not refresh the page or else you will restart the exam.</i></p>

            	<ul class="list-group">

	            	    <li class="list-group-item text-center">Subjects to take</li>
	            		<?php

							$conn = new db_class();
							$grasec = $_SESSION['grasec'];
							$sql = "SELECT * FROM subjects WHERE grasec='$grasec'  ORDER BY id ASC";
							$read = $conn->read($sql);
																										
							while($fetch = $read->fetch_array()){ 
					    ?>
							<a href="answering_room.php?subject=<?php echo $fetch['subject'];?>" class="lis list-group-item nav-link"><?php echo $fetch['subject'];?></a>


						<?php

							}

						?>
													       				 	
            	 </ul>

           </div><!-- end class col-lg-3 -->

           <div class="col-lg-8">

            	<div class="card">

            		<div class="card-header" style="border: 1px solid dodgerblue;">

											            						  
						<div class="marquee">

							<h4>Good luck to your exam in <span style="margin-left: 5px;"><?php echo $_GET['subject'];?></span>		

						</div>
			
            			</div>


            			<div class="card-body" style="border: 1px solid dodgerblue;">
                                       

                            <ul class="list-group" style="max-height: 550px;overflow: auto;">

                            <?php
														
								$conn = new db_class();
								$subject = $_GET['subject'];
								$sql = "SELECT * FROM question WHERE subject='$subject' ORDER BY id ASC";
								$read = $conn->read($sql);
								$number = 0;
								while($fetch = $read->fetch_array()){ 

						  ?>
                            <li class="list-group-item" style="border: 2px solid dodgerblue;padding-left: 5px;padding: 10px;">
                                       	 	 
                                  <p ><span><?php $number++; echo $number . ") ";  
                                                 ?></span><?php echo $fetch['question'];?></p>

	                            <input type="radio"  class="ans1<?php echo $fetch['id'];?>" value="1">  <span><?php echo $fetch['ans1'];?></span><br>
	                            <input type="radio" class="ans2<?php echo $fetch['id'];?>" value="2">  <span><?php echo $fetch['ans2'];?></span><br>
	                            <input type="radio" class="ans3<?php echo $fetch['id'];?>" value="3">  <span><?php echo $fetch['ans3'];?></span><br>
	                            <input type="radio" class="ans4<?php echo $fetch['id'];?>" value="4">  <span><?php echo $fetch['ans4'];?></span><br>
	                            <input type="hidden" class="examineer_answer answer<?php echo $fetch['id'];?>">

                           </li>

                                 <?php include("radio_btn_answers.php");?>

                       	 <?php

                       		}

						?>
                                  <button type="button" id="btn" class="btn btn-primary" style="margin-top: 20px;border-radius: 2rem;width: 50%;margin-left: 24%;">Submit Answers</button>

                 		  </ul>
                                      		 		

                     </div><!-- end class card-body -->
            					
                </div><!-- end class card -->  				

           </div><!-- end class col-lg-8 -->          			

       <div class="col-lg-1"></div>
            			        			
   </div><!-- end class row -->

</div><!--  End class container -->

	<input type="hidden" name="" id="name" value="<?php echo $_SESSION['uname'];?>">
	<input type="hidden" name="" id="sub" value="<?php echo $_GET['subject'];?>">
    <input type="hidden" id="grasec" value="<?php echo $_SESSION['grasec'];?>
">
	<!- Footer -->
	<div class="container-fluid footer">

			 <p class="p-4">All rights reserved 2019</p>

	</div>
			
<?php include("modals.php"); ?>
<?php include("logout_modal.php"); ?>
<?php include("pass_answers_js.php"); ?>

</body>
</html>