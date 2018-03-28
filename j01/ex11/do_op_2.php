#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
}
else
{
	$tab = sscanf($argv[1], "%d %c %d");
	if ($tab[0] && $tab[1] && ($tab[2] != NULL || (($tab[1] == "*"
		|| $tab[1] == "+" || $tab[1] == "-") && $tab[2] == "0")) && !$tab[3])
	{
		if ($tab[1] == '+')
		{
			$res = $tab[0] + $tab[2];
			echo $res . "\n";
		}
		if ($tab[1] == '-')
		{
			$res = $tab[0] - $tab[2];
			echo $res . "\n";
		}
		if ($tab[1] == '*')
		{
			$res = $tab[0] * $tab[2];
			echo $res . "\n";
		}
		if ($tab[1] == '/')
		{
			$res = $tab[0] / $tab[2];
			echo $res . "\n";
		}
		if ($tab[1] == '%')
		{
			$res = $tab[0] % $tab[2];
			echo $res . "\n";
		}
	}
	else
	{
		echo "Syntax Error\n";
	}
}
?>
