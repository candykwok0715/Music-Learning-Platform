<?php require('EnsureLogined.php');?>
<?php 

//ensure submit the form
	if (!isset($_POST['Submit']))    
		echo '<script>window.location="ChangeBirthday.php";</script>';

// ensure the birthday is not null
	if ($_POST['Birthday']==""){
		echo '<script>window.alert("Please enter the Birthday.");</script>';
		echo '<script>window.location="ChangeBirthday.php";</script>';
	}
	//	echo "birthday:". $_POST['username'];
	require('Connect.php');
	$sql="UPDATE student SET Birthday ='".$_POST['Birthday']."' WHERE StudentNo = '".$_POST['StudentNo']."'";
	//	echo $sql;
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
		echo '<script>window.alert("Change Birthday successful!");</script>';
		echo '<script> window.location="StudentHome.php";</script>';	
?>

