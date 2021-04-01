$(".fa-bars").click(function(){

    $(".navbar").slideToggle();
  });

 $('#check-all').click(function(){
      
         $("input[type='checkbox'").prop("checked", true);
          
 });

 $("input[type='checkbox']:checked").click(function(){


         $("input[type='checkbox'").prop("checked", false);
          
 });
 $('#check-all').click(function(){
     
         $("input[type='checkbox'").prop("checked", true);
         $('.uncheck-all').show();
           $(".check-all").hide();
           $("#uncheck-all").prop("checked", true);
           $("#check-all").prop("checked", true);

 });

  $('#uncheck-all').click(function(){
     
         $("input[type='checkbox'").prop("checked", false);
           $('.check-all').show();
           $(".uncheck-all").hide();
           $("#uncheck-all").prop("checked", true);
           $("#check-all").prop("checked", false);
         
 });

 $('.delete-all').tooltip({title: "Delete all records that has been checked", trigger: "hover"}); 
 $('#check-all').tooltip({title: "Check all the records to be deleted", trigger: "hover"}); 

  
 
  
