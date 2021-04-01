<!-- Modal -->
<div class="modal" id="del_question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
                    <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Delete Question</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      <div class="modal-body">
		<center><h6 class = "alert alert-danger">Are you sure you want to delete this record?</h6 ></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger" id="delete"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="up_question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
		           <!-- Modal Header -->
           <div class="modal-header" style="background-color: dodgerblue;">
               <h4 class="modal-title" style="color:white;">Edit Question</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
		<div class="modal-body">
          
                                     <label>Question</label>
                                     <input type="text" id="question" class="form-control">
                                     <label class="mt-3">Answer 1</label>
                                     <input type="text" id="ans1" class="form-control">
                                     <label class="mt-3">Answer 2</label>
                                     <input type="text" id="ans2" class="form-control">
                                     <label class="mt-3">Answer 3</label>
                                     <input type="text" id="ans3" class="form-control">
                                     <label class="mt-3">Answer 4</label>
                                     <input type="text" id="ans4" class="form-control">
                                       <div class="row">

                                       <div class="col-lg-4">

                                          <label class="mt-3">Correct Answer</label>
                                        <input type="number" id="correct_answer" class="form-control" placeholder="Enter only 1-4...">

                                       </div>


                                        <div class="col-lg-8">

                                             <label class="mt-3">Subject</label>

                                             <select class="custom-select" id="subject">
                                                
                                                   
                                              <?php
                                                //require 'class.php';
                                                $con = new db_class();
                                              
                                                $sql = "SELECT * FROM subjects ORDER BY id ASC";
                                                $read = $con->read($sql);
                          
                                                while($fetch = $read->fetch_array()){       
                                          
                                          ?>            

                                                      <option><?php echo $fetch['subject'];?></option>
                                           <?php

                                            }

                                           ?>



                                             </select>
                                        
                                       </div>
                                      

                                     </div>
                                   
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" id="update"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
	  
    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="logout">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 40%;">

      <!-- Modal Header -->
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          
          <h6 class="text-center alert alert-danger">Are you sure you want to logout? </h6>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <a href="" type="button" data-dismiss="modal" class="btn btn-primary">No</a>
        <a href="logout.php" type="button" class="btn btn-danger">Yes</a>
      </div>

    </div>
  </div>
</div>