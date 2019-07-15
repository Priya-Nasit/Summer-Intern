<?php if(isset($_SESSION['email']))
{
?>
<?php
include 'user_dashboard.php';
?>
<div class="container">
<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
  <h4 style="color: red">Note*:Here Colored Row Show Your Today's Customer's Feedback List</h4><br>
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
    <th style="background-color:#6c757d">Username</th>
    <th style="background-color:#6c757d">EP No.</th>
    <th style="background-color:#6c757d">Plant</th>
    <th style="background-color:#6c757d">Project</th>
    <th style="background-color:#6c757d">date</th>
    <th style="background-color:#6c757d">In Time</th>
    <th style="background-color:#6c757d">Out Time</th>
    <th style="background-color:#6c757d">Attendance</th>
    <th style="background-color:#6c757d">Mentor Update Date</th>
    <th style="background-color:#6c757d">Mentor Update Time</th>
     
  </tr>    
  </thead>
 <div align="center">
 <?php 
 date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');
 foreach($item as $row)
 {
    echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     
     if($row['date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['username'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['Ep_no'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['plant'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['project'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['in_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['out_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['attendance'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['mentor_update_date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['mentor_update_time'] . "</td>";
   }
 else
     {
     echo "<td>" . $row['username'] . "</td>";
     echo "<td>" . $row['Ep_no'] . "</td>";
     echo "<td>" . $row['plant'] . "</td>";
     echo "<td>" . $row['project'] . "</td>";
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['in_time'] . "</td>";
     echo "<td>" . $row['out_time'] . "</td>";
     echo "<td>" . $row['attendance'] . "</td>";
     echo "<td>" . $row['mentor_update_date'] . "</td>";
     echo "<td>" . $row['mentor_update_time'] . "</td>";
    
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
</div>
</body>
</html>

<?php
}
else
{
  redirect("User/user_login");
}
?>