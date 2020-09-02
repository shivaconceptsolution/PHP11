<?php

$arr = array("C",1200,"CPP",3450,"DS",56700,79800,"welcome",23.45);

for($i=0;$i<count($arr);$i++)
{
	echo $arr[$i]."<br>";
}

$arr = array(12,23,34,11,67,78,88,98);

for($i=count($arr)-1;$i>=0;$i--)
{
    echo $arr[$i],"<br>";
}

?>