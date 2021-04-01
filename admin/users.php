<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
<head>
		<?php include("links.php");?>
		
	<title>Subjects</title>

</head>  

<script type="text/javascript">
$(document).ready(function(){
  

  $(".x").click(function(){

    $(".users-list").slideUp();
  });
  
 
});


</script>
<body> 

   <?php include("header.php");?>
    <div class="row" style="width: 100%;margin: 0;"> 
    	    
    	 <div class="col-lg-2 col-md-3 side-nav">
           
	           <button class="bars"><span class="fa fa-bars"></span></button>
              
	          <?php
               //include the side navigation
	           include("side_nav.php");

	           ?>
    	    </div>

    	      <div class="col-lg-10 col-md-9">

    	      		<div class="users-list">
                    	 <span class="fa fa-vcard" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;	Users List</span><span class="pull-right x">&times;</span>
                    </div>

                      <div class="container-fluid" style="margin-top: 20px;">

				        <div class="card mb-3">
				  
				        	<div class="card-body">
				        		
				        		<div class="table-responsive">
				        		   
				        		   <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
				        		   	 <thead>
				        		   	 	<tr> 
				        		   	 		<th>ID</th>
				        		   	 		<th>Photo</th>
				        		   	 		<th>Username</th>
				        		   	 	    <th>Password</th>
				        		   	 	    <th>Hint</th>
				        		   	 	
				        		   	 	</tr>
				        		   	 </thead>
											<tbody id="data">
												<?php
													require 'class.php';
													$conn = new db_class();
													$sql = "SELECT * FROM user  ORDER BY id ASC";
													$read = $conn->read($sql);
													while($fetch = $read->fetch_array()){ 
												?>
													<tr>
														<td><?php echo $fetch['id'];?></td>
														<td style="width: 10%;"><img class="img" style="width: 100%;"  src="<?php echo $fetch['photo']?>"></td>
														<td><?php echo $fetch['username'];?></td>
														<td><?php echo str_repeat("*", strlen($fetch['password']));
                           
														?></td>
														<td><?php echo str_repeat("*", strlen($fetch['hint']));?></td>
														
													</tr>
												<?php
													}
												?>	
												</tbody>


				        		   </table>	
			                     

				        		</div>
				        	</div>
				        	
				        </div>


    	      </div>
         


    </div>

	  <footer>
			 Examination System
	 </footer>

<?php include("logout_modal.php"); ?>


<link rel="stylesheet" type="text/css" href="../css/css.css">
<script type="text/javascript" src="../js/main.js"></script>
<link rel="stylesheet" type="text/css" href="../css/users.css">
<script type="text/javascript" src="../js/dataTables.js"></script>
</body>
</html>