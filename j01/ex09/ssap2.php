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
		sort($tab);
		return ($tab);
	}
$res = array();
if (count($argv) != 1)
{
	foreach($argv as $elem)
	{
		if ($elem != $argv[0])
		{
			$tab = ft_split($elem);
			$res = array_merge($res, $tab);
		}
	}
$numeric = array();
	foreach ($res as $elem)
	{
		if (is_numeric($elem) == TRUE)
		{
			$numeric[] = $elem;
		}
	}
	sort($numeric, SORT_STRING);

$alpha = array();
	foreach ($res as $elem)
	{
		if (ctype_alpha($elem) == TRUE)
		{
			$alpha[] = $elem;
		}
	}
$ascii = array();
	sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);

	foreach ($res as $elem)
	{
		if (is_numeric($elem) == FALSE && ctype_alpha($elem) == FALSE)
		{
			$ascii[] = $elem;
		}
	}
	sort($ascii);

	foreach($alpha as $ele)
	{
		echo $ele . "\n";
	}
	foreach($numeric as $ele)
	{
		echo $ele . "\n";
	}
	foreach($ascii as $ele)
	{
		echo $ele . "\n";
	}
}
?>