<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  
	    

		 <title>Subjects</title>

	</head>  
  <style type="text/css">
  	
	.gen-settings{
		background-color: rgba(200,200,200,0.6);
		margin-right: 3%;
		margin-left: 2%;
		padding: 1%;
		margin-top: 1%;
		border-radius: 1rem;
	}
	
  </style>
<body> 
     
     <!--header-->
     <?php include("header.php");?>
	
    <div class="row"> 


    	 <div class="col-lg-2 col-md-3 side-nav">
              <button class="bars"><span class="fa fa-bars"></span></button>
              	<?php include("side_nav.php"); ?>
    	    </div>

    	      <div class="col-lg-10 col-md-9">


    	      		<div class="gen-settings">
                    	 <span class="fa fa-gears" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;General Settings</span><span class="pull-right x">&times;</span>
                    </div>

                      <div class="container-fluid" style="margin-top: 20px;">

                      	   <div class="row">
                      	   	   <div class="col-lg-4">

                      	   	   	  <h5>Logo</h5>

                      	   	    	<img src="bgi.png" width="80%" height="200px" style="border-radius: 50%;">
                      	   	   	
                      	   	   </div> 
                      	   	   <div class="col-lg-4 mt-4">

                      	   	    	<h5>Title</h5>
                      	   	    		
                      	   	    	<h3>Examination System</h3>
                      	   	    	<button class="btn btn-primary mt-3">Change</button>
                      	   	   	
                      	   	   </div>
                      	   	 	 <div class="col-lg-4 mt-4 mb-4">

                      	   	 	 	<h5>Footer</h5>
                      	   	    		
                      	   	    	<h3>Examination System</h3>
                      	   	    	<button class="btn btn-primary mt-3">Change</button>

                      	   	   	
                      	   	   </div>
                      	   	
                      	   </div>



    	             </div>


    </div>

   <?php include("logout_modal.php"); ?>

  

  <footer>
			 Examination System
 </footer>



<link rel="stylesheet" type="text/css" href="../css/main.css">
<script src="../js/subjects.js" type="text/javascript"></script>	


</body>
</html>