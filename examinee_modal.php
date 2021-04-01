
<!-- The Modal -->
<div class="modal" id="login" >
  <div class="modal-dialog" style="margin-left:37%;">
    <div class="modal-content" style="margin-top: 30%;width: 70%;">

     
       
        <a class="close" data-dismiss="modal" style="margin-left: 92%;" data-toggle="tooltip" title="Close Modal">&times;</a>
    

          <!-- Modal body -->
          <div class="modal-body">
             <form action="login_for_examinee.php" method="POST">
                 
                  <div class="input-group mb-3">
    			    <div class="input-group-prepend">
    			      <span class="input-group-text fa fa-user"></span>
    			    </div>
    			    <input type="text" class="form-control" placeholder="Username" name="examinee_name" required>
    			  </div>

    			  <div class="input-group mb-3">
    			    <div class="input-group-prepend">
    			      <span class="input-group-text fa fa-lock"></span>
    			    </div>
    			    <input type="password" class="form-control" placeholder="Password" name="examinee_pass" required> 
    			  </div>

           
          </div>

   
        <button type="submit" class="btn btn-primary" id="login_examinee">Log In</button>

       </form>
  

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="alert_pass" >
  <div class="modal-dialog" style="margin-left:37%;">
    <div class="modal-content" style="margin-top: 30%;width: 70%;">

     
       
        <a class="close" data-dismiss="modal" style="margin-left: 92%;" data-toggle="tooltip" title="Close Modal">&times;</a>
    

          <!-- Modal body -->
          <div class="modal-body">

            <h6 class="text-center alert alert-danger">Incorrect Password!</h6>
           
          </div>
  </div>
</div>
</div>