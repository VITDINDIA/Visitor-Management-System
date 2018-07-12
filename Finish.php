<?php require_once("init.php"); 
if(!($session->signed_in == true))
    {
echo"<script>location.href='index.php';</script>";    
    } 
else if(!isset($_SESSION['first'])) 
    {
echo"<script>location.href='visitor.php';</script>";      
    }   
$fetchdata=$Db_objects->fetch_visitor($_SESSION['first']);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Vidya Knowledge Park | Visitor Management System</title>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td rowspan="6"><img src="<?php   print $fetchdata[6];    ?>"/></td>
                                    <td style="text-align: center;" colspan="2"><strong><a href="#" onclick="window.print();">Gate Pass | <?php print $fetchdata[0];  ?></a></strong></td>
                                  </tr>
                                  <tr>
                                   
                                    <td><strong>Visitor's Name</strong></td>
                                    <td><?php   print $fetchdata[2];    ?></td>
                                  </tr>
                                  <tr>
                                   
                                    <td><strong>Number of Visitors</strong></td>
                                    <td><?php   print $fetchdata[9];    ?></td>
                                  </tr>
                                  <tr>
                                    
                                    <td><strong>Visitor's Contact</strong></td>
                                    <td><?php   print $fetchdata[1];    ?></td>
                                  </tr>
                                  <tr>
                                    
                                    <td><strong>Contact Person (Department)</strong></td>
                                    <td><?php   print $fetchdata[4];  echo"($fetchdata[3])";   ?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>In Time</strong></td>
                                    <td><?php   print $fetchdata[5];    ?></td>
                                  </tr>
                                  <tr>
                                    <td colspan="3"><strong>Signature of Contact Person: </strong></td>
                                  </tr>
                                </tbody>
                              </table>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
           
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
<script src="assets/js/demo.js"></script>

</html>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
        <p>
        <ol>
        <li>Non-refund of fees: All fees once paid are not refundable for any reason whatsoever. Only Security Deposit will be refunded after making necessary adjustments as required.</li>
        <li>Cancellation of Admission: Vidya reserves its right to cancel the admission of successful candidate 
        under any of the following circumstances :</li> 
        <ul>
        <li>If the fees is not deposited by the stipulated date.</li>
        <li>If the candidate does not join the particular programme by the stipulated date even though the fee has been deposited.</li>
        <li>If the candidate fails to furnish the proof of the stipulated minimum qualifications.</li>
        <li>If any instance of donation/unfair means is found after admission.</li>
        <li>If any of the document(s) submitted by you to Vidya is found to be forged, 
        fabricated or false during the period of your study, your admission shall be cancelled immediately and fees shall be forfeited.
        In case you complete the course and obtain the degree on the basis of documents which are later found to be forged, fabricated or false, 
        at any point of time, your degree shall be cancelled/ recalled.
        </li>
        </ul>
         <li>Right of Alteration/Modification:</li>
        <ul>
        <li>Vidya reserves its right to alter or modify the structure of any of the programs to attain the objective of excellence</li>
        <li>Vidya reserves its right to change the provided Fee Structure.</li>
        <li>Vidya reserves its right to modify, alter and/or include any other Terms and Conditions that may be deemed fit in the interest of the Institution.</li>
        </ul>
        <li>Jurisdiction: Any dispute pertaining to admission, or any matter as a student or alumnus of Vidya shall be subjected to the jurisdiction of the Delhi Court only.</li>
        <li>Limitation Clause: No dispute shall be raised after the expiry of 30 days from the date on which the process of admission and/or selection is completed.</li>
        <li>Student Agreement Clause:</li>
        <ul><li>I shall immediately inform the University in writing if there is any change to the information I have provided in the Amity Application Form.</li>
        <li>I authorize the University to issue details provided in this application form to any agency in the event of a verification or other statutory requirements.</li>
        <li>I am fully aware and accept the responsibility for all expenses towards my education and living while studying in the University</li>
        <li>I agree to abide by the visa regulations and any other requirements as applicable.</li>
       
        </ul>
         
        </ol>
        All successful candidates shall be bound by the above mentioned Terms & Conditions of Amity.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>