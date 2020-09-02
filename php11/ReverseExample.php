<?php
$num = 78912;

$a = $num%10;  //5
$num = (int)($num/10); //1234.5
$b = $num%10;  //4
$num = (int)($num/10);  //123
$c = $num%10; //3
$num = (int)($num/10);  //12
$d = $num%10;  //2
$e = (int)($num/10);  //1
$rev = $a*10000+$b*1000+$c*100+$d*10+$e*1;
print($rev);

?>




