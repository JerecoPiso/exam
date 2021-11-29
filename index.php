<!DOCTYPE html>
<html>
<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="css/bootstrap.css">
		  <script src="js/jquery.js"></script>
		  <script src="js/popper.js"></script>
		  <script src="js/bootstrap.js"></script>
<!-- 		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      <link rel="stylesheet" type="text/css" href="css/index.css">
       <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.css">

	<title>Online Examination System</title>

</head>

<body>

      <!-- Header -->
	  <div class="container-fluid header">

	  			<h1 class="text-center title" style="font-size: 150%;">Examination System</h1>
	  	
	  </div>

<?php
 session_start();
 if(isset($_SESSION['msg_pass'])){ ?>

 	         <h6 class="text-center alert alert-danger pass_alert"><?php echo $_SESSION['msg_pass'];?></h6>
 		
<?php
 
 }
  unset($_SESSION['msg_pass']);
?>
	  <div class="container" style="margin-top: 50px;">
                          
<div class="row">

                    	  
                           
       <div class="col-lg-6">
                           	
           <div id="demo" class="carousel slide" data-ride="carousel">

              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
               </ul>
        			 <div class="carousel-inner">

                     <div class="carousel-item active">
                    	 <img src="login.png" alt="Los Angeles" width="100%" height="350">
                    	<div class="carousel-caption">
                    		<h3 class="carousel-title">Los Angeles</h3>
                    		<p>We had such a great time in LA!</p>
                    	 </div>   
                     </div>
                     <div class="carousel-item">
                    	 <img src="login.png" alt="Chicago" width="100%	" height="350">
                    	<div class="carousel-caption">
                    		 <h3 class="carousel-title">Chicago</h3>
                    		 <p>Thank you, Chicago!</p>
                     </div>   
                     </div>
                    								  
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                       <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a class="carousel-control-next" href="#demo" data-slide="next">
                       <span class="carousel-control-next-icon"></span>
                     </a>
        				</div>

       </div>
     </div>		

     <div class="col-lg-6">

          <h5 style="font-style: italic;">Filled up the form to if you are not yet registered.</h5>
          <h6 class="alert text-center" id="alert"></h6>
                          
        <div class="row">
   
            <div class="col-lg-6" style="margin-top: 20px;"> 
            
                  <label>Name</label>
                  <input type="text" class="form-control" id="name" name="">
					
           </div>

           <div class="col-lg-6" style="margin-top: 20px;"> 
       
                  <label>Password</label>
                  
                  <input type="Password" class="form-control" id="pass" name="">
                                           				  	 			 
           </div>
        
           <div class="col-lg-6" style="margin-top: 20px;"> 
          
                 <label>Grade & Section</label>
                          
                <select class="custom-select" id="grade_section">
                           <?php
                      require_once 'class.php';
                      $conn = new db_class();
                      $sql = "SELECT * FROM grade_section ORDER BY id ASC";

                      $ret = $conn->read($sql);
                          
                  
                     while($row = $ret->fetch_array()){ ?>

                        <option><?php echo $row['grade_sec']?></option>
                    <?php
                      }
                    ?>
             
                          
                </select>
      
          </div>

           <div class="col-lg-6" style="margin-top: 20px;">

                    <label>Adviser</label>
                    <select class="custom-select" id="adviser">
                        <?php
                         
                            $sql = "SELECT * FROM advisers ORDER BY id ASC";
                            $read = $conn->read($sql);
                            while($fetch = $read->fetch_array()){  ?>

                            <option><?php echo $fetch['name'];?></option>
                       <?php
                        }
                      ?>
                   </select>
          </div>
                                              
          
          <button type="button" class="btn btn-primary" id="signup">Sign Up</button><br>
           <a href="login_examinee.php" id="login_button" data-toggle="tooltip" title="Click if you have already registered to start the exam" data-placement="bottom" >Login to take the exam</a>

       
                                                
                                              

											
			    </div>
                           				
      </div>

   </div>

</div>


  <?php

    include("examinee_modal.php");

  ?>
		     <div class="container-fluid footer" style="margin-top: 10%;">

			 				 <p class="p-4">All rights reserved 2019</p>
		  	</div>

<script type="text/javascript" src="js/index.js"></script>

</body>
</html>