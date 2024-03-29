<?php
require_once("init.php");
$session->Unset_Session();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Visitor Management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css' />
    <script src="assets/js/demo.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php   include("include/header.php")    ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Login</h4>
                                    
                                </div>
                                <div class="card-content">
                                    <form method="post" name="login-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"> Enter Your UID</label>
                                                    <input type="text" class="form-control"  tabindex="5" name="formnumber" required="" >
                                                </div>
                                            </div>
                                           <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Enter Your Password</label>
                                                    <input type="password" class="form-control"  tabindex="6" name="password" required="" >
                                                </div>
                                            </div>
                        
                                        <button type="submit" name="loginsubmit" class="btn btn-warning  pull-right"  tabindex="7">Login</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <?php

                                if(isset($_POST['loginsubmit']))
                                	{	
                                $user_found=user::verify_user(trim($_POST['formnumber']),md5(trim($_POST['password'])));
                                if($user_found == 1)
                                		{	  
                                $session->for_login(trim($_POST['formnumber']));		  
                                echo"<script>location.href='visitor.php';</script>"; 
                                		}
                                else
                                		{
                                echo"<script>alert('Login and Password is Incorrect');location.href='index.php';</script>"; 
                                		}		
                                	}
                                
                                		
                                ?>
  <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Total no. of visitors</h4>
                                    
                                </div>
								
								<?php

       
       $servername="localhost";
	   $username="root";
	   $dbname="vms";
	   $con =mysqli_connect($servername,$username,$password,$dbname);
	   $sql="SELECT count(cnt) AS total from registration";
		  
		  $result = mysqli_query($con,$sql);
		  $values = mysqli_fetch_assoc($result);
		  $num_rows =$values['total'];
		  echo "<h3> $num_rows</h3>";
		         
?>
 
 
								</div>
                        </div>
                        
                    </div>
                </div>
				</div>

				<footer class="footer">
                <div class="container-fluid">
                    
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://www.google.co.in/search?q=Vidya+knowledge+park+meerut&rlz=1C1DFOC_enIN787IN787&oq=Vidya+knowledge+park+meerut&aqs=chrome..69i57.10274j0j7&sourceid=chrome&ie=UTF-8">Vidya Knowledge Park</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->


</html>