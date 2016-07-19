<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
?>
<?php 
	extract($_POST);
	
//  	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
   if (!isset($_POST['submit']))   //ensure submit the form 
      echo '<script>window.location="CreateSchoolAccount.php";</script>';

	if($_POST['SchoolName']==""){
      echo '<script>window.alert("Please enter the School Name. ");</script>';
	  echo '<script> window.location="CreateSchoolAccount.php";</script>';
	}
	else{
	require('Connect.php');
    $sql="INSERT INTO pianoschool (SchoolNo,Password,SchoolName) VALUES ('".$_POST['NextSchoolNo']."', '".$_POST['NextSchoolNo']."', '".$_POST['SchoolName']."')";
//	echo $sql;
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
    echo '<script> window.location="AdminHome.php";</script>';		
	}
?>