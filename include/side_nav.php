
            <div class="sidebar-wrapper">
                <ul class="nav">
                  
                    <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ ?> class="active" <?php   } ?> >
                        <a href="index.php">
                            <i class="material-icons">looks_one</i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li  <?php if(basename($_SERVER['PHP_SELF']) == "visitor.php"){ ?> class="active" <?php   } ?>>
                        <a href="visitor.php">
                            <i class="material-icons">looks_two</i>
                            <p>Visitor</p>
                        </a>
                    </li> 
                    <li <?php if(basename($_SERVER['PHP_SELF']) == "Finish.php"){ ?> class="active" <?php   } ?>>
                        <a href="#" >
                            <i class="material-icons">check_circle</i>
                            <p>Print</p>
                        </a>
                    </li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == "report.php"){ ?> class="active" <?php   } ?>>
                        <a href="report.php" >
                            <i class="material-icons">check_circle</i>
                            <p>Report</p>
                        </a>
                    </li>
                    <li >
                        <a href="index.php" >
                            <i class="material-icons">check_circle</i>
                            <p>Logout</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
       