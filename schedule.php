<?php if(isset($_SESSION['email']))
{
?>
<?php
include 'user_dashboard.php';
?>
<html>
<head>
<style type="text/css">
  body
{
  margin: 0;
 background-size: 100%;
 background-size: cover;

 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/schedule1.jpg");
}
</style>
</head>

<body>
<h2 align="center"><u><b>Schedule</b></u></h2>
<section id="d1" ></section>
<table  style="background-color:#e6f3ff" align="center" border="2" cellpadding="10ox" cellspacing="7px">
<?php 
date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');
//echo $date=date('Y-m-d')."<br>";
//echo $_SESSION['plant'];
foreach($item as $row)
  { 
$date_from=date('Y-m-d', strtotime($row['date_from']));
$date_to=date('Y-m-d', strtotime($row['date_to']));

  if($_SESSION['mentor']==$row['mentor_name'] && $_SESSION['plant']==$row['plant'] )
    {
    	//$flag=0;
   if($date_from<=$date && $date_to>= $date)
  {	
	//$flag=1;
	//echo $flag;
?>
<tr>
<td>Time</td>
<td>Monday</td>
<td>Tuesday</td>
<td>Wednesday</td>
<td>Thrusday</td>
<td>Friday</td>
<td>Saturday</td>
</tr>

<tr>
<td>9:00-10:00</td>
<td><?php echo $row['m1']; ?></td>
<td><?php echo $row['t1']; ?></td>
<td><?php echo $row['w1']; ?></td>
<td><?php echo $row['th1']; ?></td>
<td><?php echo $row['f1']; ?></td>
<td rowspan="9"> OFF</td>
</tr>

<tr>
<td>10:00-11:00</td>
<td><?php echo $row['m2']; ?></td>
<td><?php echo $row['t2']; ?></td>
<td><?php echo $row['w2']; ?></td>
<td><?php echo $row['th2']; ?></td>
<td><?php echo $row['f2']; ?></td>
</tr>

<tr>
<td>11:00-12:00</td>
<td><?php echo $row['m3']; ?></td>
<td><?php echo $row['t3']; ?></td>
<td><?php echo $row['w3']; ?></td>
<td><?php echo $row['th3']; ?></td>
<td><?php echo $row['f3']; ?></td>
</tr>

<tr>
<td>12:00-1:00</td>
<td><?php echo $row['m4']; ?></td>
<td><?php echo $row['t4']; ?></td>
<td><?php echo $row['w4']; ?></td>
<td><?php echo $row['th4']; ?></td>
<td><?php echo $row['f4']; ?></td>
</tr>



<tr>
<td>1:00-2:00</td>
<td><?php echo $row['m5']; ?></td>
<td><?php echo $row['t5']; ?></td>
<td><?php echo $row['w5']; ?></td>
<td><?php echo $row['th5']; ?></td>
<td><?php echo $row['f5']; ?></td>
</tr>

<tr>
<td>2:00-3:00</td>
<td><?php echo $row['m6']; ?></td>
<td><?php echo $row['t6']; ?></td>
<td><?php echo $row['w6']; ?></td>
<td><?php echo $row['th6']; ?></td>
<td><?php echo $row['f6']; ?></td>
</tr>

<tr>
<td>3:00-4:00</td>
<td><?php echo $row['m7']; ?></td>
<td><?php echo $row['t7']; ?></td>
<td><?php echo $row['w7']; ?></td>
<td><?php echo $row['th7']; ?></td>
<td><?php echo $row['f7']; ?></td>
</tr>


<tr>
<td>4:00-5:00</td>
<td><?php echo $row['m8']; ?></td>
<td><?php echo $row['t8']; ?></td>
<td><?php echo $row['w8']; ?></td>
<td><?php echo $row['th8']; ?></td>
<td><?php echo $row['f8']; ?></td>
</tr>

<tr>
<td>5:00-6:00</td>
<td><?php echo $row['m9']; ?></td>
<td><?php echo $row['t9']; ?></td>
<td><?php echo $row['w9']; ?></td>
<td><?php echo $row['th9']; ?></td>
<td><?php echo $row['f9']; ?></td>
</tr>
<?php
}
/*if($flag==0)
{*/
	?>
<!--	<h4 style="text-align:center"><u><b>Intern Deatils </b></u></h4>-->
<?php
//}
}
?>
<?php
}
?>
</table><br>
</body>
</html>
<?php
}
else
{
 redirect("User/user_login");
}
?>
<?php
include 'footer_fixed.php';
?>