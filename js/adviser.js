$(document).ready(function(){

  $(".x").click(function(){

    $(".adviser-dashboard").slideUp();
  });

  $('#add-adviser').click(function(){
   
      $('.form').slideToggle();

  });

});
 
//add advisers
$(document).on('click', '#add-adviser-btn', function(){
    
     var name = $('#name').val();
     var section = $('#section').val();
     var subject = $('#m_subject').val();
     
     if(name === ""){

     		alert("Name should not be empty!");

     }else{

     	$.ajax({
       
       type: "POST",
       url: "add_adviser.php",
       data: {
          name: name,
          section: section,
          subject: subject,
       },

       success: function(response){
       	    $('.form').slideToggle();
            $('#name').val('');
       	  	$('#data').html(response);
       	  	$('#alert').addClass('alert alert-info')
       	  	$('#alert').text("Added succesfully");
        },

      });




     }
     
});
//delete adviser
$(document).on('click', '#adviser_del', function(){
    
     var id = $(this).val();
  
     $('#del_adviser').modal('show');
     $('#delete_adviser').val(id);

});


$(document).on('click', '#delete_adviser', function(){
    
     var id = $(this).val();
     $('#del_adviser').modal('hide');


     $.ajax({
       
       type: "POST",
       url: "delete_adviser.php",
       data: {
           id: id,
       },

        success: function(response){
		   
       	  	$('#data').html(response);
       	  	$('#alert').addClass('alert alert-danger')
       	  	$('#alert').text("Deleted succesfully");
        }
     });

    

});

//edit adviser
$(document).on('click', '#adviser_up', function(){
    
     var id = $(this).val();
     $('#adviser_name').val($('#name'+id).val());
     $('#adviser_section').val($('#sec'+id).val());
     $('#adviser_subject').val($('#sub'+id).val());
     $('#update_advi').modal('show');
     $('#update_adviser').val(id);

});

//update adviser
$(document).on('click', '#update_adviser', function(){
    
     var id = $(this).val();
     var name = $('#adviser_name').val();
     var section = $('#adviser_section').val();
     var subject = $('#adviser_subject').val();
     $('#update_advi').modal('hide');


     $.ajax({
       
       type: "POST",
       url: "update_adviser.php",
       data: {
           id: id,
           name: name,
           section: section,
           subject: subject,
       },

        success: function(response){

        	
       	  	$('#data').html(response);
       	  	$('#alert').addClass('alert alert-info')
       	  	$('#alert').text("Updated succesfully");

        }
     });

    

});


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

             $('#delete-all').click(function(){

               var ids = JSON.stringify(records);
           

               $.ajax({

                type: "POST",
                url: "delete_multiple_adviser.php",
                data: {

                  id : ids,

                },

                success: function(response){

                           $('#alert').addClass("alert-danger");
                           $('#alert').html("Deleted succesfully");
                           $('#data').html(response);
                          $('#check-all').prop("checked", false);
       
                        
                }

               });
           });
        }
    });// delete all

