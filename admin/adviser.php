<?php include("id_checker.php"); ?>

<!DOCTYPE html>
<html>
<head>
	 <?php include("links.php");?>
	<title>Dashboard</title>
</head>  

<body> 

 <?php include("header.php");?>
    
 <div class="row" style="width: 100%;margin: 0;"> 


    <div class="col-lg-2 col-md-3 side-nav">
        
        <!--btn toggler -->
        <button class="bars"><span class="fa fa-bars"></span></button>

           <!-- side navigation bar -->
           <?php include("side_nav.php"); ?>
    </div>

   	<div class="col-lg-10 col-md-9">

      <div class="adviser-dashboard">
          <span class="fa fa-users" style="font-size: 200%;">&nbsp;&nbsp;&nbsp;	Advisers</span><span class="pull-right x">&times;</span>
      </div>

          <button id="add-adviser">Add Adviser <span class="fa fa-plus"></span></button>
          <h6 class="mt-4 mr-4 text-center" id="alert" style="float: right;width: 30%;border-radius: 2rem;"></h6>

      <div class="form">

         <div class="row">

             <div class="col-lg-4">

                <label>Name</label>
                <input type="text" id="name" class="form-control" name="">
                         		
             </div>
            <div class="col-lg-4">

                <label>Grade & Section</label>

                <select id="section" class="custom-select">
                <?php
                     require_once 'class.php';
                     $conn = new db_class();
                     $sql = "SELECT * FROM grade_section ORDER BY id ASC";
                     $read = $conn->read($sql);
			   
                    while($row = $read->fetch_array()){
                ?>

                    <option><?php echo $row["grade_sec"];?></option>

                <?php

                   }

                ?>
                     			
                </select>
           </div>
           <div class="col-lg-4">

                <label>Major Subject</label>
                <select id="m_subject" class="custom-select">
                <?php
                                     
                    $sql = "SELECT * FROM subjects ORDER BY id ASC";
                    $read = $conn->read($sql);

							   
                   while($row = $read->fetch_array()){
               ?>

                    <option><?php echo $row["subject"];?></option>

               <?php
                 }
              ?>
                     			
              </select>
                         		 
           </div>
                         	
    </div>

          <button id="add-adviser-btn">Add Adviser</button>
                    	
  </div><!-- end class form -->

   <div class="card mb-3 mt-4 mr-3">
				
      <div class="card-body">
				        		
		<div class="table-responsive">
				        		   
		<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr> 
					<th>Check</th>
					<th>ID</th>
					<th>Name</th>
					<th>Grade&Section</th>
					<th>Major Subject</th>
				   	<th>Action</th>
				</tr>
			</thead>
			<tbody id="data">
				<?php

					$query = "SELECT * FROM advisers ORDER BY id ASC";
					$reader = $conn->read($query);
					while($fetch = $reader->fetch_array()){ 
				?>

				<tr>
					<td><input type="checkbox" name="" value="<?php echo $fetch['id']?>"></td>
					<td><?php echo $fetch['id']?></td>
					<td><?php echo $fetch['name']?></td>
					<td><?php echo $fetch['section']?></td>
					<td><?php echo $fetch['subject']?></td>
					<td>

					  <div class="btn-group">
							<button type="button" class="btn btn-warning" id="adviser_up" value="<?php echo $fetch['id']?>"><span class = "fa fa-pencil"></span></button>
							<button type="button" class = "btn btn-danger" id="adviser_del" value="<?php echo $fetch['id']?>"><span class = "fa fa-trash"></span></button></div></td>
							<input type="hidden" id="name<?php echo $fetch['id']?>" value="<?php echo $fetch['name']?>">
							<input type="hidden" id="sec<?php echo $fetch['id']?>" value="<?php echo $fetch['section']?>">
							<input type="hidden" id="sub<?php echo $fetch['id']?>" value="<?php echo $fetch['subject']?>">
				</tr>
				<?php
					}//while loop end
				?>	

			   </tbody>

			<?php
			  include("action_modal.php");
			  include("modals.php");	
			?>

				</table>	

		</div><!-- table responsive -->

	</div><!-- card body -->
				        	
</div><!-- class card end -->


				        	
 <div class="check-all ml-3 mb-3">

     <input type="checkbox" id="check-all">Check All

 </div>

  <div class="uncheck-all ml-3 mb-3" style="width: 19%;display: none;" >

                <input type="checkbox" id="uncheck-all">Uncheck All
 </div>

   <!--<span class="fa fa-trash" id="delete-all"></span> Delete All-->
   <button class="delete-all ml-3 mb-3" data-toggle="modal" >
   	<span class="fa fa-trash" id="delet-all"></span> Delete
   </button>


 </div><!-- class col-lg-10 -->


<footer>

	Examination System

</footer>	 

<?php include("logout_modal.php"); ?>

<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../css/advisers.css">
<link rel="stylesheet" type="text/css" href="../css/subject.css">
<script type="text/javascript" src="../js/adviser.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/dataTables.js"></script>

</body>
</html>