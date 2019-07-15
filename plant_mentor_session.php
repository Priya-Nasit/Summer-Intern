<?php
     foreach($item as $row)
      { 
     if($_SESSION['email']==$row['email'])
     { 
      $_SESSION['plant']=$row['plant'];
      $_SESSION['mentor']=$row['mentor_name'];
     }
      }
     ?>
       