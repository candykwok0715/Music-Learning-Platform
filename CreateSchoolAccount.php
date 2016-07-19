<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create School Account</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
   <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
   
   <style type="text/css">
   .container {
		margin-top:60px;
   }
   .header{
	   text-align:center;
	   font-size:36px;
	   font-weight:bold;
   }
   </style>
</head>

<body>
<?php
	require('Connect.php');
    $sql="SELECT SchoolNo FROM pianoschool";
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	$NextSchoolNo="H01";
	while ($row = mysql_fetch_assoc($result)){
		if($NextSchoolNo == $row['SchoolNo']){
			$new_string=(string)((int)(substr($NextSchoolNo,1,2))+1); //if $str=H01, it get 01 and 1+1=2 
			if (strlen($new_string)==1)
   				$NextSchoolNo ="H0".$new_string;
			else $NextSchoolNo="H".$new_string;
		}
		else break;
	}
?>
<div id="wrap">
     <?php require('Navbar.php'); ?>
       <div class="container">
	        <div class="hero-unit">
    	    	<p class="header">Create School Account</p>
				<br />
                <form action="DoCreateSchoolAccount.php" method="post">
                <input type="hidden" name="NextSchoolNo" value="<?php echo $NextSchoolNo;?>" />
                <table width="400" align="center">
                   <tr>
                   		<td><label class="control-label">School No:</label></td>
                        <td><div class="controls"><input name="AccountID" type="text" placeholder="<?php echo $NextSchoolNo;?>" disabled></div></td>
                   </tr>
                   <tr>
                   		<td><label>Password:</label></td>
                        <td><div class="controls"><input name="Password" type="text"  placeholder="********************" disabled></div></td>
                   </tr>
                   <tr>
                   		<td><label>School Name:</label></td>
                        <td><div class="controls"><input name="SchoolName" type="text"  placeholder="School Name"></div></td>
                   </tr>
                   <tr>
                   		<td></td>
                        <td><input class="btn btn-primary" name="submit" type="submit" value="Create"/>
                        <input class="btn btn-danger" type="reset" value="Reset"/></td>
                   </tr>
                </table>
			</div>
       </div>
</div>
        
</body>
</html>