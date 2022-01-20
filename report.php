<?php
	
	//Start session
   require 'authentication.php';

    //Set page title
    $pageTitle = 'Log_Sheet Report';

    //PHP INCLUDES
    
   // include 'Includes/functions/functions.php'; 
   // include 'Includes/templates/header.php';

    //TEST IF THE SESSION HAS BEEN CREATED BEFORE

    if(isset($_SESSION['admin_id']))
    {
    	include 'Include/sidebar.php';

    	?>

            <script type="text/javascript">

                var vertical_menu = document.getElementById("vertical-menu");


                var current = vertical_menu.getElementsByClassName("active_link");

                if(current.length > 0)
                {
                    current[0].classList.remove("active_link");   
                }
                
                vertical_menu.getElementsByClassName('dashboard_link')[0].className += " active_link";

            </script>
<head>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">


<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>


 <script language="javascript" type="text/javascript">

<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<body>
<?php //include('navfixed.php');?>

<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">

			    
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="glyphicon glyphicon-signal"></i> Log Sheet Report
			</div>
			<ul class="breadcrumb">
			<li><a href="">Dashboard</a></li> /
			<li class="active">Log_Sheet Report</li>
			</ul>

<form action="log_sheet.php" method="get">

<div class="form-group">
			                    <label class="control-label col-sm-4"><strong></strong></label>
			                    <div class="col-sm-3">
			                      <?php 
			                       $sql = "SELECT user_id, fullname FROM tbl_admin WHERE user_role = 2";
			                       $info = $obj_admin->manage_all_info($sql);   
			                      ?>

			                      <select class="form-control" name="emp" id="emp" >
			                        <option value="">Select Employee</option>

			                        <?php while($rows = $info->fetch(PDO::FETCH_ASSOC)){ ?>
			                        <option value="<?php echo $rows['user_id']; ?>" 
			                        	
			                         ><?php echo $rows['fullname']; ?></option>
			                        <?php } ?>
			                      </select>
			                    </div>
			                   
			                  </div>
<br><br><br>
<center><strong>From : <input type="date" style="width: 223px; padding:14px;" name="d1"  value="<?php echo date('Y-m-d'); ?>" /> To: <input type="date" style="width: 223px; padding:14px;" name="d2"  value="<?php echo date('Y-m-d'); ?>" />
 <button class="btn btn-info" style="width: 123px; height:35px; margin-top:-8px;margin-left:8px;" type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>
</strong></center>
</form>

<div class="clearfix"></div>
</div>
</div>
</div>

</body>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletesales.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
<?php //include('footer.php');?>
	<?php 
	    }
	?>
</html>