#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$tab = array();
		$val = explode(' ', $str);
		foreach($val as $elm)
		{
			if($elm != "")
				$tab[] = $elm;
		}
		return ($tab);
	}
	if ($argc > 1 && $argv[1])
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