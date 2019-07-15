<?php
include 'admin_index.php';

if(isset($_SESSION['security_id']))
{
  echo "<script>
       alert('Security logout!!');
       window.location.href='admin_index';
       </script>";
       unset($_SESSION['security_id']);
}
exit();
?>
