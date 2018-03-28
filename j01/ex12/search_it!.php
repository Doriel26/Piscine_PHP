#!/usr/bin/php
<?php
if (count($argv) < 3)
{
	exit();
}
else
{
	$key = $argv[1];
	$tab = array();
	for ($arg = 2; $arg < $argc; $arg++)
	{
		$str = explode(":", $argv[$arg], 2);
		if (isset($str[1]))
		{
			$tab[$str[0]] = $str[1];
		}
		else
		{
			$tab[$str[0]] = "";
		}
	}
	if (isset($tab[$key]))
		echo $tab[$key] . "\n";
}
?>