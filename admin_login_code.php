<?php

include 'database.php';

 $admin=$_POST['name'];
 $password=$_POST['pwd']; 
 

   $a="SELECT * FROM `admin` WHERE  admin='".$admin."' and pwd='".$password."'"; 
  $res=mysql_num_rows(mysql_query($a));		 																																																													
  if($res)
  {
  //echo "ok";
  header("location:admin_profile.php");
  } 
  
  else
  {
  echo "invalid user id and password";
  }
  ?>