#!/usr/bin/php
<?php
function ft_split($str)
	{
		$tab = explode(' ', $str);
		sort($tab);
		return ($tab);
}
$resultat = array();
if (count($argv) != 1)
{
	foreach($argv as $elements)
	{
		if ($elements != $argv[0])
		{
			$tab = ft_split($elements);
			$resultat = array_merge($resultat, $tab);
		}
	}
$numeric = array();
	foreach ($resultat as $element)
	{
		if (is_numeric($element) == TRUE)
		{
			$numeric[] = $element;
		}
	}
	sort($numeric, SORT_STRING);

$alpha = array();
	foreach ($resultat as $element)
	{
		if (ctype_alpha($element) == TRUE)
		{
			$alpha[] = $element;
		}
	}
$ascii = array();
	sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);

	foreach ($resultat as $element)
	{
		if (is_numeric($element) == FALSE && ctype_alpha($element) == FALSE)
		{
			$ascii[] = $element;
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
