<?php
 
 session_start();

?><!DOCTYPE html>
<html>
<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="css/bootstrap.css">
      <script src="js/jquery.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/inde.css"> -->
      <link rel="stylesheet" type="text/css" href="css/login_examinee.css">
	<title>Online Examination System</title>

</head>
<style type="text/css">
   .header{
    background-color: dodgerblue;
   }
   .title{
    padding-bottom: 30px;
    padding-top: 30px;
    color: white  ;
   }
  
  .name, .pass{
      background-color: transparent;
      border: 0px;
      border-bottom: 2px solid dodgerblue;
      padding-left: 10px;
    }
     @media(max-width: 768px){
       label{
        margin-left: 8%;
      letter-spacing: 3px;
    }
    input{
      width: 100%;
      margin-left: 8%;

      
    }
     .footer {
     height: 90px; 
     width: 100%;
     background-color: dodgerblue;
     color: white;
     text-align: center;
     margin-top: 5%;
    
  }
    input::placeholder{
      text-align: center;
      font-size: 80%;
      letter-spacing: 3px;
    }
    .login-logo{
     
      width: 37%;
      margin-left: 30%; 
      border-radius: 50%;
     
    
    }
    .submit{
      width: 100%;
      margin-left: 8%;
      margin-top: 3%;
      background-color: rgb(0,140,255);
      border: none;
      padding: 8px;
      border-radius: 2rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgb(255,255,255);
    }
    .submit:hover{
       background-color: rgba(0,140,255,0.8);
    }
    span{
      margin-left: 7px;
      color: rgb(0,0,0);

    }
     .alerts{
      color: rgb(255,0,0);
      margin-left: 8%;
    }
    .already{
      margin-left: 8%;

    }

    }
    @media(min-width: 768px){
    label{
        margin-left: 8%;
      letter-spacing: 3px;
    }
    input{
      width: 100%;
      margin-left: 8%;

      
    }
    input::placeholder{
      text-align: center;
      font-size: 80%;
      letter-spacing: 3px;
    }
    .login-logo{
     
      width: 25%;
      margin-left: 34%; 
      border-radius: 50%;
     
    
    }
    .submit{
      width: 100%;
      margin-left: 8%;
      margin-top: 3%;
      background-color: rgb(0,140,255);
      border: none;
      padding: 8px;
      border-radius: 2rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgb(255,255,255);
    }
    .submit:hover{
       background-color: rgba(0,140,255,0.8);
    }
    span{
      margin-left: 7px;
      color: rgb(0,0,0);

    }
     .footer {
     height: 90px; 
     width: 100%;
     background-color: dodgerblue;
     color: white;
     text-align: center;
     margin-top: 5%;
     position: fixed;
     bottom: 0;
    
    }
     .alerts{
      color: rgb(255,0,0);
      margin-left: 18%;
    }
    }
    
    @media(min-width: 992px){
        label{
      margin-left: 33%;
      letter-spacing: 3px;
    }
    input{
      width: 50%;
      margin-left: 33%;
    }
    input::placeholder{
      text-align: center;
      font-size: 80%;
      letter-spacing: 3px;
    }
     
    .submit{
      width: 50%;
      margin-left: 33%;
      margin-top: 3%;
      background-color: rgb(0,140,255);
      border: none;
      padding: 8px;
      border-radius: 2rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgb(255,255,255);
    }
    .submit:hover{
       background-color: rgba(0,140,255,0.8);
    }
    span{
      margin-left: 7px;
      color: rgb(0,0,0);

    }
     .footer {
     height: 90px; 
     width: 100%;
     background-color: dodgerblue;
     color: white;
     text-align: center;
     margin-top: 5%;
     position: fixed;
     bottom: 0;
     left: 0;
  }
   .alerts{
      color: rgb(255,0,0);
      margin-left: 33%;
    }

    }
   
    @media(min-width: 1200px){
        label{
      margin-left: 33%;
      letter-spacing: 3px;
    }
    input{
      width: 50%;
      margin-left: 33%;
    }
    input::placeholder{
      text-align: center;
      font-size: 80%;
      letter-spacing: 3px;
    }
    .login-logo{
     
      width: 10%;
      margin-left: 43%; 
      border-radius: 50%;
    
    }
    .submit{
      width: 50%;
      margin-left: 33%;
      margin-top: 3%;
      background-color: rgb(0,140,255);
      border: none;
      padding: 8px;
      border-radius: 2rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgb(255,255,255);
    }
    .submit:hover{
       background-color: rgba(0,140,255,0.8);
    }
    span{
      margin-left: 7px;
      color: rgb(0,0,0);

    }
     .footer {
     height: 90px; 
     width: 100%;
     background-color: dodgerblue;
     color: white;
     text-align: center;
     margin-top: 5%;
     position: fixed;
     bottom: 0;
     left: 0;
    }
    .alerts{
      color: rgb(255,0,0);
      margin-left: 33%;
    }
    .already{
      margin-left: 33%;

    }
    }
    
  
</style>
<body>

      <!-- Header -->
	  <div class="container-fluid header">

	  			<h1 class="text-center title">Examination System</h1>
	  	
	  </div>



	  <div class="container" style="margin-top: 50px;">
                          
                    <div class="row">

                    	  
                           
                           <div class="col-lg-12">
                               <img class="login-logo" src="login.png">
                               <form class="form-group" action="login_for_examinee.php" method="POST">
                                   <label>Name<span class="fa fa-user"></span></label><br>

                               <input type="type" name="examinee_name" class="name" placeholder="Student Name..." required><br>
                                <?php 
                                             
                                             if (isset($_SESSION['msg_uname'])) {?>

                                                 <span class="alerts"><?php echo $_SESSION['msg_uname'];?></span><br>

                                            <?php  } unset($_SESSION['msg_uname'])?>

                                <label class="mt-3">Password<span class="fa fa-lock"></span></label><br>

                               <input type="password" name="pass" class="pass" placeholder="Password..." required><br>   
                                 <?php 
                                             
                                             if (isset($_SESSION['msg_pass'])) {?>

                                                 <span class="alerts"><?php echo $_SESSION['msg_pass'];?></span><br>

                                            <?php  } unset($_SESSION['msg_pass'])?>


                               <button type="submit" class="submit">Log In</button><br>
                               <a href="index.php" data-placement="right" data-toggle="tooltip" title="Click if you already have an account" class="already">Already have an account?</a>

                               </form>
                             
                           	
                          </div>		

                          


                    </div>
	  </div>

</div>

		     <div class="container-fluid footer">

			 				 <p class="p-4">All rights reserved 2019</p>
			</div>
<script type="text/javascript">
  

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

</script>


</body>
</html>