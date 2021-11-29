<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
<head>
		 <?php include("links.php");?>
	<title>Dashboard</title>
</head>  
<style type="text/css">
	#time{
		color: white;
	}
	
	@media(max-width: 768px){
       .img{
       	display: none;
       }
       .navbar-nav{
       	display: none;
       }
       #time{
       	display: none;
       }

	}
	
	.admin-dashboard{
		background-color: rgba(200,200,200,0.6);
		margin-right: 3.5%;
		margin-left: 2%;
		padding: 1%;
		margin-top: 1%;
		border-radius: 1rem;
	}
	
	
	.card-header{
		background-color: dodgerblue;
	}

</style>
<script type="text/javascript">
$(document).ready(function(){
  $(".fa-bars").click(function(){

    $(".navbar-nav").slideToggle();
  });

  $(".x").click(function(){

    $(".admin-dashboard").slideUp();
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

                    <div class="admin-dashboard">
                    	 <span class="fa fa-television" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;	Admin Dashboard</span><span class="pull-right x" style="float: right;">&times;</span>
                    </div>
						    <div class="row mt-4 review-card">
								
									<div class="col-lg-4">

										<div class="card" style="overflow: hidden;">

											<div class="card-header">
												  <h6 class="card-title">Students<br><span class="total">
												  	 
												  	 <?php require "class.php";
                                                          
                                                             $conn = new db_class();
                                                             $sql="SELECT * FROM examinee";
                                                             $ret = $conn->count($sql);
                                                             echo $ret;

                                                     ?>


												  </span></h6><h5 class="fa fa-child cards" style="font-size: 350%;"></h5>
											</div>
                                                
											
											
										</div>

									</div>    		 

									<div class="col-lg-4">

											<div class="card" style="overflow: hidden;">

											<div class="card-header">
												 <h6 class="card-title">Subjects<br><span class="total">
												 	<?php   //require "class.php";
                                                          
                                                           //  $conn = new db_class();
                                                             $sql="SELECT * FROM subjects";
                                                             $ret = $conn->count($sql);
                                                             echo $ret;

                                                     ?></span></h6> <h5 class="fa fa-book cards" style="font-size: 350%;"></h5>
											</div>
                                                
										
										</div>

									</div>    		 
							    		

									<div class="col-lg-4">

											<div class="card" style="overflow: hidden;">

											<div class="card-header">
											 <h6 class="card-title">Questions<br><span class="total">
											        <?php   //require "class.php";
                                                          
                                                            // $conn = new db_class();
                                                             $sql="SELECT * FROM question";
                                                             $ret = $conn->count($sql);
                                                             echo $ret;

                                                     ?>
                                                     	
                                                     </span></h6><h5 class="fa fa-question cards" style="font-size: 350%;"></h5>
											</div>
                                                
										
										</div>

									</div>    		 
							    		
						    		
						    </div>


						     <div class="row mt-4 review-card">
								
									<div class="col-lg-4">

										<div class="card" style="overflow: hidden;">

											<div class="card-header">
												  <h6 class="card-title">Users<br><span class="total">
												   <?php   //require "class.php";
                                                          
                                                            // $conn = new db_class();
                                                             $sql="SELECT * FROM user";
                                                             $ret = $conn->count($sql);
                                                             echo $ret;

                                                     ?></span></h6><h5 class="fa fa-users cards" style="font-size: 350%;"></h5>
											</div>
                                                
											
										</div>

									</div>    		 

									<div class="col-lg-4">

											<div class="card" style="overflow: hidden;">

											<div class="card-header">
												 <h6 class="card-title">Section<br><span class="total">  <?php   //require "class.php";
                                                          
                                                            // $conn = new db_class();
                                                             $sql="SELECT * FROM grade_section";
                                                             $ret = $conn->count($sql);
                                                             echo $ret;

                                                     ?>
												 </span></h6> <h5 class="fa fa-building cards" style="font-size: 350%;"></h5>
											</div>
                                          
											
										</div>

									</div>    		 
							    		

									<div class="col-lg-4">

											<div class="card" style="overflow: hidden;">

											<div class="card-header">
											 <h6 class="card-title">Advisers<br><span class="total">
											 	<?php   //require "class.php";
                                                          
                                                            // $conn = new db_class();
                                                             $sql="SELECT * FROM advisers";
                                                             $ret = $conn->count($sql);
                                                             echo $ret;

                                                     ?>
											 </span></h6><h5 class="fa fa-users cards" style="font-size: 350%;"></h5>
											</div>
                                           
										</div>

									</div>    		 
							    		
						    		
						    </div>
                    
                    


    </div>



		 <footer>

			 Examination System

		 </footer>

<?php include("logout_modal.php"); ?>


<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/subjects.css">
<link rel="stylesheet" type="text/css" href="../css.css">


</body>
</html>