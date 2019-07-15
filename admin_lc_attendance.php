<?php
if(isset($_SESSION['admin_name']))
{
?>
<?php
include'admin_dashboard.php';
?>
<div class="container">
<div class="content">
 <?php
foreach($item as $row)
  { 
 ?> 
<?php
}
?>
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
   <h5 style="color: red"><b>Note*:Here Colored Row Show Your Today's Attendance Report</b></h5>
  
  <tr>
    <th style="background-color:#6c757d">Date</th>
    <th style="background-color:#6c757d">Attendance</th>
    <th style="background-color:#6c757d">In Time</th>
    <th style="background-color:#6c757d">Out Time</th>
    <th style="background-color:#6c757d">Remark</th>
  </tr>    
  </thead>
 <div align="center">
 <?php
 date_default_timezone_set("Asia/kolkata");
 $date=date('Y-m-d');  
    foreach($item as $row)
      { 
?>
     <?php
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
      if($row['date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['attendance'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['in_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['out_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['remark'] . "</td>"; 
    }
    else
    {
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['attendance'] . "</td>";
     echo "<td>" . $row['in_time'] . "</td>";
     echo "<td>" . $row['out_time'] . "</td>";
     echo "<td>" . $row['remark'] . "</td>";
    }    
   echo "</tr>";
  
 }
 //echo $count;
 ?>  
          </tbody>
        </table>
      </div>
      <!-- /Panel Content -->
    </div>
  </div>
  <!-- /Main area -->
</div>

</div>
</div>
</body>
</html>
<?php
}
else
{
  redirect("admin/admin_login");
}
?>
<?php
include 'footer_fixed.php';
?>

