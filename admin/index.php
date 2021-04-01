<?php
 
   session_start();
	 if(isset($_SESSION['uid'])){
	 	header("location: subjects.php");
	 	exit();
	 }
?>
<!DOCTYPE html>
<html>
	<head>
		 <?php include("links.php");?>
		 <link rel="stylesheet" type="text/css" href="../css/login_form.css">
		 <title>Log In</title>
	</head>

<body>

    <div class="container">
           	            
       <div class="card">

           <div class="card-body">

              <form action="login.php" method="POST">

                 <?php
                                      
                    if(isset($_SESSION['msg_uname'])){ ?>

                        <span style="color: red;font-size: 12px;"><?php echo $_SESSION['msg_uname'];?></span>

                <?php  }
                                        
                    unset($_SESSION['msg_uname']);


                 ?>
                 <div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><span class="fa fa-user"></span></span>
					</div>
				        <input type="text" class="form-control" placeholder="Username" name="uname" required>
				</div> 
								                            
				<?php
                                                            
                    if(isset($_SESSION['msg_pass'])){ ?>

                       <span style="color: red;font-size: 12px;"><?php echo $_SESSION['msg_pass'];?></span>

                <?php  }
                                        
                   unset($_SESSION['msg_pass']);


                ?>
                                     
				<div class="input-group mb-3">

					<div class="input-group-prepend">
						<span class="input-group-text"><span class="fa fa-lock"></span></span>

					</div>
						<input type="password" class="form-control" placeholder="Password" name="pass" required>
				</div> 

								  	
                                     
                <button type="submit" class="btn btn-primary" id="login" name="login">Log In</button>

				<a href="signup.php">Don't have an account?</a> 

				<a href="#myModal" data-toggle="modal" id="forgot_pass" style="margin-top: 3px;">Forgot Password?</a>			


                  </form>
           	           			
           	  </div><!-- class car-body end -->
                           
        </div><!-- class card end -->

 </div><!--class conatainer end -->
       
<?php include("hint_modal.php"); ?>

<script type="text/javascript" src="../js/hint.js"></script>

</body>
</html>