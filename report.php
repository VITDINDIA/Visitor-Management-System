<?php require_once("init.php"); 
if(!($session->signed_in == true))
    {
echo"<script>location.href='index.php';</script>";    
    }       
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <?php   include("include/header.php")    ?>
            <div class="content">
                <div class="container-fluid">
                    
             <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="card"> 
                            <div class="card-header" data-background-color="red">
                                    <h4 class="title">Out-Visitors List</h4>
                                </div>
                                <div class="card-content">
                                 <form method="Post" name="form">
                                    <span>From: <input type="date" name="from" /></span>
                                    <span>To: <input type="date" name="to" onchange="window.form.submit();" /></span>
                                     </form>
                                 <br />
                                 <?php
                                 if(isset($_POST['from'])){
                                 ?>
                                  <span><a href="reportexl.php?from=<?php  print $_POST['from'];   ?>&to=<?php  print $_POST['to'];   ?>">Exl Download</a></span>
                               
                                 <span>From: <?php print   $call_data->date_format($_POST['from']); ?></span>
                                 <span>To:   <?php print  $call_data->date_format($_POST['to']); ?></span>
                              
                               <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Sno.</th>
                                <th>Visitor's Name</th>
                                <th>Visitor's Contact Number</th>
                                <th>Contact Person</th>
                                <th>Contact Department</th>
                                <th>Photo</th>
                                <th>In-Time</th>
                                <th>Out-Time</th>
                                <th>Visit Time (Minutes)</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            $from=$_POST['from'];$to=$_POST['to'];
                            $Db_objects->get_out_visitors($from,$to);
                            
                           ?>  
                           <?php
                                                        }
                           ?> 
                            </tbody>
                          </table>
                                    
                                </div>
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
                        <a href="#">Vidya Knowledge Park</a>
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
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>