<?php session_start(); ?>
<?php require('EnsureLogined.php');?>
<?php 
     if ($_SESSION['type'] == "pianoschool")
        echo '<script>window.location="PianoSchoolHome.php";</script>';
     if ($_SESSION['type'] == "student")
        echo '<script>window.location="StudentHome.php";</script>';
?>
<!DOCTYPE html>
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
			line-height: 2;
			color: #1698DE;
		}
		.header_addition{
			font-size: 20px;
			font-weight:bold;
            text-align: center;
			line-height: 0.5;
		}
		.fragment2-SchooltNo-row{ width:6em;}
		.fragment2-fourth-row{ width:5em;}
		.fragment2-fifth-row{ width:10em;}
		.fragment3-StudentNo-row{ width:6em;}
		.fragment3-SchoolNo-row{ width: 6em;}
		.fragment3-third-row{ width:6em;}
		.fragment3-fifth-row{ width:5em;}
		.fragment3-sixth-row{ width:10em;}
    	.fragment4-first-row{ width:10em;}
		.fragment4-third-row{ width:13em;}
		.fragment4-fourth-row{ width:13em;}

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
		.school_account_info_table th{
			text-align:center;
		}
		.student_account_info_table th{
			text-align:center;
		}
		.student_result_table th{
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
	    $( "#CreateSchoolAccount" ).click(function() {
    		window.location="CreateSchoolAccount.php";
    	});
    });
    $( function(){
	    $( "#ChangePassword" ).click(function() {
    		window.location="ChangePassword.php";
    	});
    });	
    $( function(){
	    $( "#CreateStudentAccount" ).click(function() {
    		window.location="CreateStudentAccount.php";
    	});
    });		
    </script>
</head>
<body>     
<?php 
	 require('Connect.php');
     $sql="SELECT * FROM ".$_SESSION["type"]." WHERE AdminNo='".$_SESSION["AccountID"]."'";
	 $result1 = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
     $row1 = mysql_fetch_assoc($result1);
	 $sql="SELECT * FROM pianoschool order by SchoolNo";
	 $result2 = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	 $sql="SELECT * FROM student order by StudentNo";
	 $result3 = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
	 $sql="SELECT * FROM student t , score s where t.StudentNo = s.StudentNo order by t.StudentNo";
	 $result4 = mysql_query($sql,$conn) or die("SQL Error: " . mysql_error());
?>
<?php require('Navbar.php'); ?>
<div class="container">
        <div class="page-header">
           <p class="pageHeader">Home</p>
        </div>
     <div id="tabs">
        <ul>
        <li><a href="#fragment-1"><span>Your Account Information </span></a></li>
        <li><a href="#fragment-2"><span>All School Account Information</span></a></li>
        <li><a href="#fragment-3"><span>All Student Account Information</span></a></li>
        <li><a href="#fragment-4"><span>All Student Pre-exam Results</span></a></li>
        </ul>
        <div id="fragment-1">
               <p class="header">Your Account Information</p>
     		      <table class="table table-bordered" width="500">
                       <tr>
                          <th scope="row">Account ID:</th>
                          <td colspan="2"><?php echo $row1["AdminNo"];?></td>
                       </tr>
                       <tr>
                          <th scope="row">Password: </th>
                          <td>****************************</td>
                          <td><center><button id="ChangePassword" class="btn  btn-small btn-primary" type="button">Change Password</button></center></td>
                       </tr>
                  </table>
	    </div>
        <div id="fragment-2">
           <p class="header">All School Account Information</p>
           <p class="header_addition">(Order by school no)</p>
           <p><button id="CreateSchoolAccount" class="btn btn-small btn " type="button">Create School Account</button></p>
           <table class="table table-bordered school_account_info_table">
              <thead>
              <th class="fragment2-SchooltNo-row" scope="col">School No</th>
              <th scope="col">School Name</th>
              <th class="fragment2-fourth-row" scope="col">Action</th>
              <th class="fragment2-fifth-row" scope="col">Action</th>
              </thead>
              <?php while($row2=mysql_fetch_assoc($result2)){
				  extract($row2);  ?>
              <tr>
              <td class="fragment2-SchooltNo-row"><center><?php echo $SchoolNo; ?></center></td>
              <td><?php echo $SchoolName;?></td>
              <td class="fragment2-fourth-row"><center><button class="btn btn-small btn-info" onclick="window.location='EditSchoolAccount.php?SchoolNo=<?php echo $SchoolNo;?>'" type="submit">Edit</button></center></td>
              <td class="fragment2-fifth-row"><center><button class="btn btn-small btn-danger" type="button" onClick="if(confirm('Are you sure to delete <?php echo $SchoolNo;?> School account?')) window.location='DoDeleteSchoolAccount.php?SchoolNo=<?php echo $SchoolNo;?>';">Delete Account</button></center></td>
              </tr>
              <?php }?>
           </table>
        </div>
        <div id="fragment-3">
           <p class="header">All Student Account Information</p>
           <p class="header_addition">(Order by student no)</p>
           <p><button id="CreateStudentAccount" class="btn btn-small btn " type="button">Create Student Account</button></p>
           <table class="table table-bordered student_account_info_table">
              <thead>
              <th class="fragment3-StudentNo-row" scope="col">Student No</th>
              <th scope="col">Student Name</th>
              <th scope="col">School No</th>
              <th class="fragment3-third-row" scope="col">Birthday</th>
              <th scope="col">Email Address</th>
              <th class="fragment3-fifth-row" scope="col">Action</th>
              <th class="fragment3-sixth-row" scope="col">Action</th>
              </thead>
                  <?php while($row3=mysql_fetch_assoc($result3)) {
						   extract($row3);	?>
                  <tr>						
                    <td class="fragment3-StudentNo-row"><center><?php echo $StudentNo;?></center></td>
                    <td><?php echo $Name;?></td>
                    <td class="fragment3-SchoolNo-row"><center><?php echo $SchoolNo;?></center></td>                    
                    <td class="fragment3-third-row"><?php echo $Birthday;?></td>
                    <td><?php echo $Email;?></td>
                    <td class="fragment3-fifth-row"><center><button class="btn btn-small btn-info" onClick="window.location='EditStudentAccount.php?StudentNo=<?php echo $StudentNo;?>'" type="button">Edit</button></center></td>
                    <td class="fragment3-sixth-row"><center><button class="btn btn-small btn-danger" type="button" onClick="if(confirm('Are you sure to delete <?php echo $StudentNo;?> student account?')) window.location='DoDeleteStudentAccount.php?StudentNo=<?php echo $StudentNo;?>';">Delete Account</button></center></td>
                  </tr>
                  <?php }?>
           </table>
        </div>
        <div id="fragment-4">
           <p class="header">All Student Pre-exam Results</p>
           <p class="header_addition">(Order by student no)</p>
		      <table class="table table-bordered student_result_table">
                  <thead>
                     <th class="fragment4-first-row" scope="col">Student No</th>
                     <th scope="col">Student Name</th>
                     <th class="fragment4-third-row" scope="col">Pre-exam 1</th>
                     <th class="fragment4-fourth-row" scope="col">Pre-exam 2</th>
                  </thead>
                  <?php while($row4=mysql_fetch_assoc($result4)){
					       extract($row4); ?>
                  <tr>
                     <td class="fragment4-first-row"><center><?php echo $StudentNo;?></center></td>
                     <td><?php echo $Name;?></td>
                     <td class="fragment4-third-row"><center><?php if ($PreExam1=="") echo "Not Yet Done"; else echo $PreExam1;?></center></td>
                     <td class="fragment4-fourth-row"><center><?php if ($PreExam2=="") echo "Not Yet Done"; else echo $PreExam2;?></center></td>
                  </tr>
                  <?php } ?>
        
        </div>
	 </div>
</div>
<?php mysql_close($conn);?>
</body>
</html>