<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
	extract($_POST);
//	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
	if(isset($_POST['ResetPassword'])){
		require('Connect.php');
		$sql="UPDATE pianoschool SET  Password='".$_POST['SchoolNo']."' WHERE SchoolNo ='".$_POST['SchoolNo']."'";
//		echo $sql;
		mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());	
		echo '<script>window.alert("Reset password successful.");</script>';
		echo '<script> window.location="AdminHome.php";</script>';	
			
	} else 	if(isset($_POST['submit'])){
				if($_POST['SchoolName']==""){
					echo '<script>window.alert("Please enter the New School Name. ");</script>';
					echo '<script> window.location="EditSchoolAccount.php?SchoolNo='.$_POST['SchoolNo'].'";</script>';		
				}
				else {
					require('Connect.php');
					$sql="UPDATE pianoschool SET SchoolName='".$_POST['SchoolName']."' WHERE SchoolNo ='".$_POST['SchoolNo']."'";
//					echo $sql;
					mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());	
					echo '<script>window.alert("Update successful.");</script>';
					echo '<script> window.location="AdminHome.php";</script>';						
				}
			}
?>