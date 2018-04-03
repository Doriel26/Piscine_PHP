<?php
$var = 1;
if ($_POST && $_POST['submit'] == "OK" && $_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] !== "")
{
	$file = file_get_contents("../private/passwd");
	if ($file)
	{
		$i = 0;
		$data = unserialize($file);
		foreach ($data as $account)
		{
			if ($account['login'] == $_POST['login'] && $account['passwd'] == hash("whirlpool", $_POST['oldpw']))
			{
				$var = 2;
				$data[$i]['passwd'] = hash("whirlpool", $_POST['newpw']);
				file_put_contents("../private/passwd", serialize($data));
				echo "OK\n";
				break ;
			}
			$i++;
		}
		if ($var == 1)
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>