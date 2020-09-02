<?php

$s="MANISH";

for($i=1;$i<=6;$i++)       // 3
{
    
    for($k=1;$k<$i;$k++)  //2
     {
          
          echo "&nbsp;&nbsp;&nbsp;&nbsp;";
         
     }
    for($j=$i-1;$j<6;$j++)  // 2 to 5
     {
         echo $s[$j];
        
     }  
    

    echo "<br>";
}

?>











