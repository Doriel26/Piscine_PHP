<?php
	function ft_split($str)
	{
		$val = explode(' ', $str);
		$tab = array_filter($val);
		sort($tab);
		return ($tab);
	}
?>
