<?php require_once("init.php"); 
if(!($session->signed_in == true))
    {
echo"<script>location.href='index.php';</script>";    
    }    
$dtime = new DateTime();    
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
                                    <h4 class="title">Generate Gate Pass</h4>
                                </div>
                                <?php
                                if(isset($_POST['submit'])){
                                $Db_objects->contact_number=trim($_POST['Contact']);$Db_objects->uname=trim($_POST['VisitorName']); 
                                $Db_objects->contact_personal=trim($_POST['ContactPerson']); $Db_objects->nov=trim($_POST['nov']);
                                $Db_objects->contact_department=$_POST['Department'];
                                $Db_objects->datetime=$dtime->format("Y-m-d H:i:s"); $Db_objects->photo="";
                                $Db_objects->create_details();
                                $session->input_first_session($Db_objects->datetime);
                                $call_data->redirect('CapturePhoto.php');
                                                           }
                                ?>
                                <div class="card-content">
                                <form method="POST">
                                        <div class="row">
                                           <div class="col-xs-4 col-sm-4 col-md-4">
                        					 <div class="form-group label-floating">
                                                    <label class="control-label"> Visitor's Name</label>
                                                    <input type="text" class="form-control"  tabindex="1" 
                                                    name="VisitorName" required="" >
                                                </div>
                        				    </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                        				 <div class="form-group label-floating">
                                                    <label class="control-label">Visitor's Contact</label>
                                                    <input type="text" maxlength="10" class="form-control"  tabindex="2" 
                                                    name="Contact" required="" >
                                         </div>
                        				</div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                        				 <div class="form-group label-floating">
                                                    <label class="control-label">Number of Visitors</label>
                                                    <input type="number" class="form-control"  tabindex="3" 
                                                    name="nov" required="" >
                                         </div>
                        				</div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                        					 <div class="form-group label-floating">
                                                    <label class="control-label">Contact Person</label>
                                                    <input type="text" class="form-control"  tabindex="4" 
                                                    name="ContactPerson" required="" >
                                                </div>
                        				    </div>
                                       
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                        					 <div class="form-group label-floating">
                                                    <select name="Department" class="form-control" required="" tabindex="5" >
                                                    <option value="">Contact Department</option>
                                                    <option value="Admission">Admission</option>
                                                    <option value="HR">HR & Resource</option><option value="Registrar">Registrar</option>
                                                    <option value="CentralOffice">Central Office</option><option value="Accounts">Accounts</option>
                                                    <option value="Management">Management</option><option value="MBA">MBA</option>
                                                    <option value="Dean-VSB">Dean-VSB</option><option value="Ananda-Hostel">Ananda Hostel</option>
                                                    <option value="Suvarna-Hostel">Suvarna Hostel</option>
                                                    <option value="BBA">BBA</option><option value="Fashion">Fashion</option>
                                                    <option value="CSE">CSE</option><option value="ECE">ECE</option>
                                                    <option value="Civil">Civil</option><option value="Mechanical">Mechanical</option>
                                                    <option value="VCE-Dean">VCE-Dean</option><option value="VCE-Director">VCE-Director</option>
                                                    <option value="Polytechnic">Polytechnic</option><option value="AppliedScience">Applied Science</option>
                                                    <option value="BCA">BCA</option><option value="CSE">CSE</option><option value="B.Ed.">B.Ed.</option>
                                                    <option value="DSA">Dean Student's Affair</option> <option value="Dean-BBA/BCA">Dean-BBA/BCA</option>
                                                    <option value="Director-VICT">Dean-VICT</option>
                                                    </select>
                                                </div>
                        				    </div>
                                       
                                        <button type="submit" name="submit" tabindex="6" class="btn btn-primary pull-right">Save & Next</button>
                                        <div class="clearfix"></div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
             <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="card"> 
                            <div class="card-header" data-background-color="red">
                                    <h4 class="title">In-Visitors List</h4>
                                </div>
                                <div class="card-content">
                               <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Sno.</th>
                                <th>Visitor's Name</th>
                                <th>Visitor's Contact Number</th>
                                <th>Contact Person</th>
                                <th>Contact Department</th>
                                <th>Photo</th>
                                <th>Visit Time (Minutes)</th>
                                <th>Exit</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(isset($_GET['exit']))
                                {
                            $Db_objects->update_status($_GET['exit'],$dtime->format("Y-m-d H:i:s"));    
                                }
                            $Db_objects->get_visitors();
                            
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