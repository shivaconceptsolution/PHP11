<?php

$arr = array("C",1200,"CPP",3450,"DS",56700,79800,"welcome");

for($i=count($arr)-1;$i>=0;$i--)
{
	echo $arr[$i]."<br>";
}

foreach ($arr as $arr1) {
	echo $arr1,"<br>";
}

?>