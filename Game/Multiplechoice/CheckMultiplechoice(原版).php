<?php 
   extract($_POST);
   session_start();
   $AccountID=$_SESSION["AccountID"];
   $Mark = $_SESSION["score"];
   
   if(!isset($_POST['submit']) & !isset($_GET['v']) )   // ensure users enter the Multiplechoice.php to this page
      echo '<script> window.location="../showGame.php";</script>';
   
   if(isset($_GET['v'])){  //time up
		echo '<script type="text/javascript">window.alert("Time up!  Your Score is ' .$_SESSION["score"].'   GameOver !!");</script>';  
//	   $Mark = $_SESSION["score"];
	   require_once('../SaveScore/saveScore.php');
	   $_SESSION["score"]=0;
       echo '<script>window.location="../showGame.php";</script>';
	}
	
   $No=$_POST['No'];
	  
   if(!isset($_POST['ans']) ){  // user enter click submit button but noo ans
       echo '<script type="text/javascript">window.alert("Wrong Ans!!  Your Score is ' .$_SESSION["score"].'   GameOver !!");</script>';  
//	   $Mark = $_SESSION["score"];
	   require_once('../SaveScore/saveScore.php');
	   $_SESSION["score"]=0;
       echo '<script>window.location="../showGame.php";</script>';
   }
   else $ans=$_POST['ans'];

	require_once('../../Connect.php');
	$sql="SELECT * FROM mc WHERE QNo=$No";
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
	
	if (mysql_num_rows($result) == 0){
    echo "No rows found, nothing to print so am exiting";
    exit;
	}	
	$row = mysql_fetch_assoc($result);
    
   if($ans == $row["Ans"]){   //The ans is correct 
	   $_SESSION["score"]++;
	  echo '<script>window.location="Multiplechoice.php?vlaue=y";</script>';   
   }
   else {      //The ans is wrong
       echo '<script type="text/javascript">window.alert("Wrong Ans!!  Your Score is ' .$_SESSION["score"].'   GameOver !!");</script>';  
//	   $Mark = $_SESSION["score"];
	   require_once('../SaveScore/saveScore.php');
	   $_SESSION["score"]=0;
	   echo '<script>window.location="../showGame.php";</script>';
   }
	mysql_close($conn);
?>