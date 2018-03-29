#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/paris');
	$user = get_current_user();
	$file = file_get_contents("/var/run/utmpx");
	$sub = substr($file, 1256);
	$tab = array();
	$typedef   = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
	while ($sub != NULL) {
		$array = unpack($typedef, $sub);
		if (strcmp(trim($array[user]), $user) == 0 && $array[type] == 7)
		{
			$date = date("M  j H:i", $array["time1"]);
			$line = trim($array[line]);
			$line = $line . "  ";
			$usr = trim($array[user]);
			$usr = $usr . "  ";
			$tab = array($usr.$line.$date);
			$tab = array_merge($tab, $tab);
		}
		$sub = substr($sub, 628);		
	}
	sort($tab);
	foreach ($tab as $elem) {
		echo $elem;
		echo "\n";
	}
?>