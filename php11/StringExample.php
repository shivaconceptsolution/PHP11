<?php

$x = "hello";
echo strlen($x)."<br>";
echo strrev($x)."<br>";
echo strtoupper($x)."<br>";
echo strtolower($x)."<br>";
echo str_replace('h','m' , $x);
echo "<br>";
$x = array("c","c++","java","php");

echo implode(' ', $x);

$s = "C,C++,JAVA,PHP,.NET,SQL";

$arr = explode(",",$s);

print_r($arr);

?>
