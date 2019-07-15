<?php
if(isset($_SESSION['admin_name']))
{
  if(isset($_SESSION['security_id']))
  {
?>
<?php
include 'admin_dashboard.php';
?>
<style type="text/css">
  body
{
  margin: 0;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/.jpg");
}
</style>
<div class="container">
<div class="content">
  <h4 style="color: black;text-align: center"><u>Temporary Pass Request</u></h4><br>
   <h5 style="color: red">Note*:Here Colored Row Show Your Today's request List</h5>
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
    <th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">Firstname</th>
    <th style="background-color:#6c757d">Lastname</th>
    <th style="background-color:#6c757d">Email</th>
    <th style="background-color:#6c757d">Contact</th>
    <th style="background-color:#6c757d">Request No</th>
    <th style="background-color:#6c757d">Adhar/Licenses No.</th>
     <th style="background-color:#6c757d">Extra Day</th>
    <th style="background-color:#6c757d">Username</th>  
    <th style="background-color:#6c757d">Password</th>
    <th style="background-color:#6c757d">Date</th>
    <th style="background-color:#6c757d">Time</th>
    <th style="background-color:#6c757d">Update/Delete</th>
     
  </tr>    
  </thead>
 <div align="center">
 <?php 
 date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');
 foreach($item as $row)
 {
  $validity=$row['validity'];
    echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     
     if($row['date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['id'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['firstname'] . "</td>";
      echo "<td style='background-color:#cff01a7a'>" . $row['lastname'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['email'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['contact'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['request_no'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['adhar_licenses_no'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['validity'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['username'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['password'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['time'] . "</td>";

      $new_date=date('Y-m-d', strtotime($row['date']. " + $validity days"));

      if($date<=$new_date)
      {
      echo "<td style='background-color:#cff01a7a'>".'<a class="btn btn-info" href="security_update?email=' . $row['email'] . '">Edit' . '</a>'.'<a class="btn btn-success" href="security_delete?id=' . $row['id'] . '">Remove' . '</a>'."</td>";
      }
      else
      {
        echo "<td>"." "."</td>";
      }
     
   }
 else
     {
      echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
     echo "<td>" . $row['contact'] . "</td>";
     echo "<td>" . $row['request_no'] . "</td>";
     echo "<td>" . $row['adhar_licenses_no'] . "</td>";
     echo "<td>" . $row['validity'] . "</td>";
     echo "<td>" . $row['username'] . "</td>";
     echo "<td>" . $row['password'] . "</td>";
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['time'] . "</td>";

     $new_date=date('Y-m-d', strtotime($row['date']. " + $validity days"));

      if($date<=$new_date)
      {
       echo "<td>".'<a class="btn btn-info" href="security_update?email=' . $row['email'] . '">Edit' . '</a>'.'<a class="btn btn-success" href="security_delete?id=' . $row['id'] . '">Remove' . '</a>'."</td>";
      }
      else
      {
        echo "<td>"." "."</td>";
      }
    
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
  redirect("admin/security_loginform");
}
}
else
{
  redirect("admin/admin_login");
}
?>
<?php
include 'footer.php';
?>

