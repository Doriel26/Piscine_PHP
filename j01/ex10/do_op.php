#!/usr/bin/php
<?php
$argv[1] = trim($argv[1]);
$argv[2] = trim($argv[2]);
$argv[3] = trim($argv[3]);
if ($argc == 4)
{
	if ($argv[2] == "+")
		echo $argv[1] + $argv[3];
	else if ($argv[2] == "-")
		echo $argv[1] - $argv[3];
	else if ($argv[2] == "*")
		echo $argv[1] * $argv[3];
	else if ($argv[2] == "/")
		echo $argv[1] / $argv[3];
	else if ($argv[2] == "%")
		echo $argv[1] % $argv[3];
}
else
	echo "Incorrect Parameters";
echo "\n";
?>
