 //delete subject
  $(document).on('click', '#del', function(){
      
       var id = $(this).val();
       $('#del_question').modal('show');
 
       $('#delete').val(id);

  });


  $(document).on('click', '#delete', function(){
     
     var id = $(this).val();
     
     $('#del_question').modal('hide');

     $.ajax({
          
          type: "POST",
          url: "delete_question.php",
          data: {
              id: id, 

          },

           success:function(response){
                    
                       $('#msg').addClass("alert-danger");
                       $('#msg').html("Deleted succesfully");
                       $('#data').html(response);
                       $('#msg').show();
                    
                  }
     


     });


  });



  //update subject
  $(document).on('click', '#edit_ques', function(){
      
       var id = $(this).val();
       var question = $('#ques'+id).val();
       var ans1 = $('#answer1'+id).val();
       var ans2 = $('#answer2'+id).val();
       var ans3 = $('#answer3'+id).val();
       var ans4 = $('#answer4'+id).val();
       var correct_answer = $('#cor_ans'+id).val();
       var subject = $('#sub'+id).val();                     
       $('#question').val(question);
       $('#ans1').val(ans1);
	   $('#ans2').val(ans2);
	   $('#ans3').val(ans3);
	   $('#ans4').val(ans4);
	   $('#correct_answer').val(correct_answer);
	   $('#subject').val(subject);
       $('#up_question').modal('show');  
    
       $('#update').val(id);

  });


  $(document).on('click', '#update', function(){
     
     var id = $(this).val();
       var question = $('#question').val();
       var ans1 = $('#ans1').val();
       var ans2 = $('#ans2').val();
       var ans3 = $('#ans3').val();
       var ans4 = $('#ans4').val();
       var correct_answer = $('#correct_answer').val();
       var subject = $('#subject').val();                     
      $('#up_question').modal('hide');

     $.ajax({
          
          type: "POST",
          url: "update_question.php",
          data: {
               id: id, 
               question: question,
               answer1: ans1,
               answer2: ans2,
               answer3: ans3,
               answer4: ans4,
               correct_answer: correct_answer,
               subject: subject,

          },

          
           success:function(resp){
                    
                       $('#msg').addClass("alert-info");
                       $('#msg').html("Updated succesfully");
                       $('#msg').show();
                       $('#data').html(resp);
                    
                  }
     

     });


  });



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
                url: "delete_multiple_questions.php",
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

 
  });

$(document).ready(function(){
  $(".fa-bars").click(function(){

    $(".navbar-nav").slideToggle();
  });

  $(".x").click(function(){

    $(".question").slideUp();
  });

   $('#check-all').click(function(){
    
       $("input[type='checkbox'").prop("checked", true);
 
  });

  

});
  






 
