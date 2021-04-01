<!-- Modal delete subject -->
<div class="modal" id="del_sub" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
                    <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Delete Subject</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      <div class="modal-body">
		<center><h6 class = "alert alert-danger">Are you sure you want to delete this record?</h6 ></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger" id="delete_subject"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- update subject -->
<div class="modal" id="update_sub" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
		           <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Edit Subject</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
		<div class="modal-body">
         
              <label>Subject</label>
              <input type="text" id="subject" class="form-control">
              <label>Grade & Section</label>
                      <select id="gradesec" class="custom-select">
                        <?php
                          require_once'class.php';
                          $conn = new db_class();
                          $sql = "SELECT * FROM grade_section ORDER BY id ASC";
                          $ret = $conn->read($sql);
                          while($row = $ret->fetch_array()){ ?>

                          <option><?php echo $row['grade_sec'];?></option>
                         <?php
                          }
                          ?>
                      </select>
			
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" id="update_subject"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
	
    </div>
  </div>
</div>


<!-- Modal delete student-->
<div class="modal" id="del_stud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
                    <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Delete Student</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      <div class="modal-body">
    <center><h6 class = "alert alert-danger">Are you sure you want to delete this record?</h6 ></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger" id="delete_student"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- update student -->
<div class="modal" id="update_stud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
               <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Edit Student</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
    <div class="modal-body">
        
              <label>Name</label>
              <input type="text" id="name" class="form-control">
                <label>Grade & Section</label>
                 <select class="custom-select" id="grade">
                           <?php
                    
                      $sql = "SELECT * FROM grade_section ORDER BY id ASC";

                      $ret = $conn->read($sql);
                          
                  
                     while($row = $ret->fetch_array()){ ?>

                        <option><?php echo $row['grade_sec']?></option>
                    <?php
                      }
                    ?>
             
                          
                </select>
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
      <div class="modal-footer">
        <button class="btn btn-warning" id="update_student"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
   
    </div>
  </div>
</div>

<!-- Modal delete adviser-->
<div class="modal" id="del_adviser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
                    <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Delete Adviser</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      <div class="modal-body">
    <center><h6 class = "alert alert-danger">Are you sure you want to delete this record?</h6 ></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger" id="delete_adviser"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- update adviser -->
<div class="modal" id="update_advi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
               <!-- Modal Header -->
           <div class="modal-header">
               <h4 class="modal-title">Edit Adviser</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
    <div class="modal-body">
        
              <label>Name</label>
              <input type="text" id="adviser_name" class="form-control">
              <label>Grade & Section</label>
              <input type="text" id="adviser_section" class="form-control">
              <label>Adviser</label>
              <input type="text" id="adviser_subject" class="form-control">
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" id="update_adviser"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
   
    </div>
  </div>
</div>

<!-- Modal delete grade section-->
<div class="modal" id="del_grasec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
                    <!-- Modal Header -->
           <div class="modal-header">
               <h5 class="modal-title">Delete Grade Section</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      <div class="modal-body">
    <center><h6 class = "alert alert-danger">Are you sure you want to delete this record?</h6 ></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger" id="delete_grade_sec"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- update grade section -->
<div class="modal" id="update_grasec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
               <!-- Modal Header -->
           <div class="modal-header">
               <h5 class="modal-title">Edit Grade Section</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
    <div class="modal-body">
        
              <label>Grade Section</label>
              <input type="text" id="grasec" class="form-control">
            
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" id="update_grade_section"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
   
    </div>
  </div>
</div>