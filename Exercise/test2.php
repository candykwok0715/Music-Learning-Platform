<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
   
   <style type="text/css">
   .please { color:#F00;}
   </style>


</head>
<body>
<button id="ExerciseForm1" class="btn btn-info">Read piece</button>
<div id="dialog_ExerciseForm1"><img  src="ExerciseMaterial/51_form.jpeg" width="1000" height="500"></div>

<button id="ExerciseForm2">Read piece</button>
<div id="dialog_ExerciseForm2"><img  src="ExerciseMaterial/56_form.jpeg" width="1000" height="500"></div>

<button id="ExerciseForm3">Play piece</button>
<div id="dialog_ExerciseForm3">
   <audio controls id="music"><source src="ExerciseMaterial/64_form_music.mp3" type="audio/mp3"/></audio>
   <p class="please">Please stop the music before you close the Dialog box.</p>
</div>

 <button id="ExerciseForm4">Play piece</button>
<div id="dialog_ExerciseForm4">
   <audio controls id="music"><source src="ExerciseMaterial/60_form_music.mp3" type="audio/mp3"/></audio>
   <p class="please">Please stop the music before you close the Dialog box.</p>
</div>
 
 
<script>
$( "#dialog_ExerciseForm1" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 1",
	close: function(event, ui) {
		$.each($('audio'), function () {
    		this.stop();
}); } });
$( "#ExerciseForm1" ).click(function() {
  $( "#dialog_ExerciseForm1" ).dialog( "open" );
});

$( "#dialog_ExerciseForm2" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 2" ,
	close: function(event, ui) {
		$.each($('audio'), function () {
    		this.pause();
}); } });
$( "#ExerciseForm2" ).click(function() {
  $( "#dialog_ExerciseForm2" ).dialog( "open" );
});

$( "#dialog_ExerciseForm3" ).dialog({ autoOpen: false, height:180, width: 350, title:"Exercise 3"  ,
	close: function(event, ui) {
		$.each($('audio'), function () {
    		this.pause();
}); } });
$( "#ExerciseForm3" ).click(function() {
  $( "#dialog_ExerciseForm3" ).dialog( "open" );
});

$( "#dialog_ExerciseForm4" ).dialog({ autoOpen: false, height:180, width: 350, title:"Exercise 4"  ,
	 });
$( "#ExerciseForm4" ).click(function() {
  $( "#dialog_ExerciseForm4" ).dialog( "open" );
});

</script>
 
</body>
</html>