<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
	extract($_POST);
// 	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
	if (!isset($_POST['submit']))   //ensure submit the form 
		echo '<script>window.location="ChangePassword.php";</script>';
	if($_POST['CurrentPassword']==""||$_POST['NewPassword']==""||$_POST['NewPasswordAgain']==""){
		echo '<script>window.alert("Please enter the Current Password, New Password and New Password Again. ");</script>';
		echo '<script> window.location="ChangePassword.php";</script>';
	}
	if ($_POST['type'] == "admin")
		$col = "AdminNo";
	if ($_POST['type'] == "pianoschool")
		$col = "SchoolNo";
	if ($_POST['type'] == "student")
		$col = "StudentNo";
		
	require('Connect.php');
	$sql="SELECT * FROM " .$_POST['type']. " WHERE $col='".$_POST['AccountID']."'";
//	echo $sql;
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	$row = mysql_fetch_assoc($result);
//	echo $row['Password']."<br />";
//	echo  $_POST['CurrentPassword']."<br />";
	if($_POST['NewPassword']!=$_POST['NewPasswordAgain']){
		echo '<script>window.alert("The new Password is not match th New Password Again!");</script>';
		echo '<script> window.location="ChangePassword.php";</script>';
		break;		
	}
	if($row['Password'] != $_POST['CurrentPassword']){
		echo '<script>window.alert("The Password is not match the current password!");</script>';
		echo '<script> window.location="ChangePassword.php";</script>';
		break;
	}
	$sql="UPDATE ".$_POST['type']." SET Password ='".$_POST['NewPassword']."' WHERE $col = '".$_POST['AccountID']."'";
//	echo $sql;
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	echo '<script>window.alert("Change Password successful!");</script>';
	if ($_POST['type'] == "admin")
		echo '<script> window.location="AdminHome.php";</script>';
	if ($_POST['type'] == "pianoschool")
		echo '<script> window.location="PianoSchoolHome.php";</script>';
	if ($_POST['type'] == "student")
		echo '<script> window.location="StudentHome.php";</script>';
	
?>