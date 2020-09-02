<?php
$c=0;
for($num=2;$num<30;$num++)
{
  for($i=2;$i<$num;$i++)
  {
  	   if($num%$i==0)
  	   {
  	   	  break;
  	   }
  }
  if($num==$i)
  {
  	echo $num." ";
  	$c++;
  	if($c==1 || $c==3 || $c==6)
  	echo "<br>";
  }


}







?>