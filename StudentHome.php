<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "admin")
        echo '<script>window.location="AdminHome.php";</script>';
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Home</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="NavBar.css">
   <style type="text/css">
		body { padding-top: 20px; padding-bottom: 40px; }
		.pageHeader {
		   font-size: 40px;
            font-weight: bold;
			line-height: 1;
		}
	    .header {
			font-size: 25px;
            font-weight: bold;
            text-align: center;
			line-height: 2.1;
			color: #1698DE;
		}
		.fragment1-first-row{
			width:15em;
		}
        .ui-widget-header {
      	   border: 1px solid #d3d3d3;
           background: #fff;
        }
        .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
           border: 1px solid #d3d3d3;
           background: #fff;
        }
        .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
           color: #000000;
        }
        .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited{  
      	   color: #0088cc;
        }
		.PreExam_table th{
			text-align:center;
		}
		.PreExam_table td{
			text-align:center;
		}
   </style>
   <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
   <script>
      $( function(){
         $( "#tabs" ).tabs();
      });
    $( function(){
	    $( "#ChangePassword" ).click(function() {
    		window.location="ChangePassword.php";
    	});
    });	
    $( function(){
	    $( "#ChangeEmail" ).click(function() {
    		window.location="ChangeEmail.php";
    	});
    });		
    $( function(){
	    $( "#ChangeBirthday" ).click(function() {
    		window.location="ChangeBirthday.php";
    	});
    });		  
   </script>
</head>

<body>
<?php 
	 require('Connect.php');
      $sql="SELECT * FROM ".$_SESSION["type"]." WHERE StudentNo='".$_SESSION["AccountID"]."'";
	  $result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	  $row = mysql_fetch_assoc($result) ;
	  $sql = "SELECT * FROM pianoschool WHERE SchoolNo ='".$row["SchoolNo"]."'";
	  $result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	  $row2 = mysql_fetch_assoc($result) ;
  	  $sql = "SELECT * FROM score WHERE StudentNo='".$_SESSION["AccountID"]."'";
	  $result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
  	  $row3 = mysql_fetch_assoc($result) ;
?>
<?php require('Navbar.php'); ?>
<div class="container">
     <div class="page-header">
        <p class="pageHeader">Home</p>
     </div>
     <div id="tabs">
        <ul>
        <li><a href="#fragment-1"><span>Your Account Information </span></a></li>
        <li><a href="#fragment-2"><span>Your Pre-exam Results</span></a></li>
        </ul>
        <div id="fragment-1">
           <p class="header">Your Account Information</p>
  		      <table class="table table-bordered">
                 <tr>
                    <th class="fragment1-first-row" scope="row">Student No: </th>
                    <td colspan="2"><?php echo $row["StudentNo"];?></td>
                 </tr>
                 <tr>
                    <th class="fragment1-first-row" scope="row">Name</th>
                    <td colspan="2"><?php echo $row["Name"];?></td>
                 </tr>
                 <tr>
                    <th class="fragment1-first-row" scope="row">Password: </th>
                    <td>****************************</td>
                    <td width="200em"><center><button id="ChangePassword" class="btn  btn-smail btn-primary" type="button">Change Password</button></center></td>
                 </tr>
                 <tr>
                    <th class="fragment1-first-row" scope="row">School Name</th>
                    <td colspan="2"><?php echo $row2["SchoolName"];?></td>
                 </tr>
                 <tr>
                    <th class="fragment1-first-row" scope="row">Birthday(DD/MM/YYYY)</th>
                    <td><?php echo $row["Birthday"];?></td>
                    <td width="200em"><center><button id="ChangeBirthday" class="btn  btn-smail btn-primary" type="button">Edit</button></center></td>
                 </tr>
                 <tr>
                    <th class="fragment1-first-row" scope="row">Email</th>
                    <td><?php echo $row["Email"];?></td>
                    <td width="200em"><center><button id="ChangeEmail" class="btn  btn-smail btn-primary" type="button">Edit</button></center></td>
                 </tr>
              </table>
           </div>
        <div id="fragment-2">
           <p class="header">Your Pre-exam Results</p>
  	       <table class="table table-bordered PreExam_table">
              <thead>
                 <th scope="col">Pre-exam 1</th>
                 <th scope="col">Pre-exam 2</th>
              </thead>
              <tr>
                 <td><?php if ($row3["PreExam1"]=="") echo "Not Yet Done"; else echo $row3["PreExam1"];?></td>
                 <td><?php if ($row3["PreExam2"]=="") echo "Not Yet Done"; else echo $row3["PreExam2"];?></td>
              </tr>
            </table>
        </div>
     </div>
</div>
<?php mysql_close($conn);?>
</body>
</html>