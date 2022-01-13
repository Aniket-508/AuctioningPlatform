<?php
ob_start();
session_start();
include 'database.php';

 $admin=$_POST['name'];
 $password=$_POST['pass']; 
 
 
   $a="SELECT * FROM `user_registration` WHERE  email='".$admin."' and pass='".$password."'"; 
  $res=mysql_num_rows(mysql_query($a));		 																																																													
  if($res)
  {
  //echo "ok";
  $_SESSION['name']=$admin;  
  header("location:user_profile.php");
  } 
  
  else
  {
  echo "invalid user id and password";
  }
  ?>