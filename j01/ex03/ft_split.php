<?php
	function ft_split($str)
	{
		$val = explode(' ', $str);
		$tab = array_filter($val);
		return ($tab);
	}
$str = "Coucou les amis     pd";
$tab = ft_split($str);
echo "$tab";
?>
