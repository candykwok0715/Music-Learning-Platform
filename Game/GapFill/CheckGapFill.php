<?php session_start(); 
//	foreach($_SESSION as $key => $value)
//		echo "SESSION['" . $key . "']  ---> $value <br />" ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pre-exam 2(Answer)</title>
 
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
//		echo $Q[$i]."<br />";
		$score =0;
	}
	else{
		require_once('../../Connect.php');
		$score =0;
		for ($i=0;$i<5;$i++){
			$n =$i+1;
			$NameOfQNo="No$n";
			$sql='SELECT * FROM gapfill WHERE QNo='.$_POST["$NameOfQNo"];
			$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
    		$row = mysql_fetch_assoc($result);
			if(!isset($_POST["ans$n"]))
				$_POST["ans$n"]="Null Ans";  //have submit botten but user don't choose ans
			if ($_POST["ans$n"] == $row["Ans"])
				$score = $score+1;
		}
	}
	require_once('../../Connect.php');
	$sql="UPDATE score SET PreExam2='".$score."' WHERE StudentNo='".$_SESSION["AccountID"]."'";
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
           <p class="Choose" align="right">*the text area is your answer</p><br />
<?php
	for ($i=0;$i<5;$i++){
		$n =$i+1;
		$NameOfQNo="No$n";
		if(!isset($_POST['submit'])){  //time up
			$_POST["$NameOfQNo"]=$Q[$i];
			$_POST["ans$n"]="Null Ans";
		}
		$sql='SELECT * FROM gapfill WHERE QNo='.$_POST["$NameOfQNo"];
//		echo $sql;
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
       		<td><?php echo $n;?>. &nbsp; <?php echo $row["Question"];?></td>
       </tr>
       <tr>
            <td><img src="GF_Picture/<?php echo $row["PictureName"]; ?>"></td>
       </tr>
       <tr>
            <td><?php echo $row["Qhead"]; ?><input type="text" placeholder="<?php if ($_POST["ans$n"]!="Null Ans") echo $_POST["ans$n"]; ?>" disabled /><?php echo $row["Qtail"];?></td>
       </tr>
       <tr>
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