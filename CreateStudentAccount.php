<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Student Account</title>
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
<?php
	require('Connect.php');
    $sql="SELECT StudentNo FROM student";
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	$NextStudentNo="S00001";
	while($row=mysql_fetch_assoc($result)){
		if ($NextStudentNo == $row['StudentNo']){
			$new_string=(string)((int)(substr($NextStudentNo,1,5))+1); //if $row[0]=S00001, it get 00001 and 1+1=2 
			if (strlen($new_string)==1)
	   			$NextStudentNo ="S0000".$new_string;
			else if (strlen($new_string)==2)
					$NextStudentNo ="S000".$new_string;
		 	 	 else if (strlen($new_string)==3)
							$NextStudentNo ="S00".$new_string;
				  	  else  if (strlen($new_string)==4)
								$NextStudentNo ="S0".$new_string;
					  	    else $NextStudentNo ="S".$new_string;
		}
		else
			break;
	}
?>
<div id="wrap">
     <?php require('Navbar.php'); ?>
       <div class="container">
	        <div class="hero-unit">
    	    	<p class="header">Create Student Account</p>
				<br />
                <form action="DoCreateStudentAccount.php" method="post">
                <input type="hidden" name="NextStudentNo" value="<?php echo $NextStudentNo;?>" />
                <input type="hidden" name="SchoolNo" value="<?php echo $_SESSION['AccountID'];?>" />
                <table width="400" align="center">
                   <tr>
                   		<td><label class="control-label">Student No:</label></td>
                        <td><div class="controls"><input name="AccountID" type="text" placeholder="<?php echo $NextStudentNo; ?>" disabled></div></td>
                   </tr>
                   <tr>
                   		<td><label>Password:</label></td>
                        <td><div class="controls"><input name="Password" type="text"  placeholder="********************" disabled></div></td>
                   </tr>
                   <tr>
                   		<td><label>Name:</label></td>
                        <td><div class="controls"><input name="Name" type="text"  placeholder="Name"></div></td>
                   </tr>
                   <tr>
                        <?php if ($_SESSION['type']=="admin"){
									echo '<td><label>School Name:</label></td>';
									echo '<td><select name="SchoolNo">';
									$sql="SELECT * FROM pianoschool";
									$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
									while($row=mysql_fetch_assoc($result)){
										 echo "<option value=".$row["SchoolNo"].">".$row["SchoolName"]."</option>";}
									echo '</select></td>';
	                        }
							  if($_SESSION['type']=="pianoschool"){
						?>
			                  	<td><label>School No:</label></td>
                                <td><div class="controls"><input name="SchoolNo" type="text"  placeholder="<?php echo $_SESSION['AccountID'];?>" disabled></div></td>
                        <?php } ?>
                   </tr>                   
                   <tr>
                   		<td><label>Birthday:</label></td>
                        <td><div class="controls"><input id="birthday" name="Birthday" type="text"  placeholder="DD/MM/YYYY"></div></td>
                   </tr>
                   <tr>
                   		<td><label>Email:</label></td>
                        <td><div class="controls"><input name="Email" type="email" placeholder="Email"></div></td>
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