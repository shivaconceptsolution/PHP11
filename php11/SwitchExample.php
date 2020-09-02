<?php
$op=$_POST['txtinput'];
$option = (ord($op)>=65 && ord($op)<=91)?chr(ord($op)+32):$op;
switch($option)
{
	case 'y':
	
	echo "YES";
	break;
	case 'n':
	
	echo "NO";
	break;
	case 'c':
	
	echo "CANCEL";
	break;
	default:
	echo "INVALID INPUT";
	break;
}





?>