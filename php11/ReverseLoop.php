<?php
$num=12345;
$num1=0;
while($num!=0)
{
   $rem = $num%10; //1
   $num1 = $num1*10+$rem ; //54321
   $num=(int)($num/10); //0
}

echo $num1;




?>
