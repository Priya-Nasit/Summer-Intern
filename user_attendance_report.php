<?php if(isset($_SESSION['email']))
{
?>
<?php
include 'user_dashboard.php';
?>
<!--<?php
if(isset($_SESSION['email']))
{
  date_default_timezone_set("Asia/kolkata");
 $date=date('Y-m-d');  
    foreach($item as $row)
      { 
     if($_SESSION['email']==$row['email'])
     {  
     
    }
  }
}
?>-->
 <!--<div class ="form-group">
            <div class="row">
             <div class="col-md-6">
                <h5><label ><b>Project Title:-</b></label>
              <label ><?php echo $_SESSION['project_title'];?></label></h5>
              </div>            

              <div class="col-md-12">
                <h5><label >Plant:-</label>
              <label ><?php echo $_SESSION['plant'];?></label></h5>
              </div>  
            </div>  
          </div>
          <div class ="form-group">
            <div class="row">
             <div class="col-md-12">
                <h5><label >Mentor's Name:-</label>
              <label ><?php echo $_SESSION['mentor'];?></label></h5>
              </div>            

              <div class="col-md-12">
                <h5><label >HOD Name:-</label>
              <label ><?php echo $_SESSION['hod'];?></label></h5>
              </div>  
            </div>  
          </div>-->

<style type="text/css">
  body
{
  margin: 0;
 background-size: 100%;
 background-size: cover;

 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/schedule2.jpg");
}
</style>

<?php if(isset($_SESSION['email']))
{
?>
<div class="container">
<div class="content"><br>
  <h3 style="color: black;text-align: center"><u>Attendance Report</u></h3><br>
   <h5 style="color: red"><b>Note*:Here Colored Row Show Your Today's Attendance</b></h5>  
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  
  <tr>
    <th style="background-color:#6c757d">Mentor Name</th>
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
     if($_SESSION['email']==$row['email'])
     {  
?>
  
     <?php
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
      if($row['date']==$date)
     {
      echo "<td style='background-color:#cff01a7a'>" . $row['mentor_name'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['attendance'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['in_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['out_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['remark'] . "</td>"; 
    }
    else
    {
      echo "<td>" . $row['mentor_name'] . "</td>";
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['attendance'] . "</td>";
     echo "<td>" . $row['in_time'] . "</td>";
     echo "<td>" . $row['out_time'] . "</td>";
     echo "<td>" . $row['remark'] . "</td>";
    }    
   echo "</tr>";
  
 }
 }
 //echo $count;
 ?>  
          </tbody>
        </table>
      </div>
      <form method="post" action="">
          <div class="container-login100-form-btn" align="center">
          <input type="submit" value="Print" name="submit" class="btn btn-primary" >
          </div>
          <!-- Trigger the modal with a button -->
 </form>
      <!-- /Panel Content -->
    </div>
  </div>
  <!-- /Main area -->
</div>

</div>
</div><br><br><br>
</body>
</html>

 <?php 
     if(isset($_POST['submit']))
      {  
      ?>      
  <button type="button" align="center" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Show Details</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" id="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
         
         <title>Attendance Report</title>
<style type="text/css">
  body{
  font-family: "Lato",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.72222;
  }

  .tax-data {
    background: #F7F7F7;
    padding: 20px;
    font-size: 18px;
    margin-left: 90px;
  }

    .tax-data .sub-title {
    text-align: center;
    font-size: 30px;
  margin:auto;    
  }

  p {
    margin: 0;
    padding: 0;
    font-weight: normal;
    line-height: normal;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  }

  .tax-data .left {
    padding: 10px;
    display: inline-block;
  } 

  .tax-data .right {
    padding: 10px;
    display: inline-block;
    float: right;
    color: #38acc9;
    position: absolute;
    right: 32px;
}

  .data-btn{
  text-align:center;
  }
</style>

<div class="tax-data col-md-10 "><br><br><br>
<p class="sub-title">Attendance Report</p>
            <div>
                
                <div class="container">
<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
     <th style="background-color:#6c757d">Mentor Name</th>
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
     if($_SESSION['email']==$row['email'])
     {  
?>
     <?php
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
      if($row['date']==$date)
     {
      echo "<td style='background-color:#cff01a7a'>" . $row['mentor_name'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['attendance'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['in_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['out_time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['remark'] . "</td>"; 
    }
    else
    {echo "<td>" . $row['mentor_name'] . "</td>";
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['attendance'] . "</td>";
     echo "<td>" . $row['in_time'] . "</td>";
     echo "<td>" . $row['out_time'] . "</td>";
     echo "<td>" . $row['remark'] . "</td>";
    }    
   echo "</tr>";
 }
 }
 //echo $count;
 ?>  
          </tbody>
        </table>
      </div>
    </table>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal-footer">
            <input id="pdf-button" type="button" value="Download PDF" onclick="downloadPDF()" />
              <!--<button onclick="generate()">Generate PDF</button>-->

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
 <?php
     }
?>

<?php
}
?>

<script src="https://docraptor.com/docraptor-1.0.0.js"></script>
<script>
    var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
        test: true, // test documents are free, but watermarked
        type: "pdf",
        document_content: document.querySelector('#modal-dialog').innerHTML, // use this page's HTML
        // document_content: "<h1>Hello world!</h1>",               // or supply HTML directly
        // document_url: "http://example.com/your-page",            // or use a URL
        // javascript: true,                                        // enable JavaScript processing
        // prince_options: {
        //   media: "screen",                                       // use screen styles instead of print styles
        // }
      })
    }
  </script>
  

<?php
}
else
{
 redirect("User/user_login");
}
?>
<?php
include 'footer.php';
?>