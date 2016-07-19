<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
	extract($_POST);
//	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
	if(isset($_POST['ResetPassword'])){
		require('Connect.php');
		$sql="UPDATE student SET  Password='".$_POST['StudentNo']."' WHERE StudentNo ='".$_POST['StudentNo']."'";
//		echo $sql;
		mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());	
		echo '<script>window.alert("Reset password successful.");</script>';
		if ($_SESSION['type'] == "admin")
			echo '<script> window.location="AdminHome.php";</script>';	
		else echo '<script>window.location="PianoSchoolHome.php";</script>';			
			
	} else 	if(isset($_POST['submit'])){
				if($_POST['StudentNo']=="" or $_POST['Name']=="" or $_POST['Birthday']=="" or $_POST['Email']==""){
					echo '<script>window.alert("Please enter Student Name, Birthday and Email Address.");</script>';
					echo '<script> window.location="EditStudentAccount.php?StudentNo='.$_POST['StudentNo'].'";</script>';
				}
				else{
					require('Connect.php');
					$sql="UPDATE studentSET Name='".$_POST['Name']."', SchoolNo='".$_POST['SchoolNo']."', Birthday='".$_POST['Birthday']."', Email='".$_POST['Email']."' WHERE StudentNo ='".$_POST['StudentNo']."'";
//					echo $sql;
					mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());	
					echo '<script>window.alert("Updata successful.");</script>';
					echo '<script>window.location="PianoSchoolHome.php";</script>';
				}
			}
?>