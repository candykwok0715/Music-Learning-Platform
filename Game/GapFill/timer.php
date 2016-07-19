<script src="http://code.jquery.com/jquery-latest.js"></script>
         <script>
            $(function() {
                var timer =<?php echo $time;?>; 
                function startTimer(){
                    myVar=setInterval(function(){
                        timer--;
                        $("#time").html(timer);
                        if(timer == 0){
	                        clearInterval(myVar);
							window.location="CheckGapFill.php?questions=<?php echo $questions_string;?>";
        	            }                       
                    },1000);
                }
				
                startTimer();
            });
</script>

<div id="Timer">
    <strong style="color:#F00 ">Time:</strong>
    <strong id="time" style="color:#F00"><?php echo $time?></strong>
</div>
            
