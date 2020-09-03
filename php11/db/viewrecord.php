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

<?php

$conn = mysqli_connect('localhost',"root","","php12batch");
$res = mysqli_query($conn,"select * from student");
echo "<table border='1'><tr><th>Rno</th><th>Name</th><th>Branch</th><th>Fees</th><th>Mobile</th></tr>";
while($x = mysqli_fetch_array($res))
{

	echo "<tr><td>".$x[0]. "</td><td>".$x[1]."</td><td> ".$x[2]."</td><td> ".$x[3]. "</td><td> ".$x[4]."</td></tr>";
}


echo "</table>";



?>


<a href="StuInfo.php">Add Record</a>