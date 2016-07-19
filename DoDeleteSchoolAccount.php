<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
	 if (!isset($_GET['SchoolNo']))
	     if ($_SESSION['type'] == "admin")
	  	    echo '<script>window.location="AdminHome.php";</script>';
?> 

<?php 
//	echo $_GET['SchoolNo']; 
	require('Connect.php');
    $sql="DELETE FROM pianoschool WHERE SchoolNo = '".$_GET['SchoolNo']."'";
//	echo $sql;
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());

	$sql="SELECT StudentNo FROM student WHERE SchoolNo ='".$_GET['SchoolNo']."'";
//	echo $sql;
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	while($row=mysql_fetch_assoc($result)){
		extract($row);
//		echo $StudentNo;
	    $sql="DELETE FROM student WHERE StudentNo = '".$StudentNo."'";
		mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
		$sql="DELETE FROM score WHERE StudentNo = '".$StudentNo."'";
		mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	}
	
    if ($_SESSION['type'] == "admin")
  	    echo '<script>window.location="AdminHome.php";</script>';
?>
