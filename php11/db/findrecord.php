<?php

$id = $_REQUEST['q'];
//echo $id;

include_once('conn.php');
$res = mysqli_query($conn,"select * from student where rno=$id");

$x = mysqli_fetch_row($res);


?>
<h1>Are you sure yo want to update record</h1>
<form action="updaterecord.php" method="post">

<table>
	
<tr><td>Rno</td><td><input type="text" name="txtrno" value="<?php echo $x[0]; ?>" readonly></td></tr>
<tr><td>Name</td><td><input type="text" name="txtname" value="<?php echo $x[1]; ?>"></td></tr>
<tr><td>Branch</td><td><input type="text" name="txtbranch" value="<?php echo $x[2]; ?>"></td></tr>
<tr><td>Fees</td><td><input type="text" name="txtfees" value="<?php echo $x[3]; ?>"></td></tr>
<tr><td>Mobile</td><td><input type="text" name="txtmobile" value="<?php echo $x[4]; ?>"></td></tr>

<tr><td><a href="viewrecord.php">Cancel</a></td><td><input type="submit" name="btnupdate" value="Update" /></td></tr>
</table>

</form>