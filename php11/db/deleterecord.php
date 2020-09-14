<?php

$rno = $_POST["txtrno"];
$name = $_POST["txtname"];
$branch = $_POST["txtbranch"];
$fees = $_POST["txtfees"];
$mobile = $_POST["txtmobile"];
include_once('conn.php');

$res = mysqli_query($conn,"delete from student where rno=$rno");
if(mysqli_affected_rows($conn)>0)
{
	header('location:viewrecord.php');
}
else
{
	echo "delete not Successfully";
}




?>