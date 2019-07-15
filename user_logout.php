<?php
include 'user_index.php';
include 'footer.php';

if(isset($_SESSION['email']))
{
  echo "<script>
       alert('Are you sure you want to logout!!');
       window.location.href='user_index';
       </script>";
       unset($_SESSION['email']); 
}
if(isset($_SESSION['plant']))
{
unset($_SESSION['plant']);
}
if(isset($_SESSION['hod']))
{
	unset($_SESSION['hod']);
}
if(isset($_SESSION['mentor']))
{
	unset($_SESSION['mentor']);
}
if(isset($_SESSION['project_title']))
{
	unset($_SESSION['project_title']);
}
if(isset($_SESSION['Ep_no']))
{
	unset($_SESSION['Ep_no']);
}

//redirect('auth/dashboard');
exit();

?>