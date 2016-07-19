<?php
   extract($_POST);
   if (!isset($_POST['submit']))   //ensure submit the login form 
      echo '<script>window.location="index.php";</script>';
   
   if ( ($_POST['AccountID']=="") || ($_POST['password']=="") || !isset($_POST['type'])  ){   // ensure enter the Account and password
      echo '<script type="text/javascript">window.alert("Please enter the account ID , Password and Type  ");</script>';
	  echo '<script>window.location="index.php";</script>';
   }
      
   if ($_POST['type'] == "admin")
      $col = "AdminNo";
   if ($_POST['type'] == "pianoschool")
      $col = "SchoolNo";
   if ($_POST['type'] == "student")
      $col = "StudentNo";
   
//   echo $col."</br>";
   
   require_once('Connect.php');
   $sql="SELECT * FROM " .$_POST['type']. " WHERE $col='".$_POST['AccountID']."'";
   
//   echo $sql."</br>";
   
   $result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error()); 
	
   if (mysql_num_rows($result) == 0){  // cannot find the account in database
      echo '<script type="text/javascript">window.alert("Account ID cannot match the type Or Account ID is not yet registered");</script>';
	  echo '<script>window.location="index.php";</script>';
   }	
   $row = mysql_fetch_assoc($result) ;
   if ($_POST['password'] == $row['Password'] ){
      session_start();
      $_SESSION["AccountID"]=$_POST['AccountID'];
	  $_SESSION["type"]=$_POST['type'];
	  if  ($_SESSION["type"] == 'admin') 
	  echo '<script>window.location="AdminHome.php";</script>';   
	  if  ($_SESSION["type"] == 'pianoschool') 
	  echo '<script>window.location="PianoSchoolHome.php";</script>';   
	  if  ($_SESSION["type"] == 'student') 
	  echo '<script>window.location="StudentHome.php";</script>';   
	  }
   else{
      echo '<script type="text/javascript">window.alert("Password is not match! Please try again!");</script>';
	  echo '<script>window.location="index.php";</script>';
   }
?>
<?php mysql_close($conn);?>