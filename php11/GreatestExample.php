<?php
$a=1000;
$b=2000;
$c=30;
$d=400;

if($a>$b)
{

    if($a>$c)
    	 {
    	 	if($a>$d)
    	 		echo "a is greatest";
    	 	else
    	 		echo "d is greatest";
    	 }
    	
      else
     {
    	if($c>$d)
    	{
    		echo "c is greatest";
    	}
    	else
    	{
    		echo "d is greatest";
    	}
    }
    	


}
else
{
     if($b>$c)
     {
     	if($b>$d)
     	{
     		echo "b is greatest";
     	}
     	else
     	{
     		echo "d is greatest";
     	}
     }
     	
     else
     {
     	if($c>$d)
     	{
     		echo "c is greatest";
     	}
     	else
     	{
     		echo "d is greatest";
     	}
     }
     	


}


?>