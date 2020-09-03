<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="insertioncode.php" method="post">

<input type="text" name="txtrno" placeholder="Enter rno" required="" />
<br><br>
<input type="text" name="txtname" placeholder="Enter name" required="" />
<br><br>
<select name="txtbranch">
<option value="">Select branch</option>
<option value="CS">Computer Science</option>
<option value="IT">Information Technology</option>
<option value="EC">Electronics</option>
<option value="EX">Electrical</option>

</select>
<br><br>
<input type="number" name="txtfees" placeholder="Enter fees" required="" />
<br><br>
<input type="text" name="txtmobile" placeholder="Enter mobile" required="" />
<br><br>
<input type="submit" name="btnsubmit" value="Insert"/>
<br><br>


</form>

<a href="viewrecord.php">View Record</a>
</body>
</html>