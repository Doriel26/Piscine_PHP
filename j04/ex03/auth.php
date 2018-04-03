<?php
function auth($login, $passwd)
{
	$var = 1;
	$file = file_get_contents("../private/passwd");
	if ($file)
	{
		$data = unserialize($file);
		foreach ($data as $account)
		{
			if ($account['login'] == $login && $account['passwd'] == hash("whirlpool", $passwd))
			{
				$var = 2;
				return (TRUE);
			}
		}
		if ($var = 1)
			return (FALSE);
	}
	else
		return (FALSE);
}
?>