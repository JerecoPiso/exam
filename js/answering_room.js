
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
             // alert("done");
              var answers = new Array();
              var name = $('#name').val();
              var sub = $('#sub').val();
              var grasec = $('#grasec').val();
              var num = <?php echo $number;?>;
           
               $.each($("input[type='radio']:checked"), function(){            
                   answers.push($(this).val());
                   
               });


              // alert("My favourite sports are: "+ favorite.join(", "));
              var myJSONText = JSON.stringify(answers );
              if(answers.length <= 0 || answers.length != num){

                  alert("You're  not able to answer all the questions with the given time. Ask your teacher and ask permission to retake.");

              }else{


           
              $.ajax({

                type: "POST",
                url: "submit_answer.php",
                data:{
                    stud_name: name,
                    subject: sub,
                    answers: myJSONText,

                },
                 success:function(response){
                 //  alert(stud_name);
                  /// alert(response);
                  $('#response').html("Your score "+name+" is "+response);
                   $('#score').modal('show');


                  // window.location.href='logout_exam.php';
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
              var name = $('#name').val();
              var sub = $('#sub').val();
               var grasec = $('#grasec').val();
              var num = <?php echo $number;?>;
         
             $.each($("input[type='radio']:checked"), function(){            
                 answers.push($(this).val());
                 
            });


            // alert("My favourite sports are: "+ favorite.join(", "));
            var myJSONText = JSON.stringify(answers );
            if(answers.length <= 0 || answers.length != num){

                alert("You cannot submit without answering all the questions!");

            }else{


         
            $.ajax({

              type: "POST",
              url: "submit_answer.php",
              data:{
                  stud_name: name,
                  subject: sub,
                  answers: myJSONText,

              },
                 success:function(response){
                 //  alert(stud_name);
                  /// alert(response);
                  $('#response').html("Your score "+name+" is "+response);
                   $('#score').modal('show');


                  // window.location.href='logout_exam.php';
                 }




          });

         }
    });
          
