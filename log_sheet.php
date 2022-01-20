<?php
	
	require 'authentication.php';
    //Set page title
   //page_name="Edit Task";


    //TEST IF THE SESSION HAS BEEN CREATED BEFORE
include("include/sidebar.php");
    if(isset($_SESSION['admin_id']))
    {
    	
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
<!--<script type="text/javascript" src="tcal.js"></script>-->
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
<?php 
$d1=$_GET['d1'];
		$d2=$_GET['d2'];
		$employee=$_GET['emp'];
		
		$query = "SELECT *
                  FROM tbl_admin 
                  
                  WHERE user_id = $employee
				  ";
                
                  $info = $obj_admin->manage_all_info($query);
                 
                  $num_row = $info->rowCount();
                 
                      while( $row = $info->fetch(PDO::FETCH_ASSOC) ){
		                  $fullname = $row['fullname'];
					  }
			
		?>

<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">

			    
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="fa fa-chart-bar"></i> Log Sheet
			</div>
			<ul class="breadcrumb">
			<li><a href="">Dashboard</a></li> /
			<li class="active">Log Sheet Report</li>
			</ul>

<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="report.php"><button class="btn btn-default btn-large" style="float: none;"><i class="glyphicon glyphicon-backward"></i> Back</button></a>
<button  style="float:right;" class="btn btn-success btn-large"><a href="javascript:Clickheretoprint()"><i class="glyphicon glyphicon-print"></i> Print</button></a>

</div>

<div class="content" id="content">
<div style="font-weight:bold; text-align:center;font-size:20px;margin-bottom: 15px;">
<?php echo $fullname ?> - Log Sheet Report from&nbsp;<?php echo $_GET['d1'] ?>&nbsp;To&nbsp;<?php echo $_GET['d2'] ?>
</div>
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="7%"> Task ID </th>
			<th width="13%"> Title </th>
			<th width="25%"> Description </th>
			
			<th width="10%"> Duration (Weeks) </th>
			<th width="10%"> Duration (Days) </th>
			<th width="12%"> Evaluation </th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		$d1=$_GET['d1'];
		$d2=$_GET['d2'];
		$employee=$_GET['emp'];
		
		
		$sql = "SELECT *
                  FROM task_info 
                  
                  WHERE t_user_id = $employee
				  AND date BETWEEN '$d1' and '$d2'
                  ORDER BY date";
                 
                
                  $info = $obj_admin->manage_all_info($sql);
                 
                  $num_row = $info->rowCount();
                 
                      while( $row = $info->fetch(PDO::FETCH_ASSOC) ){
		                 


echo "<tbody>";
echo "<tr>";
echo "<td>" . $row['task_id'] . "</td>";
echo "<td>" . $row['t_title'] . "</td>";
echo "<td>" . $row['t_description'] . "</td>";
echo "<td>" . $row['t_weeks'] . "</td>";
echo "<td>" . $row['t_days'] . "</td>";
?>

                   <td>
                    <?php  if($row['evaluation'] == 0){
                        echo "Poor ";
                    }elseif($row['evaluation'] == 1){
                       echo "Satisfatory ";
                    }else{
                      echo "Good  ";
                    } ?>
                    
                  </td>
<?php			
}
?>	
	</tbody>
	<thead>
		<tr>
			<th colspan="4" style="border-top:1px solid #999999"> Total Weeks: </th>
			<th colspan="1" style="border-top:1px solid #999999"> 
		<?php	    
		$sql = "SELECT SUM(t_weeks) as tot_weeks, SUM(t_days) as tot_days
                  FROM task_info 
                  
                  WHERE t_user_id = $employee
				  AND date BETWEEN '$d1' and '$d2'
                  ORDER BY date";
                 
                
                  $info = $obj_admin->manage_all_info($sql);
                 
                  $num_row = $info->rowCount();
                 
                      while( $row = $info->fetch(PDO::FETCH_ASSOC) ){
						$tot_weeks = $row['tot_weeks'];
                        $tot_days = $row['tot_days'];						
					  }
					  ?>
			</th>
				<th colspan="5" style="border-top:2px solid #999999">
			<?php echo $tot_weeks ?>
		
				</th>
		</tr>
		<tr>
			<th colspan="4" style="border-top:1px solid #999999"> Total Days: </th>
			<th colspan="1" style="border-top:1px solid #999999"> 
		
			</th>
				<th colspan="5" style="border-top:2px solid #999999">
			<?php echo $tot_days ?>
		
				</th>
		</tr>
	</thead>
</table>
</div>
</div>
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