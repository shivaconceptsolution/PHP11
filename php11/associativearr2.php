<?php

$arr = array("rno"=>1001,"sname"=>"manish","branch"=>"cs");

echo $arr["sname"];

foreach ($arr as $key => $value) {
	echo "$key is $value";
}

print_r($arr);

?>