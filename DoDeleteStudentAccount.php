<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
	 if (!isset($_GET['StudentNo'])){
	     if ($_SESSION['type'] == "admin")
    	    echo '<script>window.location="AdminHome.php";</script>';
		 if ($_SESSION['type'] == "pianoschool")
        	echo '<script>window.location="PianoSchoolHome.php";</script>';
	 }
?> 

<?php 
//	echo $_GET['StudentNo']; 
	require('Connect.php');
    $sql="DELETE FROM student WHERE StudentNo = '".$_GET['StudentNo']."'";
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
    $sql="DELETE FROM score WHERE StudentNo = '".$_GET['StudentNo']."'";
	mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
    if ($_SESSION['type'] == "admin")
  	    echo '<script>window.location="AdminHome.php";</script>';
	if ($_SESSION['type'] == "pianoschool")
       	echo '<script>window.location="PianoSchoolHome.php";</script>';
?>
