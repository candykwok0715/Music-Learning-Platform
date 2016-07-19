<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise -- Rhythm 節奏</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
   <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
   <script>
   $( function(){
    $( "#dialog_Exerciserhythm1" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 1" });
    $( "#Exerciserhythm1" ).click(function() {
       $( "#dialog_Exerciserhythm1" ).dialog( "open" );
    });

    $( "#dialog_Exerciserhythm2" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 2" });
    $( "#Exerciserhythm2" ).click(function() {
       $( "#dialog_Exerciserhythm2" ).dialog( "open" );
    });

    $( "#dialog_Exerciserhythm3" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 3" });
    $( "#Exerciserhythm3" ).click(function() {
       $( "#dialog_Exerciserhythm3" ).dialog( "open" );
    });

    $( "#dialog_Exerciserhythm4" ).dialog({ 
	   autoOpen: false, 
	   height:115, 
	   width: 350, 
	   title:"Exercise 4",
	   close: function(event, ui) {
          $.each($('audio'), function () {
    	     this.pause();
			 this.currentTime = 0;
		  }); 
	   }
	});
    $( "#Exerciserhythm4" ).click(function() {
       $( "#dialog_Exerciserhythm4" ).dialog( "open" );
    });
	});
</script>
   
   <style type="text/css">
      h1{ margin-top:41px;}
	  h3{ color: #1698DE; }
      
	  table td{
	     padding-top:0.5em;
		 padding-bottom:0.5em;
		 font-size:20px;
	  }
      .a{ 
         font-family: verdana, sans-serif;
         color: #F00;
         font-size: 20px;
		 border:1px solid #000;
		 text-align: center;
		 padding:10px;
      }
   </style>
</head>

<body>

<div id="wrap">
     <?php require('../Navbar.php'); ?>
     
       <div class="container">

        <div class="page-header">
           <h1>Rhythm 節奏</h1>
        </div>
        <p class="lead">        
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 1</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the rhythm.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/63_rhythm_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>This piece is a dance.What kind of dance?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Waltz'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exerciserhythm1" class="btn btn-danger">Read this musical staff </button>
                   <div id="dialog_Exerciserhythm1"><img  src="ExerciseMaterial/63_rhythm.jpeg" width="1000" height="500"></div> 
               </td>
            </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
          
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 2</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the rhythm.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/60_rhythm_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>The rhythm pattern in the lower part is changed <br/> in the middle section. What is it?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Syncopation'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exerciserhythm2" class="btn btn-danger">Read this musical staff </button>
                  <div id="dialog_Exerciserhythm2"><img  src="ExerciseMaterial/60_rhythm.jpg" width="1000" height="500"></div>
               </td>
           </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
        
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 3</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the rhythm.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/47_rhythm_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>Was the piece begin on the first beat,second beat  <br/> or thrid beat of the bar?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='The thrid beat'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exerciserhythm3" class="btn btn-danger">Read this musical staff </button>
                  <div id="dialog_Exerciserhythm3"><img  src="ExerciseMaterial/47_rhythm.jpg" width="1000" height="500"></div>
               </td>
           </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
        
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 4</h3></th></tr>
           <tr><td colspan="2">Reading carefully while you read this musical staff . And answer question about the rhythm.</td></tr>
           <tr><td colspan="2"><img  src="ExerciseMaterial/53_rhythm.jpeg" width="750" height="375"/></td></tr>
           <tr><td>This piece is a dance.What kind of dance?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Minuet'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exerciserhythm4" class="btn btn-danger" >Play this piece</button>
                   <div id="dialog_Exerciserhythm4">
                      <audio controls id="music"><source src="ExerciseMaterial/53_rhythm_music.mp3" type="audio/mp3"/></audio><br/><br/>
                   </div>
               </td>
           </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff"> 
        
        </p>
    </div>

</body>
</html>