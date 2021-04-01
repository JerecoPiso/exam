 //add subject
 $(document).on('click', '#addsub', function(){
          
          var sub_name = $('#s_name').val();
          var grasec = $('#s_grasec').val();
          if(sub_name === ""){
             alert("Empty!");
          }else{
              
              $('#subjects').modal('hide');

            $.ajax({
                     
               type: "POST",
               url: "add_subject.php",
               data: {
                    subject: sub_name,
                    grasec: grasec
               },

                  success:function(response){
                       $('#s_name').val('');
                       $('#msg').removeClass("alert-danger");
                       $('#msg').addClass("alert-info");
                       $('#msg').html("Added succesfully");
                       $('#data').html(response);
                    
                  }
     

            });

          }

  });


  //delete subject
  $(document).on('click', '#sub_del', function(){
      
       var id = $(this).val();
       $('#del_sub').modal('show');
 
       $('#delete_subject').val(id);

  });


  $(document).on('click', '#delete_subject', function(){
     
     var id = $(this).val();
     
     $('#del_sub').modal('hide');

     $.ajax({
          
          type: "POST",
          url: "delete_sub.php",
          data: {
              id: id, 

          },

           success:function(response){
                    
                       $('#msg').addClass("alert-danger");
                       $('#msg').html("Deleted succesfully");
                       $('#data').html(response);
                    
                  }
     


     });


  });


  //update subject
  $(document).on('click', '#sub_up', function(){
      
       var id = $(this).val();
       var subject = $('#subj'+id).val();
     
       $('#subject').val(subject);
       $('#gradesec').val($('#grasection'+id).val());
      
       $('#update_sub').modal('show');  
    
       $('#update_subject').val(id);

  });


  $(document).on('click', '#update_subject', function(){
     
     var id = $(this).val();
     var subject = $('#subject').val();

     var grasec = $('#gradesec').val();
     $('#update_sub').modal('hide');

     $.ajax({
          
          type: "POST",
          url: "update_sub.php",
          data: {
              id: id, 
              subject: subject,
              grasec: grasec

          },

           success:function(response){
                     
                       $('#msg').addClass("alert-info");
                       $('#msg').html("Updated succesfully");
                       $('#data').html(response);
                  }
     


     });


  });


  $(document).ready(function(){
    $(".fa-bars").click(function(){

      $(".navbar-nav").slideToggle();
    });

    $(".x").click(function(){

      $(".subjects-list").slideUp();
    });

   
  });

  // jquery to delete all the records
$(document).on('click', '.delete-all', function(){

       var check = new Array();

           $.each($("input[type='checkbox']:checked"), function(){            
               check.push($(this).val());
               
          });

           if(check.length == 0){

        alert("No data selected");
            

          }else{

             $('#del-all').modal('show');

             $('#delete-all').click(function(){

               var ids = JSON.stringify(check);
           

               $.ajax({

                type: "POST",
                url: "delete_multiple_subject.php",
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





 