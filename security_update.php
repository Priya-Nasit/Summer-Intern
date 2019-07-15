<?php
if(isset($_SESSION['admin_name']))
{
?>
<?php
include'admin_dashboard.php';
?>
<?php
 
//$url = "?" . $query_string;
foreach ($item as $row) {
  
  //if($id==$row['id'])
{
?>  
<title>Update your form</title>

  
<div class="container">

 <div class="page-header">
  <h2>Update!!</h2><br>
 </div>

<div class="panel panel-default">
   <div class="panel-body"> 

<form class="form" method="post" action="<?php echo base_url('admin/security_update_data/'.$row['email']);?>">

<div class="form-group">
	<div class="col-sm-10">FirstName:-     <?php echo $row['firstname'] ?></div></div>

    <div class="form-group">
	<div class="col-sm-10">LastName:-     <?php echo $row['lastname'] ?></div></div>

	<div class="form-group">
	<div class="col-sm-10">Email:-     <?php echo $row['email'] ?></div></div>
		
    <div class="form-group">
      <lable class="control-label col-sm-2" >Icard Validity</lable>
      <div class="col-sm-10"><input type="text" name="validity" class="form-control"  value="<?php echo $row['validity'] ?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Username</lable>
      <div class="col-sm-10"><input type="text" name="username" class="form-control"  value="<?php echo $row['username'] ?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Password</lable>
      <div class="col-sm-10"><input type="text" name="password" class="form-control"  value="<?php echo $row['password'] ?>" ></div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
    </div>
    </div>


</form>
</div>
</div>
</div>


<?php
}
}
?>
<?php
}
else
{
  redirect("admin/admin_login");
}
?>