#!/usr/bin/php
<?php
$stdin = fopen('php://stdin', 'r');
echo "Entrez un nombre: ";
$num = fgets($stdin);
while ($num)
{
	$nl = explode("\n", $num);
	$nb = $nl[0];
	if (is_numeric($nb) && ereg("^([0-9]|-)([0-9]*)$", $nb))
	{
		if (((int)$nb[strlen($nb) - 1]) % 2 == 0)
			echo "Le chiffre " .$nb. " est Pair\n";
		else
			echo "Le chiffre " .$nb. " est Impair\n";
	}
	else
		echo "'" .$nb. "' n'est pas un chiffre\n";
	echo "Entrez un nombre: ";
	$num = fgets($stdin);
}
fclose($stdin);
?>
