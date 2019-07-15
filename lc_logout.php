<?php
include 'admin_index.php';

if(isset($_SESSION['lc_id']))
{
  echo "<script>
       alert('LC logout!!');
       window.location.href='admin_index';
       </script>";
       unset($_SESSION['lc_id']);
}
exit();

?>
