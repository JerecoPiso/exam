<!DOCTYPE html>
<html>
<head>
		 <?php include("links.php");?>
     <link rel="stylesheet" type="text/css" href="../css/signup.css">
	<title>Sign Up</title>
</head>

<body>

           
  <div class="container">
           	            
      <div class="card">

        <div class="card-header">
                                  
                <h6 class="text-center alert mt-2" id="alert" style=""></h6>
        </div>

        <div class="card-body">

            <form>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><span class="fa fa-user"></span></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" id="uname">
              </div>
        								  
              <div class="input-group mb-3">

                <div class="input-group-prepend">
                  <span class="input-group-text"><span class="fa fa-lock"></span></span>
                </div>
                  <input type="password" class="form-control" placeholder="Password" id="pass1">

             </div>      

            <div class="input-group mb-3">

                <div class="input-group-prepend">

                    <span class="input-group-text"><span class="fa fa-lock"></span></span>

                </div>
                    <input type="password" class="form-control" placeholder="Re-type Password" id="pass2">
            </div>       

            <div class="input-group mb-3">

              <div class="input-group-prepend">
                  <span class="input-group-text"><span class="fa fa-key"></span></span>

              </div>
                 <input type="password" class="form-control" placeholder="Hint" id="hint">
           </div>         
                                           
                <button type="button" class="btn btn-primary" id="sub">Sign Up</button>

                <a href="index.php">Already have an account?</a> 

                <a href="#myModal" data-toggle="modal" id="forgot_pass" style="margin-top: 3px;">Forgot Password?</a>			


                </form>
           	           			
           	</div><!-- class card-body end -->
                           
      </div><!-- class card end -->
 </div><!-- class container end -->

       
<?php include("hint_modal.php"); ?>

<script type="text/javascript" src="../js/hint.js"></script>
<script type="text/javascript" src="../js/signup.js"></script>

</body>
</html>