$(document).on('click', '#add-sec', function(){
    var grade_section = $('#section').val();
    if(grade_section === ""){
    	alert("Empty");
    }else{

    	$.ajax({
           
           type: "POST",
           url: "add_grade_sec.php",
           data: {

           		grade_section: grade_section
           },
  
           success:function(response){
            	$('#section').val('');
      		    $('#data').html(response)
      		    $('#alert').removeClass("alert-danger");
      		    $('#alert').addClass("alert-info")
      		    $('#alert').html("Added succesfully.");
      		    $('#alert').fadeIn();
           }

    	});
    }
});

$(document).on('click', '#grasec_del', function(){
	var id = $(this).val();
	$('#delete_grade_sec').val(id);
	$('#del_grasec').modal('show');

});
$(document).on('click', '#delete_grade_sec', function(){
   var id = $(this).val();
   $('#del_grasec').modal("hide");
   $.ajax({
       
       type: "POST",
       url: "delete_grade_section.php",
       data:{
       	 id: id
       },
       success:function(response){
	        $('#data').html(response)
	        $('#alert').removeClass("alert-info");
	        $('#alert').addClass("alert-danger");
	        $('#alert').html("Deleted succesfully.");
	        $('#alert').fadeIn();
       }

   });
});
$(document).on('click', '#grasec_up', function(){
		var id = $(this).val();
		$('#update_grade_section').val(id);
		$('#grasec').val($('#name'+id).val())
		$('#update_grasec').modal('show');

});
$(document).on('click', '#update_grade_section', function(){
   var id = $(this).val();
   var grade_section = $('#grasec').val();
   $('#update_grasec').modal("hide");
   $.ajax({
       
       type: "POST",
       url: "update_grade_section.php",
       data:{
       	 id: id,
       	 grasec: grade_section
       },
       success:function(response){
	         $('#data').html(response)
	         $('#alert').removeClass("alert-danger");
	         $('#alert').addClass("alert-info")
	         $('#alert').html("Updated succesfully.");
	      	 $('#alert').fadeIn();
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
                url: "delete_multiple_grasec.php",
                data: {

                  id : ids,

                },

                success: function(response){

                          $('#alert').addClass("alert-danger");
                          $('#alert').html("Deleted succesfully");
                          $('#data').html(response);
                          $('#check-all').prop("checked", false);
                           $('.check-all').show();
                          $('#uncheck-all').prop("checked", false);
                           $('.uncheck-all').hide();
       
                        
                }

               });
           });
        }
    });// delete all

