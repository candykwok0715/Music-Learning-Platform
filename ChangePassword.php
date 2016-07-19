<?php session_start(); ?>
<?php require('EnsureLogined.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Passowrd</title>
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
<div id="wrap">
     <?php require('Navbar.php'); ?>
       <div class="container">
	        <div class="hero-unit">
    	    	<p class="header">Change Password</p>
				<br />
                <form action="DoChangePassword.php" method="post">
                <input type="hidden" name="AccountID" value="<?php echo $_SESSION['AccountID'];?>" />
                <input type="hidden" name="type" value="<?php echo $_SESSION['type'];?>" />                
                <table width="400" align="center">
                   <tr>
                   		<td><label>Current Password:</label></td>
                        <td><div class="controls"><input name="CurrentPassword" type="password" placeholder="Current Password" ></div></td>
                   </tr>
                   <tr>
                   		<td><label>New Password:</label></td>
                        <td><div class="controls"><input name="NewPassword" type="password" placeholder="New Password"></div></td>
                   </tr>
                   <tr>
                   		<td><label>New Password Again:</label></td>
                        <td><div class="controls"><input name="NewPasswordAgain" type="password"  placeholder="New Password Again"></div></td>
                   </tr>
                   <tr>
                   		<td></td>
                        <td><input class="btn btn-primary" name="submit" type="submit" value="Change"/>
                        <input class="btn btn-danger" type="reset" value="Reset"/></td>
                   </tr>
                </table>
			</div>
       </div>
</div>
        
</body>
</html>