<?php if(isset($_SESSION['email']))
{
?>
<?php
include 'user_dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  

  <div class="container-login100-form-btn" align="center">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ep No.</button></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h4 style="color: red">Welcome <u><?php echo $_SESSION['firstname'];echo "  ".$_SESSION['lastname']?>!!</u></h4><br>
     <?php
     foreach($item as $row)
      { 
     if($_SESSION['email']==$row['email'])
     { 
     	 $_SESSION['Ep_no']=$row['id'];
     ?>
     <p>Your Ep No is:<?php echo $_SESSION['Ep_no'];?></p>

     <?php
     }
      }
     ?>
     <?php
     foreach($item1 as $row)
      { 
     if($_SESSION['email']==$row['email'])
     { 
       $_SESSION['plant']=$row['plant'];
       $_SESSION['mentor']=$row['mentor_name'];
       $_SESSION['hod']=$row['Hod_name'];
       $_SESSION['project_title']=$row['project_title'];

     ?>
     <p>Plant Name:<?php echo $_SESSION['plant'];?></p>
     <p>Mentor Name:<?php echo $_SESSION['mentor'];?></p>
     <p>HOD Name :<?php echo $row['Hod_name'];?></p>
     <p>Project Name:<?php echo $row['project_title'];?></p>

     <?php
     }
      }
     ?>
        </div>
        

        <?php
         if(!isset($_SESSION['Ep_no']))
         {
        ?>
        <h5 style="color: blue"><u>NOTICE:</u></h5><h6 style="color:black">If Your Ep No is not generated,then to generate Ep no you have to fill intern details form compulsory</h6><br>
        <a href='intern_details' style="text-align: center"><u style="color: red;font-size:20px;">Intern Details</u></a>
        <?php
         }
         ?>

         <?php 
         if(isset($_SESSION['Ep_no']))
         {
          if(!isset($_SESSION['plant']) && !isset($_SESSION['mentor']))
          {
        ?>
      <h5 style="color: blue"><u>NOTICE:</u></h5><h6 style="color:black">If Your Mentor and Plant Details is not generated,then to fill below form compulsory</h6><br>
        <a href='internship_details' style="text-align: center" ><u style="color: red;font-size:20px;">Internship Details</u></a>
        <?php
         }
       }
         ?> 

         <?php 
         if(isset($_SESSION['Ep_no']) && isset($_SESSION['plant']) && isset($_SESSION['mentor']))
         {
        ?>
      <h5 style="color: blue"><u>NOTICE:</u></h5><h6 style="color:black">If Your Details related to Internship change then you can update details by fill below form. </h6><br>
        <a href='user_details' style="text-align: center" ><u style="color: red;font-size:20px;">Update Details</u></a>
        <?php
         }
         ?> 
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vision</title>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/blog-post.css" rel="stylesheet">
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


  </head>

  <body>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="content">

    <div class="row">
   <!-- <h3><u>ABOUT OUR TEAM</u></h3><br><br>
    <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="<?php echo base_url(); ?>assets/images/uu1.jpg" class="img-responsive" style="width:100%;height:170px" alt="Image"></div>
        <div class="panel-footer" style="color:blue;text-align: center;"><b>Samarth Lambert<br>CEO & Founder</b></div>
      </div>
    </div>

    <div class="col-sm-3"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="<?php echo base_url(); ?>assets/images/uu2.jpg" class="img-responsive" style="width:100%;height:170px" alt="Image"></div>
        <div class="panel-footer" style="color:blue;text-align: center;"><b>Brian Byer<br> Business Developer</b></div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="<?php echo base_url(); ?>assets/images/uu4.jpg" class="img-responsive" style="width:100%;height:170px" alt="Image"></div>
        <div class="panel-footer" style="color:blue;text-align: center;"><b>Simon Mickle<br>Head Of Paid Media</b></div>
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="<?php echo base_url(); ?>assets/images/uu3.jpg" class="img-responsive" style="width:100%;height:170px" alt="Image"></div>
        <div class="panel-footer" style="color:blue;text-align: center;"><b>Keith Negrin<br>Head Of Product Strategy</b></div>
      </div>
    </div>
  </div></div><br>  <br><br>-->

          <!-- Title -->
<h3><u>Instruction For Vocational Trainee</u></h3>
<div id="about" class="container-fluid"><br>
  <div class="row">

    <div class="col-sm-12" style="font-size: 17px">
      <div  class="c1" style="color: black">
        <b>1.</b>&nbsp;&nbsp;Trainee has to maintain and follow the safety and security requirement/System of the company.<br>

 <b>2.</b>&nbsp;&nbsp;Access or copying of any confidential document of the company is strictly prohibited.<br>
<b>3.</b>&nbsp;&nbsp;Attendance of the trainee is to be verified by mentor on daily basis.<br>
<b>4.</b>&nbsp;&nbsp;Attendance of vocational trainnes has to be certified by LC Rep. weekly and advised to report LC at least once in a week.<br>
<b>5.</b>&nbsp;&nbsp;For taking any leave,trainee has to submit a written application to LC duly approved by Mentor.<br>
<b>6.</b>&nbsp;&nbsp;Trainee has to email the project report by Mentor to LC in 2 days advance.<br>
<b>7.</b>&nbsp;&nbsp;Gate Pass and PPEs (If issued by company) to be submitted to LC on last date of the training.Training completion certificate will be issued by LC.<br>
<b>8.</b>&nbsp;&nbsp;Gate Pass and PPEs (if issued by company) to be submitted to LC..<br><br>
<b style="font-size: 18px">For any queries/assistance pls contact Learning centre Help desk (0288 40 11132)</b>
</div>
      </div>
    
  </div><br><br>
</div>

          <!-- Title -->
         
     <hr>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
</div>

</div>
</div><br><br><br>
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
include 'footer.php';
?>