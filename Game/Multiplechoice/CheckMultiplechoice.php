<?php session_start(); 
//	foreach($_SESSION as $key => $value)
//		echo "SESSION['" . $key . "']  ---> $value <br />" ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pre-exam 1(Answer)</title>
 
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
	  .page-header{
		  color:#F00;
	  }
	  .hero-unit {
		  padding: 30px;
		  text-align:center;
		  font-size:25px;
		  background-color:#FFF;
		  color:#C0C;
	  }
	  .Choose{
		color: #03F;  
	  }
	  .Ans{
         color:#F00;
		 text-align:right;
	  }
    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
    $( function(){
       $( "#Home" ).click(function() {
 	       window.location="../../StudentHome.php";
       });
	});
	</script>

  </head>

<body>
<?php 
	extract($_POST);
//	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
	if(!isset($_POST['submit'])){
		if(!isset($_GET['questions']) or $_GET['questions']==""){
			echo '<script>window.location="../showGame.php";</script>';
			break;
		}
		$j=0;
		$questions_string = $_GET['questions'];
		for($i=0;$i<strlen($questions_string);$i++){
			if ($questions_string[$i]==",")
				$j++;
			else{
				if (!isset($Q[$j])){
					$Q[$j]=$questions_string[$i];
				}
				else {
					$Q[$j]=$Q[$j].$questions_string[$i];
				}
			}
		}
//  	for ($i=0;$i<count($Q);$i++)
//			echo $Q[$i]."<br />";
		$score =0;
	}
	else{
		require_once('../../Connect.php');
		$score =0;
		for ($i=0;$i<5;$i++){
			$n =$i+1;
			$NameOfQNo="No$n";
			$sql='SELECT * FROM mc WHERE QNo='.$_POST["$NameOfQNo"];
			$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
    		$row = mysql_fetch_assoc($result);
			if(!isset($_POST["ans$n"]))
				$_POST["ans$n"]="Null Ans";  //have submit botten but user don't choose ans
			if ($_POST["ans$n"] == $row["Ans"])
				$score = $score+1;
		}
	}
	require_once('../../Connect.php');
	$sql="UPDATE score SET PreExam1='".$score."' WHERE StudentNo='".$_SESSION["AccountID"]."'";
//	echo $sql;
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	
	?>
    <div id="wrap">
      <div class="container">
        <div class="page-header">
          <h2> See Answer </h2>
        </div> 	
        <div class="hero-unit">
        	The Result of this Pre-Exam is <?php echo $score;?>.(Full mark is 5)
		</div>
        <p class="lead">
           <p class="Choose" align="right">*blue is your choice</p>
<?php
	for ($i=0;$i<5;$i++){
		$n =$i+1;
		$NameOfQNo="No$n";
		if(!isset($_POST['submit'])){  //time up
			$_POST["$NameOfQNo"]=$Q[$i];
			$_POST["ans$n"]="Null Ans";
		}
		$sql='SELECT * FROM mc WHERE QNo='.$_POST["$NameOfQNo"];
		$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
    	$row = mysql_fetch_assoc($result);	

//	echo $row["QNo"]."<br />";
//	echo $row["Question"]."<br />";
//	echo $row["VideoName"]."<br />";
//	echo $row["ChoiceA"]."<br />";
//	echo $row["ChoiceB"]."<br />";
//	echo $row["ChoiceC"]."<br />";
//	echo $row["ChoiceD"]."<br />";
//	echo $row["Ans"]."<br />";
?>
	<table width="700" >
       <tr>
       		<td><?php echo $n;?>.</td>
            <td><?php echo $row["Question"];?></td>
       </tr>
       <tr>
       		<td>&nbsp;</td>
            <td><audio controls id="music"><source src="MC_Music/<?php echo $row["VideoName"];?>" type="audio/mp3"/></audio></td>
       </tr>
       <tr>
       		<td>&nbsp;</td>
            <td<?php if ($_POST["ans$n"]=="A" ) echo ' class="Choose"';?>><?php echo $row["ChoiceA"];?></td>
       </tr>
       <tr>
       		<td>&nbsp;</td>
            <td<?php if ($_POST["ans$n"]=="B") echo ' class="Choose"';?>><?php echo $row["ChoiceB"];?></td>
       </tr>
       <tr>
       		<td>&nbsp;</td>
            <td<?php if ($_POST["ans$n"]=="C") echo ' class="Choose"';?>><?php echo $row["ChoiceC"];?></td>
       </tr>
       <tr>
       		<td>&nbsp;</td>
            <td<?php if ($_POST["ans$n"]=="D") echo ' class="Choose"';?>><?php echo $row["ChoiceD"];?></td>
            <td class="Ans">Answer: <?php echo $row["Ans"];?></td>
       </tr>
       <tr>
       </tr>
    </table>
    <br />
<?php }  ?>
        <p align="center"><button id="Home" class="btn btn-large btn-block btn-primary" type="button">Go to Home Page</button></p>
        </p>
        </div>
        
<?php mysql_close($conn);?>
</body>
</html>