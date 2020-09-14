<style type="text/css">
  table
  {
   width:600px;
  }
  table th
  {
   background-color:yellow;
   color:blue;
   font-size: 25px;
  }
        table td
  {
   background-color:orange;
   color:black;
   font-size: 20px;
   text-align: center;
  }
 </style>
<a href="logout.php"> logout </a>
<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header('location:login.php');
}
echo "Welcome".$_SESSION['aid'];
include_once('conn.php');
$res = mysqli_query($conn,"select * from student");
echo "<table border='1'><tr><th>Rno</th><th>Name</th><th>Branch</th><th>Fees</th><th>Mobile</th></tr>";
while($x = mysqli_fetch_array($res))
{

	echo "<tr><td>".$x[0]. "</td><td>".$x[1]."</td><td> ".$x[2]."</td><td> ".$x[3]. "</td><td> ".$x[4]."</td><td>"."<a href='findrecord.php?q=".$x[0]  ."'>Edit</a></td>"."<td><a href='findrecord1.php?q=".$x[0]."'>Delete</a></td></tr>";
}


echo "</table>";



?>


<a href="StuInfo.php">Add Record</a>