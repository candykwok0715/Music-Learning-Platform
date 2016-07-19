<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
	 if (!isset($_GET['SchoolNo']) or $_GET['SchoolNo']=="")
	     if ($_SESSION['type'] == "admin")
	  	    echo '<script>window.location="AdminHome.php";</script>';
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit School Account</title>
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
   .ResetPassword{
	   line-height: 1;
   }
   </style>
</head>
<body>
<div id="wrap">
     <?php require('Navbar.php'); ?>
       <div class="container">
	        <div class="hero-unit">
    	    	<p class="header">Edit School Account</p>
				<br />
                <form action="DoEditSchoolAccount.php" method="post">
                <input type="hidden" name="SchoolNo" value="<?php echo $_GET['SchoolNo'];?>" />
                <table width="400" align="center">
                   <tr>
                   		<td><label class="control-label">School No:</label></td>
                        <td><div class="controls"><input name="AccountID" type="text" placeholder="<?php echo $_GET['SchoolNo'];?>" disabled></div></td>
                   </tr>
                   <tr>
                   		<td><label>Password:</label></td>
                        <td><p class="ResetPassword"><input class="btn btn-success" name="ResetPassword" type="submit" value="Reset Password"/></p></td>
                   </tr>
                   <tr>
                   		<td><label>School Name:</label></td>
                        <td><div class="controls"><input name="SchoolName" type="text" placeholder=" New School Name"></div></td>
                   </tr>
                   
                   <tr>
                   		<td></td>
                        <td><input class="btn btn-primary" name="submit" type="submit" value="Updata"/>
                        <input class="btn btn-danger" type="reset" value="Reset"/></td>
                   </tr>
                </table>
			</div>
       </div>
</div>
        
</body>
</html>