<?php
$phy = 96;
$chem=89;
$math=98;
$eng=35;
$hin=30;
if(($phy>=0 && $phy<=100) && ($chem>=0 && $chem<=100) &&  ($math>=0 && $math<=100) &&  ($eng>=0 && $eng<=100) &&  ($hin>=0 && $hin<=100))
{

    $c=0;
    $grace=0;
    $sub="";
    $d="";
    if($phy<33)
    	 {
    	 	$grace=$phy;
    	 	$sub = $sub." PHYSICS ";
    	 	$c++;
    	 }
    	
    if($chem<33)
    {
    	$grace=$chem;
    	$sub = $sub." CHEMISTRY ";
    	$c++;
    }
    if($math<33)
    {
    	$grace=$math;
    	$sub = $sub." MATH ";
    	$c++;
    }
    if($eng<33)
    {
    	$grace=$eng;
    	$sub = $sub." ENGLISH ";
    	$c++;
    }
    if($hin<33)
    {
    	$sub = $sub." HINDI ";
    	$grace=$hin;
    	$c++;
    }

    if($phy>=75)
    	$d = $d. " PHYSICS ";
    if($chem>=75)
    	$d = $d. " CHEMISTRY ";
    if($math>=75)
    	$d = $d. " Maths ";
    if($eng>=75)
    	$d = $d. " ENGLISH ";
    if($hin>=75)
    	$d = $d. " HINDI ";

    if($c==0 || ($c==1 && $grace>=28))
    {
      if($grace>0)
      {
      	$per = ($phy+$chem+$math+$eng+$hin+(33-$grace))/5;
      	echo "pass by Grace in $sub  <hr> grace marks is ".(33-$grace)."<hr>";
      }
      else
      {	
     $per = ($phy+$chem+$math+$eng+$hin)/5;
     }
     if($per>=33 && $per<45)
     {
     	echo "Pass in third division percentage is $per %";
     }
     else if($per<60)
     {
     	echo "Pass in second division percentage is $per %";
     }
     else
     {
     	echo "first division percentage is $per %";
     }
     if($d!="")
     {
     	echo "<hr>Distinction Subject Name is $d";
     }
    }
    else if($c==1)
    {
    	echo "suppl in $sub";

    }
    else
    {
        echo "failed in $sub";
    }


}
else
{
	echo "all subect marks should be 0 to 100";
}










?>