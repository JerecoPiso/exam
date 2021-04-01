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
  