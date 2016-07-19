<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
	 if (!isset($_GET['StudentNo']) or $_GET['StudentNo']==""){
	     if ($_SESSION['type'] == "admin")
    	    echo '<script>window.location="AdminHome.php";</script>';
		 if ($_SESSION['type'] == "pianoschool")
        	echo '<script>window.location="PianoSchoolHome.php";</script>';
	 }
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Student Account</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="css/NavBar.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
   <link rel="stylesheet" href="/resources/demos/style.css" />
 
   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>   
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
	<script>
         $(function() {
            // Datepicker
            $('#birthday').datepicker(
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
    	    	<p class="header">Edit Student Account</p>
				<br />
                <?php 
					require('Connect.php');
					$sql ="SELECT * FROM student where StudentNo='".$_GET['StudentNo']."'";
					$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
					$row = mysql_fetch_assoc($result);
				?>
                <form action="DoEditStudentAccount.php" method="post">
                <input type="hidden" name="StudentNo" value="<?php echo $_GET['StudentNo'];?>" />
                <table width="400" align="center">
                   <tr>
                   		<td><label class="control-label">Student No:</label></td>
                        <td><div class="controls"><input name="AccountID" type="text" placeholder="<?php echo $_GET['StudentNo'];?>" disabled></div></td>
                   </tr>
                   <tr>
                   		<td><label>Password:</label></td>
                        <td><p class="ResetPassword"><input class="btn btn-success" name="ResetPassword" type="submit" value="Reset Password"/></p></td>
                   </tr>
                   <tr>
                   		<td><label>Student Name:</label></td>
                        <td><div class="controls"><input name="Name" type="text" placeholder="<?php echo $row['Name'];?>"></div></td>
                   </tr>
                   <tr>
                        <?php if ($_SESSION['type']=="admin"){
									echo'<td><label>School Name:</label></td>';
									echo '<td><select name="SchoolNo">';
									$sql="SELECT * FROM pianoschool";
									$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
									while($row1=mysql_fetch_assoc($result)){
										 echo "<option value=".$row1["SchoolNo"].">".$row1["SchoolName"]."</option>";}
									echo '</select></td>';
	                        }
							  if($_SESSION['type']=="pianoschool"){
						?>
			                  		<td><label>School No:</label></td>
                                    <td><div class="controls"><input name="SchoolNo" type="text"  placeholder="<?php echo $row['SchoolNo'];?>" disabled></div></td>
                                    <input type="hidden" name="SchoolNo" value="<?php echo $row['SchoolNo']?>" />
                        <?php } ?>
                   </tr>                   
                   <tr>
                   		<td><label>Birthday:</label></td>
                        <td><div class="controls"><input id="birthday"  name="Birthday" type="text" placeholder="<?php echo $row['Birthday'];?>"></div></td>
                   </tr>
                   <tr>
                   		<td><label>Email Address:</label></td>
                        <td><div class="controls"><input name="Email" type="email" placeholder="<?php echo $row['Email'];?>"></div></td>
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