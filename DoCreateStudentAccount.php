<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
?>
<?php
	extract($_POST);
//  	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
    if (!isset($_POST['submit']))   //ensure submit the form 
      echo '<script>window.location="CreateStudentAccount.php";</script>';
	if($_POST['Name']==""||$_POST['Birthday']==""||$_POST['Email']==""){
	   echo '<script>window.alert("Please enter the Name, Birthday and Email. ");</script>';
	   echo '<script> window.location="CreateStudentAccount.php";</script>';
	}
	else{
	require('Connect.php');
    $sql="INSERT INTO student (StudentNo,Password,Name,SchoolNo,Birthday,Email) VALUES ('".$_POST['NextStudentNo']."', '".$_POST['NextStudentNo']."', '".$_POST['Name']."', '".$_POST['SchoolNo']."', '".$_POST['Birthday']."', '".$_POST['Email']."')";
//	echo $sql;
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	$sql="INSERT INTO score (StudentNo,PreExam1,PreExam2) VALUES ('".$_POST['NextStudentNo']."', NULL, NULL);";	
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
    echo '<script> window.location="AdminHome.php";</script>';
	}
?>