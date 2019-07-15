<?php
include 'admin_index.php';


if(isset($_SESSION['superadmin_id']))
{
  echo "<script>
       alert('Subadmin logout!!');
       window.location.href='admin_index';
       </script>";
       unset($_SESSION['superadmin_id']);
}
exit();

?>

