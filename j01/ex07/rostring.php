#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$val = explode(' ', $str);
		$tab = array_filter($val);
		return ($tab);
	}
	if ($argc > 1)
	{
		$tab = ft_split($argv[1]);
		$tmp = array_shift($tab);
		array_push($tab, $tmp);
		for ($i = 0; $i < count($tab); $i++)
		{
			if ($i == count($tab) - 1)
				echo "$tab[$i]";
			else
				echo "$tab[$i] ";
		}
		echo "\n";
	}
?>
