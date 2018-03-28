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
?>