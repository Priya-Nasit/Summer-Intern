<?php
include 'admin_index.php';

if(isset($_SESSION['admin_name']))
{
  echo "<script>
       alert('Are you sure you want to logout!!');
       window.location.href='admin_index';
       </script>";
       unset($_SESSION['admin_name']);
}
exit();
?>
