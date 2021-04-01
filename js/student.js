// jquery to delete all the records
$(document).on('click', '.delete-all', function(){

       var records = new Array();

           $.each($("input[type='checkbox']:checked"), function(){            
               records.push($(this).val());
               
          });

           if(records.length == 0){

            alert("No data selected");

          }else{

             $('#del-all').modal('show');

             $('#del-all').click(function(){

               var ids = JSON.stringify(records);
           

               $.ajax({

                type: "POST",
                url: "delete_multiple_student.php",
                data: {

                  id : ids,

                },

                success: function(response){

                           $('#msg').addClass("alert-danger");
                           $('#msg').html("Deleted succesfully");
                           $('#data').html(response);
                       $('#check-all').prop("checked", false);
       
                        
                }

               });
           });
        }
    });// delete all
  //delete subject
  $(document).on('click', '#stud_del', function(){
      
       var id = $(this).val();
       $('#del_stud').modal('show');
 
       $('#delete_student').val(id);

  });

  $(document).on('click', '#delete_student', function(){
     
     var id = $(this).val();
     
     $('#del_stud').modal('hide');

     $.ajax({
          
          type: "POST",
          url: "delete_student.php",
          data: {
              id: id, 

          },

           success:function(resp){
                    
                       $('#msg').addClass("alert-danger");
                       $('#msg').html("Deleted succesfully");
                       $('#data').html(resp);
          }
     });
 });// end delete subjects


  //update subject
  $(document).on('click', '#stud_up', function(){
      
       var id = $(this).val();
       var name = $('#name'+id).val();
       var grade = $('#grade_sec'+id).val();
       var adviser = $('#adviser'+id).val();

       $('#name').val(name);
       $('#grade').val(grade);
       $('#adviser').val(adviser);
       $('#update_stud').modal('show');  
    
       $('#update_student').val(id);

  });

  $(document).on('click', '#update_student', function(){
     
     var id = $(this).val();
     var name = $('#name').val();
     var grade = $('#grade').val();
     var adviser = $('#adviser').val();
     $('#update_stud').modal('hide');

     $.ajax({
          
          type: "POST",
          url: "update_student.php",
          data: {
              id: id, 
              name: name,
              grade: grade,
              adviser: adviser,

          },

           success:function(response){

              $('#msg').addClass("alert-info");
              $('#msg').html("Updated succesfully");
               $('#data').html(response);
                  
          }
     });

});// end update subject

  $(document).ready(function(){
    $(".fa-bars").click(function(){

      $(".navbar-nav").slideToggle();
    });

    $(".x").click(function(){

      $(".subjects-list").slideUp();
    });

    //check all the radio button if the checkbox that has id #check-all
    $('#check-all').click(function(){
      
         $("input[type='checkbox'").prop("checked", true);
   
    });

  
});
   