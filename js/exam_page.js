$(document).on('click', '#takenExam', function(){
      var section = $(this).val();

      if(section === ""){
        alert("empty");

      }else{
        $.ajax({
           
           type: "POST",
           url: "taken_exam.php",
           data:{
              section: section
           },
             success:function(response){
              var data = JSON.parse(response)
              for (var i = 0; i < data.name.length; i++) {
              $('.take').append("<li class='list-group-item' style='border: 1px solid dodgerblue;'>"+ (i+1)+") "+data.name[i]+"<span style='float:right;margin-right: 4%;'>"+data.score[i]+"</span></li>");
               
                $('#classmates').modal('show');
              }
             }
        });
      }
});
//remove all appended li in the above code
$(document).on('click', '.close', function(){
       $('.take > .list-group-item').remove();
});