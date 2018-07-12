<script language="javascript1.5">

function f1(str)
	{
var instr;		
if(str=="Vidya School of Business"){	instr= "<option value='Master in Business Administration' >Master in Business Administration</option>"}	
else if(str=="Vidya International School of Business"){instr= "<option value='Post Graduate Diploma in Management' >Post Graduate Diploma in Management</option>"}	
else if(str=="Vidya College of Engineering"){instr= "<option value='Computer Science and Engineering' >Computer Science and Engineering</option><option value='Information Technology' >Information Technology</option><option value='Electronics and Communication Engineering' >Electronics and Communication Engineering</option><option value='Mechanical Engineering' >Mechanical Engineering</option><option value='Civil Engineering' >Civil Engineering</option><option value='Electrical and Electronics Engineering' >Electrical and Electronics Engineering</option><option value='Polytechnic CSE' >Polytechnic CSE</option><option value='Polytechnic ME' >Polytechnic ME</option>"}		
else if(str=="Vidya Institute of Creative Teaching"){instr= "<option value='BBA' >Bachelor in Business Administration</option><option value='BCA' >Bachelor in Computer Application</option> <option value='BEd' >Bachelor in Education</option> <option value='BTC' >Diploma In Elementary Education</option> "}
else if(str=="Vidya Institute of Fashion Technology"){instr= "<option value='Bachelor of Fashion & Apparel Design' >Bachelor of Fashion & Apparel Design</option><option value='Bachelor of Fine Arts' >Bachelor of Fine Arts</option><option value='Diploma in Fashion Design' >Diploma in Fashion Design</option>"}
document.getElementById('branch').innerHTML=instr;
	}
function toupper(str,id)
	{		
var upper=str.toUpperCase();
document.getElementById(id).value=upper;
	}	
	
</script>
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                   <img src="assets\img\logo.png"  />
                </a>
            </div>
            <?php   include("include/side_nav.php");    ?>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Visitor Management System</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                          <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    
                                    <p class="hidden-lg hidden-md">&nbsp;</p>
                                </a>
                            </li>
                        </ul>
                      
                    </div>
                </div>
            </nav>