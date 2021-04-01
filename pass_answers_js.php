<script type="text/javascript">
	
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;

            var answers = new Array();
              var ques_id = new Array();
              var name = $('#name').val();
              var sub = $('#sub').val();
               var grasec = $('#grasec').val();
              var num = <?php echo $number;?>;
              
             //get the value of each input with type radio 
	          $.each($("input[type='radio']:checked"), function(){            
	               answers.push($(this).val());
	               
	          });
	          //get the value of each input type with class examineer
	          $.each($(".examineer_answer"), function(){
	            ques_id.push($(this).val());

	          });
	            
              
                var myanswers = JSON.stringify(answers );

    		   if(answers.length == 0){

                 alert("You cannot submit without any answers!");

              }else{

                //remove each element in the array with a null value
				var id_of_questions = ques_id.filter(function (el) {

					return el != null && el != "";

				});

  
        
         	    var ids = JSON.stringify(id_of_questions );

		            $.ajax({

		              type: "POST",
		              url: "submit_answer.php",
		              data:{
		                  stud_name: name,
		                  subject: sub,
		                  answers: myanswers,
                      grasec: grasec,
		                  ids: ids,

		              },

		                 success:function(response){
             
	                	  $('#response').html("Oout of time! Your score "+name+" is "+response);
	                 	  $('#score').fadeIn(2000);

                  
                }

          });

 		}

        }

    }, 1000);
}

  window.onload = function () {
      var oneHour = 60 * 60,
          display = document.querySelector('#time');
      startTimer(oneHour, display);
  };

     $(document).on('click', '#btn', function(){

              var answers = new Array();
              var ques_id = new Array();
              var name = $('#name').val();
              var sub = $('#sub').val();
               var grasec = $('#grasec').val();
              var num = <?php echo $number;?>;

             //get the value of each input with type radio 
	          $.each($("input[type='radio']:checked"), function(){            
	               answers.push($(this).val());
	               
	          });
	          //get the value of each input type with class examineer
	          $.each($(".examineer_answer"), function(){
	            ques_id.push($(this).val());

	          });
	            
              
                var myanswers = JSON.stringify(answers );

    		   if(answers.length == 0){

                 alert("You cannot submit without any answers!");

              }else{

                //remove each element in the array with a null value
				var id_of_questions = ques_id.filter(function (el) {

					return el != null && el != "";

				});

  
        
         	    var ids = JSON.stringify(id_of_questions );

		            $.ajax({

		              type: "POST",
		              url: "submit_answer.php",
		              data:{
		                  stud_name: name,
		                  subject: sub,
                      grasec: grasec,
		                  answers: myanswers,
		                  ids: ids,

		              },

		                 success:function(response){
             
                	     $('#response').html("Your score "+name+" is "+response);
                        $('#score').modal('show');

                  
                }

          });

 		}
     });
          

</script>