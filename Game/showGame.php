<?php session_start(); ?>
<?php require('../EnsureLogined.php');?>
<?php
     if ($_SESSION['type'] == "admin")
        echo '<script>window.location="AdminHome.php";</script>';
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="../PianoSchoolHome.php";</script>';
?>
<?php 
	require('../Connect.php');
	$sql="SELECT * FROM score WHERE studentNo='".$_SESSION["AccountID"]."'";
//	echo $sql;
	$result = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	$row = mysql_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pre-exam</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/NavBar.css">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		body { padding-top: 20px; padding-bottom: 40px; }
		.hero-unit { padding: 30px;}
		.pageHeader {
		   font-size: 40px;
            font-weight: bold;
			line-height: 1;
		}
		.infor { 
			font-size:18px;
			line-height: 1.5;
		}
		h2{
			color: #1698DE;
		}
	</style>
</head>
<body>
    <?php require('../Navbar.php'); ?>
    <div class="container">
        <div class="page-header">
           <p class="pageHeader">Pre-exam</p>
        </div>
	   <div class="row-fluid">
	      <div class="span6">
		     <h2>Pre-exam 1</h2> <br />
			    <p class="infor">Pre-exam 1  mainly focuses on the multiple choice. <br /> You only have 180 seconds to complete the pre-exam 1. <br /> If time up and you not yet finish, the score will be Zero.<br /> You only have one chance to do the pre-exam.</p>
                	<p><?php if ($row['PreExam1']==""){ ?>
							<form action="Multiplechoice/Multiplechoice.php" method="post">
	                    		<button class="btn btn-primary" type="submit" name="start"  value="play">Start</button>
                            </form>
					<?php } else echo '<button class="btn btn-danger">You done it before</button>';?>
                	</p>
          </div>
		  
          <div class="span6">
		     <h2>Pre-exam 2</h2> <br />
			 <p class="infor">Pre-exam 2  mainly focuses on the Gap Fill. <br /> You only have 180 seconds to complete the pre-exam 2. <br /> If time up and you not yet finish, the score will be Zero.<br /> You only have one chance to do the pre-exam.</p>
                	<p><?php if ($row['PreExam2']==""){ ?>
							<form action="GapFill\GapFill.php" method="post">
	                    		<button class="btn btn-primary" type="submit" name="start"  value="play">Start</button>
                            </form>
					<?php } else echo '<button class="btn btn-danger">You done it before</button>';?>
                	</p>
		  </div>
	  </div>
</body>
</html>