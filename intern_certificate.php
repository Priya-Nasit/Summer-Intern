<?php
if(isset($_SESSION['admin_name']))
{
?>
<?php
include 'admin_dashboard.php';
?>
<?php
}
else
{
  redirect("admin/admin_login");
}
?>