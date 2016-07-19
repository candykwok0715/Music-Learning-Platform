<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
     if ($_SESSION['type'] == "admin")
        echo '<script>window.location="AdminHome.php";</script>';
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
?>
<?php
	extract($_POST);
//	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
	if (!isset($_POST['submit']))   //ensure submit the form 
		echo '<script>window.location="ChangeEmail.php";</script>';
		else if($_POST['NewEmail']==""){
				echo '<script>window.alert("Please enter the New Email Address.");</script>';
				echo '<script> window.location="ChangeEmail.php";</script>';
			}
			else{	
			require('Connect.php');
			$sql="UPDATE student SET Email ='".$_POST['NewEmail']."' WHERE StudentNo = '".$_POST['StudentNo']."'";
//			echo $sql;
			mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
			echo '<script>window.alert("Change Email successful!");</script>';			
			echo '<script> window.location="StudentHome.php";</script>';
	}
?>