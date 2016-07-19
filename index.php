<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Music Learning Platform</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body { padding-top: 5px; padding-bottom: 20px; }
	    .header {
			font-size: 30px;
            font-weight: bold;
            text-align: center;
			line-height: 2.1;
		}
    </style>
  </head>

  <body>
     <div class="container">
           <center><img src="view9.jpg" width="909" > </center>
        <p class="lead">
           <div class="row-fluid">
                    <div class="span6">
                            <p class="header">Important News</p>
                            <table class="table table-bordered" width="500" >
                                <thead>
                                   <tr>
                                      <th width="200">Date</th>
                                      <th width="300">Event</th>
                                   </tr>
                                </thead>               
                                <tr>
                                    <td>12 Jan 2013</td>
                                    <td>XXXXXX xxxx X aaaaaaa ff ffffX XXXXXX XXXXXX XXXX XXXXXXXX xxxx X aaaaaaa ff ffffX XXXXXX XXXXXX XXXX XXXX XXXX xxxx X aaaaaaa ff ffffX XXXXXX XXXXXX XXXX XX</td>
                                </tr>
                                <tr>
                                    <td>13 Feb 2013</td>
                                    <td>XXXXXX xxxx X aaaaaaa ff ffffX XXXXXX XXXXXX XXXX XXXXXXXX xxxx X aaaaaaa ff ffffX XXXXXX XXXXXX XXXX XXXX XXXX xxxx X aaaaaaa ff ffffX XXXXXX XXXXXX XXXX XX</td>
                                </tr>
                            </table>
                    </div>
                    <div class="span6">
                               <p class="header">Sign in</p>
                               <form class="form-horizontal" action="CheckLogin.php" method="post">
                               <div class="control-group">
                                  <label class="control-label">Account ID: </label>
                                  <div class="controls"><input name="AccountID" type="text"  placeholder="Account ID"></div>
                               </div>

                               <div class="control-group">
                                  <label class="control-label">Password: </label>
                                  <div class="controls"><input name="password" type="password" placeholder="Password"></div>
                               </div>
                               
                               <div class="control-group">
                                  <label class="control-label">Type: </label>
                                  <div class="controls">
                                     <label class="radio"><input type="radio" name="type" value="admin">Admin</label>
                                     <label class="radio"><input type="radio" name="type" value="pianoschool">Piano School</label>
                                     <label class="radio"><input type="radio" name="type" value="student">Student</label>
                                     <input class="btn" name="submit" type="submit" value="Login"/>
                                     <input class="btn" type="reset" value="Reset"/>
                                  </div>
                               </div>
                               </form>
                               
                               <form class="form-horizontal" action="ForgetPassword.php" method="post">
                                  <div class="controls">
                                  	 <strong><p>Only for Student</p></strong>
                                     <input class="btn btn-danger" name="submit"  value="            Forget Password            " type="submit"/>
                                  </div>
                               </form>
                    </div><!-- End of span6 -->
           </div><!-- End of row-fluid -->
        </p>
      </div><!-- End of container -->
  </body>
</html>
