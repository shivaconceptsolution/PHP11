<?php
if(isset($_POST['btnsubmit']))
{
$r = $_POST["txtrno"];
$name = $_POST["txtname"];
$branch = $_POST["txtbranch"];
$fees = $_POST["txtfees"];
$mobile = $_POST["txtmobile"];

include_once('conn.php');
$r = mysqli_query($conn,"insert into student(rno,name,branch,fees,mobile) values('$r','$name','$branch',$fees,'$mobile')");
if(mysqli_affected_rows($conn)>0)
{
	echo "Insert Successfully";
}
else
{
	echo "Insert not Successfully";
}
}
else
{
	header('location:stuinfo.php');
}





?>