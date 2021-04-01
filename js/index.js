
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});



$(document).on('click', '#signup', function(){

   var letters = /^[a-zA-Z ]+$/;
   var name = $('#name').val();
   var pass = $('#pass').val();
   var grade_section = $('#grade_section').val();
   var adviser = $('#adviser').val();


   if (name === "") {
        
        $('#alert').addClass("alert-danger");
        $('#alert').html("Name should not be empty!");
        $('#alert').show();


   }else if (!name.match(letters)) {

    $('#alert').addClass("alert-danger");
        $('#alert').html("Name should contain letters only!");
        $('#alert').show();


   }else if (pass.length <= 5) {

    $('#alert').addClass("alert-danger");
        $('#alert').html("Password should conatin at least 6 characters!");
        $('#alert').show();

   }else{
     

         $.ajax({
             type: "POST",
             url: "examinee_reg.php",
             data: {
              name: name,
              password: pass,
              grade_section : grade_section,
              adviser: adviser,


             },


             success:function(response){
             	$('#name').val('');
             	$('#pass').val('');
               $('#alert').addClass("alert-info");
               $('#alert').html(response);
               $('#alert').show();

             }

         });



   }
 
 

});


 