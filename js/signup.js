 $(document).on('click', '#sub', function(){

          var letters = /^[a-zA-Z ]+$/;
          var name = $('#uname').val();
          var pass1 = $('#pass1').val();
          var pass2 = $('#pass2').val();
          var hint = $('#hint').val();
          

          if(name.length <= 7){

          
            $('#alert').addClass("alert-danger");
            $('#alert').html("Name should contain 8 letters!");
            $('#alert').show();
      
          }else if(!name.match(letters)){
        
          	$('#alert').addClass("alert-danger");
            $('#alert').html("Name should contain letters only!");
            $('#alert').show();
      
          }else if(pass1.length <= 5){

          	$('#alert').addClass("alert-danger");
            $('#alert').html("Password must be at least 6 characters!");
            $('#alert').show();
      

          }else if(pass1 != pass2){
          
            $('#alert').addClass("alert-danger");
            $('#alert').html("Password didn't matched!");
            $('#alert').show();
      

          }else if(hint === ""){

			
			$('#alert').addClass("alert-danger");
            $('#alert').html("Hint should not be empty!");
            $('#alert').show();
      

          }else{
            

            $.ajax({
                     
                 type: "POST",
                 url: "register.php",
                  data: {
                   username: name,
                   password: pass1,
                   hint: hint,
  
                 },


                 success:function(response){


					$('#alert').addClass("alert-info");
		            $('#alert').html(response);
		            $('#alert').show();
      			    $('#uname').val('');
			        $('#pass1').val('');
			        $('#pass2').val('');
			        $('#hint').val('');
			          

                 	
                 }
                 

            });





          }


       });



   $(document).on('click', '#btn_hint', function(){
        
        var hint = $('#get_hint').val();

        if(hint === ""){

           alert("Enter hint");
        }else{

           $.ajax({
              
               type: "POST",
               url: "hint.php",
               data:{
                    hint: hint,
               },
               success: function(response){
                    
                    alert(response);
                    $('#get_hint').val('');



               }
              
 

           });


        }


   });
  