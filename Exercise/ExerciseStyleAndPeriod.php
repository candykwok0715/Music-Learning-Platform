<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise -- Style and period 風格和時期</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
   <script>
  $( function(){
    $( "#dialog_Exercise1" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 1" });
    $( "#Exercise1" ).click(function() {
       $( "#dialog_Exercise1" ).dialog( "open" );
    });

    $( "#dialog_Exercise2" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 2" });
    $( "#Exercise2" ).click(function() {
       $( "#dialog_Exercise2" ).dialog( "open" );
    });
	
	$( "#dialog_Exercise3" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 3" });
    $( "#Exercise3" ).click(function() {
       $( "#dialog_Exercise3" ).dialog( "open" );
    });

    $( "#dialog_Exercise4" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 4" });
    $( "#Exercise4" ).click(function() {
       $( "#dialog_Exercise4" ).dialog( "open" );
    });

    $( "#dialog_Exercise5" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 5" });
    $( "#Exercise5" ).click(function() {
       $( "#dialog_Exercise5" ).dialog( "open" );
    });

    $( "#dialog_Exercise6" ).dialog({ autoOpen: false, height:570, width: 1070, title:"Exercise 6" });
    $( "#Exercise6" ).click(function() {
       $( "#dialog_Exercise6" ).dialog( "open" );
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
           <h1>Style and period 風格和時期</h1>
        </div>
        <p class="lead">        
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 1</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the period.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/57_StyleAndPeriod_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>What period is this piece?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Classical Period'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exercise1" class="btn btn-danger">Read this musical staff </button>
                   <div id="dialog_Exercise1"><img src="ExerciseMaterial/57_StyleAndPeriod.jpg" width="1000" height="500"></div> 
               </td>
            </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
          
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 2</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the period.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/48_StyleAndPeriod_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>What period is this piece?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Baroque Period'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exercise2" class="btn btn-danger">Read this musical staff </button>
                  <div id="dialog_Exercise2"><img src="ExerciseMaterial/48_StyleAndPeriod.jpg" width="1000" height="500"></div>
               </td>
           </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
        
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 3</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the period.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/62_StyleAndPeriod_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>What period is this piece?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Romantic Period'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exercise3" class="btn btn-danger">Read this musical staff </button>
                   <div id="dialog_Exercise3"><img src="ExerciseMaterial/62_StyleAndPeriod.jpg" width="1000" height="500"></div> 
               </td>
            </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
                
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 4</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the period.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/49_StyleAndPeriod_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>What period is this piece?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Baroque Period'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exercise4" class="btn btn-danger">Read this musical staff </button>
                   <div id="dialog_Exercise4"><img src="ExerciseMaterial/49_StyleAndPeriod.jpg" width="1000" height="500"></div> 
               </td>
            </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
    
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 5</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the period.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/66_StyleAndPeriod_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>What period is this piece?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Twentieth Century'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exercise5" class="btn btn-danger">Read this musical staff </button>
                   <div id="dialog_Exercise5"><img src="ExerciseMaterial/66_StyleAndPeriod.jpg" width="1000" height="500"></div> 
               </td>
            </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
        
        <table align="center" >
           <tr><th colspan="2"><h3>Exercise 6</h3></th></tr>
           <tr><td colspan="2">Listen carefully while you play this short piece. And answer question about the period.</td></tr>
           <tr><td><audio controls id="music"><source src="ExerciseMaterial/54_StyleAndPeriod_music.mp3" type="audio/mp3"/></audio></td></tr>
           <tr><td>What period is this piece?</td>
               <td>
               <div class="a">
               <span onmouseover="this.innerHTML='Classical Period'" onmouseout="this.innerHTML='Get Answer Here'">Get Answer Here</span>
               </div>
               </td>
           </tr>
           <tr><td></td>
               <td align="right"><button id="Exercise6" class="btn btn-danger">Read this musical staff </button>
                   <div id="dialog_Exercise6"><img src="ExerciseMaterial/54_StyleAndPeriod.jpg" width="1000" height="500"></div> 
               </td>
            </tr>
        </table>
        <hr size="5" align="center" noshade width="100%" color="0000ff">
                        
        </p>
    </div>
    

</body>
</html>