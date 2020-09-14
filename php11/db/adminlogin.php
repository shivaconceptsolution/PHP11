<?php
session_start();
$user = $_REQUEST['txtuser'];
$pass = $_REQUEST['txtpass'];
include_once('conn.php');
$res = mysqli_query($conn,"select * from admin where userid='$user' and password='$pass'");
if(mysqli_num_rows($res)>0)
{
 $_SESSION['aid']=$user;	
 header('location:viewrecord.php');
}
else
{
 echo "incorrect userid and password";
}



?> 