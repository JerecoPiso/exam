
	<div class="container-fluid header">

		<div class="row pb-2">
             
             <div class="col-lg-4 d-flex">

             	  <h6 id="time" class="pt-3"> <span class="fa fa-calendar"></span><?php  echo date('l jS \of F Y');?></h6>

             </div>

             <div class="col-lg-4">


             </div>

             <div class="col-lg-4" >

					<div class="dropdown pull-right">

						    <a class="drop-btn dropdown-toggle"  style="color: dodgerblue;" data-toggle="dropdown">
						      <img class="img mt-2"  src="<?php echo $_SESSION['photo'];?>"  >
						    </a>

						   <div class="dropdown-menu dp-menu" style="">
						    <!--   <a class="dropdown-item" href="#"><span class="fa fa-gear"></span>Account Settings</a> -->
						      <a class="dropdown-item" href="#logout" data-toggle="modal"><span class="fa fa-sign-in"></span>Logout</a>
						   </div>
				    </div>

             </div>

		</div>

	</div>
    
	