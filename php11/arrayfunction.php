<?php

$x = array(12,23,34,11,67,78);
print_r($x);

echo max($x)."<br>";
echo min($x)."<br>";
echo array_sum($x)."<br>";
sort($x);
foreach($x as $y)
{
 echo $y."<br>";
}

if(in_array(121,$x))
{

 echo "found";
}
else
{
   echo "not found";
}

$x=array();

if(is_array($x))
{
    echo "array";

}
else
{
  echo "not array";

}

$a = array(10,11,12);

$b = array(45,67,89,10);

$c = array_merge($a,$b);

print_r($c);

$a = array(10,11,12);

$b = array(45,67,89,10);

$c = array_intersect($a,$b);

print_r($c);
$a = array(10,11,12);

$b = array(45,67,89,10);

$c = array_diff($a,$b);

print_r($c);

$d = array(2,3,4,2,7,9,11,90,3,4,4,4,5);

$d1 = array_unique($d);

print_r($d1);

$e = array_splice($d, 6);

print_r($e);
echo "<br>";
$d = array(2,3,4,2,7,9,11,90,3,4,4,4,5);
$e1 = array_chunk($d, 6);

print_r($e1);

$key = array("rno","sname");

$val = array(1001,"xyz");

$data = array_combine($key,$val);

print_r($data);




?>