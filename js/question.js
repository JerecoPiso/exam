$(document).on('click', '#add_ques', function () {
           
           var question = $('#question').val();
           var ans1 = $('#ans1').val();
           var ans2 = $('#ans2').val();
           var ans3 = $('#ans3').val();
           var ans4 = $('#ans4').val();
           var grasec = $('#gradeSection').val();
           var correct_answer = $('#correct_answer').val();
           var subject = $('#subject').val();                     
                     if (question === "") {

                            alert("Question must not be empty!");

                     }else if(ans1 === ""){

                            alert("Answer1 must not be empty!");


                     }else if(ans2 === ""){

                            alert("Answer2 must not be empty!");

                     }else if (ans3 === "") {

                            alert("Answer3 must not be empty!");

                     }else if(ans4 === ""){

                            alert("Answer4 must not be empty!");

                     }else if(correct_answer === ""){

                            alert("Correct answer must not be empty!");

                     }else if( correct_answer < 1 || correct_answer >4){

                            alert("Please enter only between 1-4!");


                     }else{

                            
                   $.ajax({
                                
                                type: "POST",
                                url: "add_question.php",
                                data: {
                                    question: question,
                                    answer1: ans1,
                                    answer2: ans2,
                                    answer3: ans3,
                                    answer4: ans4,
                                    grasec: grasec,
                                    correct_answer: correct_answer,
                                    subject: subject,
                                },

                                success:function(response){


                               

                                    $('#alert').html("Question added succesfully");
                                      $('#alert').show();
                                        $('#table').html(response);


                                    $('#question').val('');
                                    $('#ans1').val('');
                                    $('#ans2').val('');
                                    $('#ans3').val('');
                                    $('#ans4').val('');
                                    $('#correct_answer').val('');
                                    $('#subject').val('');
                                      
                                }

                   });

                      }

         });
