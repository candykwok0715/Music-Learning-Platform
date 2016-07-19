<?php
	extract($_POST);
//	foreach($_POST as $key => $value)
//		echo "POST['" . $key . "']  ---> $value <br />" ;
	if (!isset($_POST['submit']))   //ensure submit the form 
		echo '<script>window.location="ForgetPassword.php";</script>';

	if($_POST['AccountID']==""||$_POST['Birthday']==""||$_POST['Email']==""){
		echo '<script>window.alert("Please enter the Accoount ID, Birthday and Email. ");</script>';
		echo '<script>window.location="ForgetPassword.php";</script>';
	}
	
	require_once('Connect.php');
   	$sql="SELECT * FROM student  WHERE StudentNo='".$_POST['AccountID']."'";
//	echo $sql;
	
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
	
	if (mysql_num_rows($result) == 0){  // cannot find the account in database
    	echo '<script type="text/javascript">window.alert("Account ID is not yet registered");</script>';
		echo '<script>window.location="ForgetPassword.php";</script>';
	}	
	
	$row = mysql_fetch_assoc($result);
	 if ($_POST['Birthday'] != $row['Birthday'] ){
    	echo '<script type="text/javascript">window.alert("Birthday is not match!");</script>';
		echo '<script>window.location="ForgetPassword.php";</script>';		 
	 }
	 else if ($_POST['Email'] != $row['Email'] ){
    		echo '<script type="text/javascript">window.alert("Email is not match!");</script>';
			echo '<script>window.location="ForgetPassword.php";</script>';		 
		  }
		  else {
			  	require('Connect.php');
				$sql="UPDATE student SET  Password='".$_POST['AccountID']."' WHERE StudentNo ='".$_POST['AccountID']."'";
			//	echo $sql;
				$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
				echo '<script>window.alert("Reset password successful.");</script>';
				echo '<script> window.location="index.php";</script>';
		  }


?>
