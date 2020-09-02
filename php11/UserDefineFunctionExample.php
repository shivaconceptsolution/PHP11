<?php


function add($a,$b)
{
  global $x;   //scope is global means we can use into another function block	
  $x=100;
  echo $a+$b;

}

function sub($a,$b)
{
    global $x; 
   
	echo $x;
	return $a-$b;
}

$x=100;
$y=200;
add($x,$y);

$res = sub(20,2);

echo "<br>".$res;

?>