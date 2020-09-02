<?php

echo date('d')."<br>";
echo date('m')."<br>";
echo date('y')."<br>";
echo date('D')."<br>";
echo date('M')."<br>";
echo date('Y')."<br>";
echo date('d-m-y')."<br>";
date_default_timezone_set("Asia/Kolkata"); 
echo date('h')."<br>";
echo date('i')."<br>";
echo date('s')."<br>";
echo date('h-i-s')."<br>";
echo time();
echo(date("Y-m-d h-i-s",time()));

echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));

?>