<?php
if(isset($_SESSION['email']))
{
     if(isset($_SESSION['Ep_no']))
  {
?>
<?php
include 'user_dashboard.php';
?>
<!--<style type="text/css">
body
{
  margin: 0;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/b13.jpg");
 color: white;
}
</style>-->
<?php
 
//$url = "?" . $query_string;
foreach ($item as $row) 
{
 if($row['email']==$_SESSION['email'])
{
?>  
<title>Update your form</title>

  
<div class="container">

 <div class="page-header">
  <h2>Update!!</h2><br>
 </div>

<div class="panel panel-default">
   <div class="panel-body"> 

<form class="form" method="post" action="<?php echo base_url('User/user_update_details/'.$row['email']);?>">

<div class="form-group">
    <div class="col-sm-10">FirstName:-     <?php echo $row['firstname'] ?></div></div>

    <div class="form-group">
    <div class="col-sm-10">LastName:-     <?php echo $row['lastname'] ?></div></div>

    <div class="form-group">
    <div class="col-sm-10">Email:-     <?php echo $row['email'] ?></div></div>
        
    <div class="form-group">
      <lable class="control-label col-sm-2" >Mentor Name</lable>
      <div class="col-sm-6"><input type="text" name="mentor_name" class="form-control"  value="<?php echo $row['mentor_name'] ?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >HOD Name</lable>
      <div class="col-sm-6"><input type="text" name="Hod_name" class="form-control"  value="<?php echo $row['Hod_name'] ?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Plant</lable>
      <div class="col-sm-6"><input type="text" name="plant" class="form-control"  value="<?php echo $row['plant'] ?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Project Title</lable>
      <div class="col-sm-6"><input type="text" name="project_title" class="form-control"  value="<?php echo $row['project_title'] ?>" ></div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-success">Update Details</button>
    </div>
    </div>


</form>
</div>
</div>
</div>

<?php
}
}
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