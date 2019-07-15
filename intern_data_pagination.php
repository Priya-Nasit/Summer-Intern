<?php
if(isset($_SESSION['admin_name']))
{
   if(isset($_SESSION['lc_id']))
  {
?>
<?php
include 'admin_dashboard.php';
?>
<div class="container">
<div class="content">
    <h4 style="color: black;text-align: center"><u>Intern's Details</u></h4><br>
  <h5 style="color: red">Note*:Here Colored Row Show Your Today's New Intern's List</h5>
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
   <th style="background-color:#6c757d">FirstName</th>
    <th style="background-color:#6c757d">LastName</th>
    <th style="background-color:#6c757d">Email</th>
    <th style="background-color:#6c757d">Contact</th>
    <th style="background-color:#6c757d">Birth Date</th>
    <th style="background-color:#6c757d">Height</th>
    <th style="background-color:#6c757d">Weight</th>
    <th style="background-color:#6c757d">Identification Mark</th>
    <th style="background-color:#6c757d">Father Name</th>
    <th style="background-color:#6c757d">Mother Name</th>
    <th style="background-color:#6c757d">Nationality</th>
    <th style="background-color:#6c757d">Religion</th>
    <th style="background-color:#6c757d">Cast</th>
    <th style="background-color:#6c757d">Gender</th>
    <th style="background-color:#6c757d">Adhar No.</th>
    <th style="background-color:#6c757d">Licenses No.</th>
    <th style="background-color:#6c757d">Country</th>
    <th style="background-color:#6c757d">state</th>
    <th style="background-color:#6c757d">Address</th>
    <th style="background-color:#6c757d">Pincode</th>
    <th style="background-color:#6c757d">Ref1 Name</th>
    <th style="background-color:#6c757d">Ref1 Address</th>
    <th style="background-color:#6c757d">Ref1 Contact</th>
    <th style="background-color:#6c757d">Ref2 Name</th>
    <th style="background-color:#6c757d">Ref2 Address</th>
    <th style="background-color:#6c757d">Ref 2Contact</th>
    <th style="background-color:#6c757d">Date</th>
    <th style="background-color:#6c757d">Time</th>  
  </tr>    
  </thead>
 <div align="center">
 <?php 
 date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');
foreach ($results as $row) 
{ 
    echo "<tr>";
   if($row->date==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row->firstname . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->lastname . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->email . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->contact . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->birth_date . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->height. "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->weight . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->identification_mark . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->father_name . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->mother_name . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->nationality . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->religion . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->cast . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->gender . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->adhar_no. "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->licenses_no . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->country . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->state . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->address . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->pincode . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->ref1_name . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->ref1_address . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->ref1_contact . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->ref2_name . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->ref2_address . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->ref2_contact . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->date . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row->time . "</td>";
   }
 else
     {
     echo "<td>" . $row->firstname . "</td>";
     echo "<td>" . $row->lastname . "</td>";
     echo "<td>" . $row->email. "</td>";
     echo "<td>" . $row->contact . "</td>";
     echo "<td>" . $row->birth_date . "</td>";
     echo "<td>" . $row->height . "</td>";
     echo "<td>" . $row->weight . "</td>";
     echo "<td>" . $row->identification_mark . "</td>";
     echo "<td>" . $row->father_name . "</td>";
     echo "<td>" . $row->mother_name . "</td>";
     echo "<td>" . $row->nationality . "</td>";
     echo "<td>" . $row->religion . "</td>";
     echo "<td>" . $row->cast . "</td>";
     echo "<td>" . $row->gender . "</td>";
     echo "<td>" . $row->adhar_no . "</td>";
     echo "<td>" . $row->licenses_no . "</td>";
     echo "<td>" . $row->country . "</td>";
     echo "<td>" . $row->state . "</td>";
     echo "<td>" . $row->address . "</td>";
     echo "<td>" . $row->pincode . "</td>";  
     echo "<td>" . $row->ref1_name . "</td>";
     echo "<td>" . $row->ref1_contact . "</td>";
     echo "<td>" . $row->ref1_address . "</td>";
     echo "<td>" . $row->ref2_name . "</td>";
     echo "<td>" . $row->ref2_contact . "</td>";
     echo "<td>" . $row->ref2_address . "</td>";
     echo "<td>" . $row->date . "</td>";
     echo "<td>" . $row->time . "</td>";
  
   }
  echo "</tr>";
}
?>
 </tbody>
                </table>
                </div>
<?php if (isset($links)) 
{ 
    echo $links;
    ?>
<?php 
} 
?>
            
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
  redirect("admin/lc_login");
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
