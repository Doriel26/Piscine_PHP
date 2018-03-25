<?php
function	ft_is_sort($tab)
{
	$i = 0;
	$tmp = 0;
	while ($tab[$i])
	{
		if (ord($tab[$i]) < $tmp)
			return false;
		$tmp = ord($tab[$i]);
		$i++;
	}
	return true;
}
?>
