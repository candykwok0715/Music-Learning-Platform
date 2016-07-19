<?php     require('../../EnsureLogined.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pre-exam 1(Question)</title>
 
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
  
 <style type="text/css">
      html, body {
        height: 100%;
      }
      .container {
        width: auto;
        max-width: 680px;
      }
	  body {
		  font-family: georgia, serif;;
          font-size: 20px;
          line-height: 1.3;
	  }
    </style>

  </head>

  <body>
    <?php
	// ensure users enter the showGame.php to this page
	if(!isset($_POST['start']))
		echo '<script> window.location="../showGame.php";</script>';
	?>
    <div id="wrap">
      <div class="container">
        <div class="page-header">
          <h2> Choose the correct answer!! </h2>
        </div> 	
        <p class="lead">
        <form action="CheckMultiplechoice.php" method="post">
        <?php 
           require('../../Connect.php');
           $sql="SELECT * FROM mc";
           $result = mysql_query($sql,$conn)or die("SQL Error 1: " . mysql_error()); //select the date
		   srand((double) microtime() * 1000000); 
		   $questions = array();
		   $NoOfQuestion = 5;
		   for($i=0; $i<$NoOfQuestion; $i++){
		   	  $tmp = rand(1,mysql_num_rows($result));
		      for($i=0 ;$i< count($questions); $i++){
         	     if($questions[$i] == $tmp){
         		    $tmp = -1;
		   			break;
		   		 }
         	  }
	          if($tmp != -1)
       	         $questions[] = $tmp; 
              else $i--;
           }		   
//   		   for ($i=0;$i<count($questions);$i++)
//		      echo $questions[$i]."<br />";
		   $questions_string = implode(",", $questions); // array to string use , to Split

           $time = 10;  //set time
           require('timer.php'); // call timer
		   
		   for ($i=0;$i<count($questions);$i++){
           $sql="SELECT * FROM mc WHERE QNo=$questions[$i]";
           $result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
           $row = mysql_fetch_assoc($result);
	    ?>
              <input type="hidden" name="No<?php echo $i+1;?>" value="<?php echo $row["QNo"];?>"/><br/>
              <p><?php echo $i+1 .".&nbsp;" . $row["Question"];?></p>
              <audio controls id="music"><source src="MC_Music/<?php echo $row["VideoName"];?>" type="audio/mp3"/></audio><br/>
              <input type="radio" name="ans<?php echo $i+1;?>" value="A" /><?php echo $row["ChoiceA"];?><br />
              <input type="radio" name="ans<?php echo $i+1;?>" value="B" /><?php echo $row["ChoiceB"];?><br />
              <input type="radio" name="ans<?php echo $i+1;?>" value="C" /><?php echo $row["ChoiceC"];?><br />
              <input type="radio" name="ans<?php echo $i+1;?>" value="D" /><?php echo $row["ChoiceD"];?><br />
        <?php } ?>
        <br /><button class="btn btn-primary" type="submit" name="submit">Submit your ans</button>
        </form>
        </p>
        </div>
<?php mysql_close($conn);?>
</body>
</html>