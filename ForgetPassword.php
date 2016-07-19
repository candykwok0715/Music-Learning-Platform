<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forget Password</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

   <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
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
   .ResetPassword{
	   line-height: 1;
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
       <div class="container">
	        <div class="hero-unit">
    	    	<p class="header">Forget Password</p>
				<br />
                <form action="DoForgetPassword.php" method="post">
                <table width="400" align="center">
                   <tr>
                   		<td><label>Account ID:</label></td>
                        <td><div class="controls"><input name="AccountID" type="text" placeholder="Account ID"></div></td>
                   </tr>
                   <tr>
                   		<td><label>Birthday:</label></td>
                        <td><div class="controls"><input  id="Birthday" name="Birthday" type="text" placeholder="DD/MM/YYYY"></div></td>
                   </tr>
                   <tr>
                   		<td><label>Email Address:</label></td>
                        <td><div class="controls"><input name="Email" type="email" placeholder="Email"></div></td>
                   </tr>                   
                   <tr>
                   		<td></td>
                        <td><input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
                        <input class="btn btn-danger" type="reset" value="Reset"/></td>
                   </tr>
                </table>
		</form>
                <table align="center">  
                   <tr>
                   		<td colspan="2"><br />
                        	<center><button class="btn btn-inverse btn-large" onClick="window.location='index.php'">Go back to the index page</button></center>
                        </td>
                   </tr>
               </table>
			</div>
       </div>
</div>
        
</body>
</html>