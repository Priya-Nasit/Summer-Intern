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
 background-image: url("<?php echo base_url(); ?>assets/images/b10.jpg");
 color: white;
}
</style>
<?php
 
//$url = "?" . $query_string;
foreach ($item as $row) 
{

?>  
<title>Update your form</title>

  
<div class="container">

 <div class="page-header">
  <h2>Update!!</h2><br>
 </div>

<div class="panel panel-default">
   <div class="panel-body"> 

<form class="form" method="post" action="<?php echo base_url('admin/security_lc_password_change_update/'.$row['lc_id']);?>">

<div class="form-group">
  
    <div class="col-sm-10">LC Id:-     <?php echo $row['lc_id'] ?></div></div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Subadmin Password</lable>
      <div class="col-sm-6"><input type="text" name="lc_password" class="form-control"  value="<?php echo $row['lc_password'] ?>" ></div>
    </div>


    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-primary">Update Password</button>
    </div>
    </div>


</form>
</div>
</div>
</div>

<?php
}
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
include 'footer_fixed.php';
?>
