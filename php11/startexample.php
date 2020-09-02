<?php
for($m=1;$m<=2;$m++)
{
for($i=1;$i<=3;$i++)
{
   for($k=2;$k>=$i;$k--)   # k =2 to 3 
   {
         echo "&nbsp;";
   }
   for($j=1;$j<=2*$i-1;$j++) #j= 1 to 5
   {
       echo " *";
   }
   echo "<br>"; 
 
}
}

?>