#!/usr/bin/php
<?php
$array = array();
unset($argv[0]);
foreach ($argv as $val)
{
	$tmp = explode(' ', $val);
	$str = array_filter($tmp);
	foreach ($str as $val2)
		$array[] = $val2;
}
sort($array);
foreach($array as $val)
	echo "$val\n";
?>
