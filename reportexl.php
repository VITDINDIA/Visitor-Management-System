<?php 
header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=Report.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
require_once("init.php"); 
if(!($session->signed_in == true))
    {
echo"<script>location.href='index.php';</script>";    
    }       
?>               
                               <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th colspan="8">Visitor Management System (VKP) | <span>From: <?php print   $call_data->date_format($_GET['from']); ?></span>
 <span>To:   <?php print  $call_data->date_format($_GET['to']); ?></span></th>
                               
                              </tr>
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
                            $from=$_GET['from'];$to=$_GET['to'];
                            $Db_objects->get_out_visitors($from,$to);
                            
                           ?>  
                          
                            </tbody>
                          </table>
                                    
        