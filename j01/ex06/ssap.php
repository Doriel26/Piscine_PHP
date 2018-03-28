#!/usr/bin/php
<?php
$tab = array();
unset($argv[0]);
foreach ($argv as $val)
{
	$tmp = explode(' ', $val);
	foreach($tmp as $elm)
	{
		if($elm != "")
			$tab[] = $elm;
	}
}
sort($tab);
foreach($tab as $val)
	echo "$val\n";
?>