<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "admin")
        echo '<script>window.location="AdminHome.php";</script>';
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Birthday</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
   
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

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
   
   <script>
         $(function() {
            // Datepicker
            $('#Birthday').datepicker(
                    {
                        changeYear : true,
                        changeMonth : true,
						dateFormat: 'dd/mm/yy',
						yearRange: "c-100:c"  //c means current year,  if c=2013 and c-100, than c-100= 1913year
        			});
	        });
	</script>
</head>

<body>
<div id="wrap">
     <?php require('Navbar.php'); ?>
       <div class="container">
	        <div class="hero-unit">
    	    	<p class="header">Change Birthday</p>
				<br />
                <form action="DoChangeBirthday.php" method="post">
                <input type="hidden" name="StudentNo" value="<?php echo $_SESSION['AccountID'];?>" />              
                <table width="400" align="center">
                   <tr>
                   		<td><label>Birthday:</label></td>
                        <td><div class="controls"><input id="Birthday" name="Birthday" type="text" placeholder="Birthday (DD/MM/YYYY)" ></div></td>
                   </tr>
                   <tr>
                   		<td></td>
                        <td><input class="btn btn-primary" name="Submit" type="submit" value="Change"/>
                        <input class="btn btn-danger" type="reset" value="Reset"/></td>
                   </tr>
                </table>
			</div>
       </div>
</div>
        
</body>
</html>