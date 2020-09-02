<?php

$marks=array("phy"=>45,"chem"=>75,"maths"=>89,"eng"=>77,"hin"=>55);

$count=0;

$total=0;

foreach ($marks as $key => $value) {

	if($value<33)
	{
		$count++;
	}
	else
	{
		$total=$total+$value;
	}

}

if($count==0)
{
	$per=$total/5;
	if($per>=33 && $per<45)
    echo "Pass with third division";
    else if($per<60)
    echo "Pass with second division";
    else
    echo "Pass with first division";	
    
    
}
else if($count==1)
{
    echo "SUPPL";
}
else
{
   echo "Failed";
}





?>