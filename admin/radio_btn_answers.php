                                       	   <script type="text/javascript">
                                       	   		
												$(document).ready(function(){

													     $('.ans1'+<?php echo $fetch['id'];?>).click(function(){
													     
													        $('.ans1'+<?php echo $fetch["id"];?>).prop("checked", true);
													        $('.ans2'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans3'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans4'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.answer'+<?php echo $fetch["id"];?>).val(<?php echo $fetch['id'];?>);


													    });
													   
													});
													$(document).ready(function(){

													     $('.ans2'+<?php echo $fetch['id'];?>).click(function(){
													     
													        $('.ans2'+<?php echo $fetch["id"];?>).prop("checked", true);
													        $('.ans1'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans3'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans4'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.answer'+<?php echo $fetch["id"];?>).val(<?php echo $fetch['id'];?>);

													    });
													   
												});
													

												$(document).ready(function(){

													     $('.ans3'+<?php echo $fetch['id'];?>).click(function(){
													     
													        $('.ans3'+<?php echo $fetch["id"];?>).prop("checked", true);
													        $('.ans1'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans2'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans4'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.answer'+<?php echo $fetch["id"];?>).val(<?php echo $fetch['id'];?>);


													    });
													   
												});
														

												$(document).ready(function(){

													     $('.ans4'+<?php echo $fetch['id'];?>).click(function(){
													     
													        $('.ans4'+<?php echo $fetch["id"];?>).prop("checked", true);
													        $('.ans1'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans3'+<?php echo $fetch["id"];?>).prop("checked", false)
													        $('.ans2'+<?php echo $fetch["id"];?>).prop("checked", false)
													         $('.answer'+<?php echo $fetch["id"];?>).val(<?php echo $fetch['id'];?>);

													    });
													   
												});
														

                                       	   </script>
                                       	 