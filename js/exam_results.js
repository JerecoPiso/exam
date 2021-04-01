
  $(document).on('click', '.delete-all', function(){
          $('#check-all').prop("checked", false);
           $('#uncheck-all').prop("checked", false);

       var records = new Array();

           $.each($("input[type='checkbox']:checked"), function(){            
               records.push($(this).val());
               
          });
      
           if(records.length == 0){

            alert("No data selected");

          }else{

             $('#del-all').modal('show');

             $('#delete-all').click(function(){

               var ids = JSON.stringify(records);
     
             
               $.ajax({

                type: "POST",
                url: "delete_all_results.php",
                data: {

                  id : ids,

                },

                success: function(response){

                           $('#msg').addClass("alert-danger");
                           $('#msg').html("Deleted succesfully");
                           $('#data').html(response);                   
                }
                
               });


             });

          }

 
  });
  $(document).on('click', '.x', function(){
     $('.question').slideUp();
  });